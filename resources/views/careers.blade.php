@extends('layouts.single-pages')

@section('styles')
<style>
.career-section {
  display: flex;
  justify-content: center;
  align-items: center;
  min-height: 100vh;
  background: #fff;
  flex-direction: column;
  padding: 0;
  margin: 0;
}

.career-hero {
  width: 100%;
  height: 400px;
  overflow: hidden;
}

.career-hero img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  object-position: center;
}

.career-wrap {
  width: 100%;
  max-width: 700px;
  text-align: center;
  margin: 2rem auto;
  padding: 0 1rem;
}

.career-title {
  color: #d57327 !important;
  margin-bottom: 1rem;
}

.career-sub {
  color: black !important;
  margin-bottom: 2rem;
}

.career-actions {
  width: 100%;
  display: flex;
  justify-content: center;
}

.career-btn {
  color: black !important;
  border: 2px solid black;
  padding: .75rem 1.25rem;
  border-radius: 999px;
  text-decoration: none;
  display: inline-flex;
  align-items: center;
  gap: .5rem;
}

/* -------- Responsive adjustments -------- */
@media (max-width: 768px) {
  .career-title {
    font-size: 1.5rem;
  }
  .career-sub {
    font-size: 1rem;
  }
  .career-btn {
    font-size: 0.95rem;
    padding: .65rem 1rem;
  }
}

@media (max-width: 480px) {
  .career-wrap {
    padding: 5px;
  }
  .career-title {
    font-size: 2rem;
  }
  .career-sub {
    font-size: 1.1rem;
  }
  .career-btn {
    font-size: 1.1rem;
    padding: 10px;
  }
}
</style>
@endsection

@section('content')
<section class="career-section">

  <!-- Hero Image Full Width -->
  <div class="career-hero">
    <img src="/images/career-cover.jpg" alt="Join Deboned Team">
  </div>

  <div class="career-wrap">
    <h1 class="career-title font-buttercell">
      Join the Deboned family and bring your creativity to the table!
    </h1>

    <p class="career-sub">
      We're always looking for passionate minds and bold thinkers to grow with us.<br>
      If you’d like to be part of future opportunities, please share your CV at the email below.<br>
      <br>Only shortlisted applicants will be contacted.
    </p>

    <div class="career-actions">
      <a class="career-btn" href="mailto:talent.acquisition@neesh.net?subject=CV%20Submission">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M4 6h16a1 1 0 0 1 1 1v10a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1V7a1 1 0 0 1 1-1zm0 0l8 6 8-6" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
        Email your CV
      </a>
    </div>

    <p class="career-sub">
      <br>talent.acquisition@neesh.net
    </p>
  </div>

</section>
@endsection
