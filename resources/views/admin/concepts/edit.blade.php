@extends('admin.layout')

@section('title', 'Edit Concept')

@push('styles')
<script src="https://cdn.tiny.cloud/1/qzl6ktzac96pi2ghbpdlum92ypt16hiude4ao1cv4ksfncgq/tinymce/8/tinymce.min.js" referrerpolicy="origin" crossorigin="anonymous"></script>
<style>
    .save-indicator {
        position: fixed;
        top: 20px;
        right: 20px;
        padding: 10px 20px;
        border-radius: 5px;
        font-weight: bold;
        z-index: 1000;
        transition: all 0.3s ease;
        display: none;
    }
    .save-indicator.saving { background-color: #ffc107; color: #000; }
    .save-indicator.saved { background-color: #28a745; color: #fff; }
    .save-indicator.error { background-color: #dc3545; color: #fff; }
    
    .auto-save-field {
        border-left: 3px solid transparent;
        transition: border-color 0.3s ease;
    }
    .auto-save-field.saving { border-left-color: #ffc107; }
    .auto-save-field.saved { border-left-color: #28a745; }
    .auto-save-field.error { border-left-color: #dc3545; }
</style>
@endpush

@section('content')
<div class="container">
    <h1>Edit Concept: {{ $concept->title_en }}</h1>

    <!-- Save Indicator -->
    <div id="saveIndicator" class="save-indicator">
        <span id="saveText">Saving...</span>
    </div>

    <form id="conceptForm" action="{{ route('admin.concepts.update', $concept->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <!-- Name -->
        <div class="mb-3">
            <label class="form-label">Concept Name</label>
            <input type="text" 
                   name="title_en" 
                   id="title_en"
                   class="form-control auto-save-field"
                   value="{{ old('title_en', $concept->title_en) }}" 
                   data-field="title_en"
                   required>
        </div>

        <div class="mb-3">
            <label class="form-label">Concept Sorting</label>
            <input type="number" 
                   name="sorting" 
                   id="sorting"
                   class="form-control auto-save-field"
                   value="{{ old('sorting', $concept->sorting) }}" 
                   data-field="sorting"
                   required>
        </div>

        <!-- Description -->
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea id="desc_en" 
                      name="desc_en" 
                      class="form-control auto-save-field"
                      data-field="desc_en">{{ old('desc_en', $concept->desc_en) }}</textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Slug</label>
            <input type="text" 
                   name="slug" 
                   id="slug"
                   class="form-control auto-save-field"
                   value="{{ old('slug', $concept->slug) }}" 
                   data-field="slug"
                   required>
        </div>

        <!-- Images -->
        <div class="mb-3">
            <label class="form-label">Images (max 3)</label>
            <div class="row">
                @foreach($conceptimgs as $i => $img)
                    <div class="col-md-4 text-center mb-2">
                        <img src="{{ asset('/assets/img/concepts/images/' . $img->url) }}" 
                             class="img-fluid rounded mb-1" style="max-height:150px;">
                        <input type="file" name="images[]" class="form-control">
                    </div>
                @endforeach

                @for($i = $conceptimgs->count(); $i < 3; $i++)
                    <div class="col-md-4 mb-2">
                        <input type="file" name="images[]" class="form-control">
                    </div>
                @endfor
            </div>
        </div>

        <button type="submit" class="btn btn-admin-primary">Save Changes</button>
        <button type="button" id="manualSave" class="btn btn-success ms-2">Save Text Fields</button>
    </form>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize TinyMCE
    tinymce.init({
        selector: 'textarea#desc_en',
        height: 300,
        menubar: false,
        plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
        toolbar: 'undo redo | blocks | bold italic forecolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        setup: function(editor) {
            editor.on('input change', function() {
                handleTinyMCEChange();
            });
            editor.on('blur', function() {
                triggerAutoSave();
            });
        }
    });

    // Auto-save configuration
    let autoSaveTimeout = null;
    let isCurrentlySaving = false;
    const SAVE_DELAY = 2000; // 2 seconds
    const SAVE_INDICATOR_DISPLAY_TIME = 3000; // 3 seconds
    
    // Get configuration from the page - USE SLUG instead of ID
    const conceptId = {{ $concept->id ?? 'null' }};
    const conceptSlug = '{{ $concept->slug ?? '' }}';
    const updateUrl = "{{ route('admin.concepts.update', $concept->slug ?? '') }}";
    const csrfToken = document.querySelector('meta[name="csrf-token"]')?.getAttribute('content');
    
    // Validate required elements exist
    if (!validateInitialSetup()) {
        return;
    }

    // Initialize event listeners
    initializeEventListeners();

    /**
     * Validate that all required elements and tokens are present
     */
    function validateInitialSetup() {
        console.log('=== AUTO-SAVE INITIALIZATION ===');
        console.log('Concept ID:', conceptId);
        console.log('Concept Slug:', conceptSlug);
        console.log('Update URL:', updateUrl);
        console.log('CSRF Token found:', !!csrfToken);
        
        if (!csrfToken) {
            console.error('CSRF token not found! Make sure you have <meta name="csrf-token" content="{{ csrf_token() }}"> in your layout header');
            showSaveIndicator('error', 'Configuration error: CSRF token missing');
            return false;
        }

        if (!conceptSlug || conceptSlug === '') {
            console.error('CRITICAL ERROR: Concept slug is missing!');
            showSaveIndicator('error', 'Configuration error: Invalid concept slug');
            return false;
        }

        const saveIndicator = document.getElementById('saveIndicator');
        if (!saveIndicator) {
            console.error('Save indicator element not found');
            return false;
        }

        return true;
    }

    /**
     * Initialize all event listeners for auto-save functionality
     */
    function initializeEventListeners() {
        // Add event listeners to regular input fields
        const autoSaveFields = document.querySelectorAll('.auto-save-field:not(textarea)');
        autoSaveFields.forEach(field => {
            // Handle input events (typing)
            field.addEventListener('input', function(e) {
                handleFieldChange(e.target);
            });

            // Handle blur events (field loses focus)
            field.addEventListener('blur', function(e) {
                triggerAutoSave();
            });

            // Handle Enter key
            field.addEventListener('keydown', function(e) {
                if (e.key === 'Enter') {
                    e.preventDefault();
                    triggerAutoSave();
                }
            });
        });

        // Manual save button
        const manualSaveButton = document.getElementById('manualSave');
        if (manualSaveButton) {
            manualSaveButton.addEventListener('click', function() {
                performAutoSave(true);
            });
        }

        // Form submit handler (prevent if auto-save is in progress)
        const conceptForm = document.getElementById('conceptForm');
        if (conceptForm) {
            conceptForm.addEventListener('submit', function(e) {
                if (isCurrentlySaving) {
                    e.preventDefault();
                    showSaveIndicator('error', 'Please wait, auto-save in progress...');
                    return false;
                }
            });
        }
    }

    /**
     * Handle changes in regular form fields
     */
    function handleFieldChange(field) {
        setFieldVisualState(field, 'typing');
        scheduleAutoSave();
    }

    /**
     * Handle changes in TinyMCE editor
     */
    function handleTinyMCEChange() {
        const textarea = document.getElementById('desc_en');
        if (textarea) {
            setFieldVisualState(textarea, 'typing');
        }
        scheduleAutoSave();
    }

    /**
     * Schedule an auto-save operation with debouncing
     */
    function scheduleAutoSave() {
        // Clear any existing timeout
        if (autoSaveTimeout) {
            clearTimeout(autoSaveTimeout);
        }

        // Set new timeout
        autoSaveTimeout = setTimeout(function() {
            triggerAutoSave();
        }, SAVE_DELAY);
    }

    /**
     * Trigger auto-save immediately (cancel any scheduled save)
     */
    function triggerAutoSave() {
        if (autoSaveTimeout) {
            clearTimeout(autoSaveTimeout);
            autoSaveTimeout = null;
        }
        performAutoSave(false);
    }

    /**
     * Perform the actual auto-save operation
     */
    async function performAutoSave(isManualSave = false) {
        // Prevent concurrent saves
        if (isCurrentlySaving) {
            console.log('Auto-save already in progress, skipping...');
            return;
        }
        
        console.log('=== STARTING AUTO-SAVE ===');
        console.log('Manual save:', isManualSave);
        console.log('Using concept slug:', conceptSlug);
        console.log('Timestamp:', new Date().toISOString());
        
        isCurrentlySaving = true;
        
        try {
            // Prepare form data
            const formData = prepareFormData();
            
            // Update UI to show saving state
            setAllFieldsVisualState('saving');
            showSaveIndicator('saving', 'Saving...');

            console.log('Sending request to:', updateUrl);
            console.log('Form data prepared with keys:', Array.from(formData.keys()));

            // Make the request
            const response = await fetch(updateUrl, {
                method: 'POST',
                body: formData,
                headers: {
                    'X-Requested-With': 'XMLHttpRequest',
                },
                credentials: 'same-origin'
            });

            console.log('Response received:', response.status, response.statusText);

            // Handle response
            await handleSaveResponse(response, isManualSave);

        } catch (error) {
            console.error('Auto-save error:', error);
            handleSaveError(error);
        } finally {
            isCurrentlySaving = false;
            
            // Reset field states after a delay
            setTimeout(function() {
                setAllFieldsVisualState('');
            }, 2000);
        }
    }

    /**
     * Prepare FormData for the save request
     */
    function prepareFormData() {
        const formData = new FormData();
        
        // Add Laravel required fields
        formData.append('_token', csrfToken);
        formData.append('_method', 'PUT');

        // Add regular form fields
        const autoSaveFields = document.querySelectorAll('.auto-save-field:not(textarea)');
        autoSaveFields.forEach(field => {
            const fieldName = field.getAttribute('data-field');
            if (fieldName && field.value !== undefined) {
                formData.append(fieldName, field.value.trim());
                console.log(`Adding field ${fieldName}:`, field.value.trim());
            }
        });

        // Add TinyMCE content
        const tinymceEditor = tinymce.get('desc_en');
        if (tinymceEditor) {
            const content = tinymceEditor.getContent();
            formData.append('desc_en', content);
            console.log('Adding TinyMCE content length:', content.length);
        } else {
            console.warn('TinyMCE editor not found or not initialized');
        }

        return formData;
    }

    /**
     * Handle successful/failed save response
     */
    async function handleSaveResponse(response, isManualSave) {
        if (!response.ok) {
            let errorMessage = `HTTP ${response.status}: ${response.statusText}`;
            
            try {
                const errorText = await response.text();
                console.error('Error response body:', errorText);
                
                // Try to parse as JSON for Laravel validation errors
                try {
                    const errorJson = JSON.parse(errorText);
                    if (errorJson.message) {
                        errorMessage = errorJson.message;
                    }
                    if (errorJson.errors) {
                        console.error('Validation errors:', errorJson.errors);
                        errorMessage += ' (Check console for validation details)';
                    }
                } catch (parseError) {
                    // Not JSON, use the raw error text if it's reasonable length
                    if (errorText.length < 100) {
                        errorMessage = errorText;
                    }
                }
            } catch (textError) {
                console.error('Could not read error response:', textError);
            }
            
            throw new Error(errorMessage);
        }

        // Parse successful response
        const result = await response.json();
        console.log('Save response:', result);
        
        if (result.success) {
            setAllFieldsVisualState('saved');
            const message = isManualSave ? 'Changes saved manually!' : 'Auto-saved successfully!';
            showSaveIndicator('saved', message);
        } else {
            throw new Error(result.message || 'Server reported save failure');
        }
    }

    /**
     * Handle save errors
     */
    function handleSaveError(error) {
        console.error('Save operation failed:', error.message);
        setAllFieldsVisualState('error');
        showSaveIndicator('error', `Save failed: ${error.message}`);
    }

    /**
     * Set visual state for a specific field
     */
    function setFieldVisualState(field, state) {
        if (!field) return;
        
        const states = ['saving', 'saved', 'error', 'typing'];
        states.forEach(s => field.classList.remove(s));
        
        if (state && state !== '') {
            field.classList.add(state);
        }
    }

    /**
     * Set visual state for all auto-save fields
     */
    function setAllFieldsVisualState(state) {
        const allFields = document.querySelectorAll('.auto-save-field');
        allFields.forEach(field => {
            setFieldVisualState(field, state);
        });
    }

    /**
     * Show save indicator with message
     */
    function showSaveIndicator(type, message) {
        const indicator = document.getElementById('saveIndicator');
        const textElement = document.getElementById('saveText');
        
        if (!indicator || !textElement) {
            console.warn('Save indicator elements not found');
            return;
        }

        // Reset classes and add new type
        indicator.className = `save-indicator ${type}`;
        textElement.textContent = message;
        indicator.style.display = 'block';

        console.log(`Save indicator: ${type} - ${message}`);

        // Auto-hide after delay
        setTimeout(function() {
            indicator.style.display = 'none';
        }, SAVE_INDICATOR_DISPLAY_TIME);
    }

    // Expose some functions globally for debugging
    window.conceptAutoSave = {
        triggerSave: () => triggerAutoSave(),
        isCurrentlySaving: () => isCurrentlySaving,
        conceptId: conceptId,
        conceptSlug: conceptSlug,
        updateUrl: updateUrl
    };

    console.log('Auto-save system initialized successfully');
});
</script>
@endsection