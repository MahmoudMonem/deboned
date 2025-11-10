<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    /**
     * Display the homepage
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }

    /**
     * Display the about page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        return view('pages.about');
    }

    /**
     * Display the menu page
     *
     * @return \Illuminate\View\View
     */
    public function menu()
    {
        // You can add menu items from database here
        $menuCategories = [
            'appetizers' => 'Appetizers',
            'mains' => 'Main Courses',
            'desserts' => 'Desserts',
            'beverages' => 'Beverages'
        ];
        
        return view('pages.menu', compact('menuCategories'));
    }

    /**
     * Display the restaurants/locations page
     *
     * @return \Illuminate\View\View
     */
    public function restaurants()
    {
        // You can fetch restaurants from database
        $restaurants = [
            [
                'name' => 'Deboned Downtown',
                'address' => '123 Gourmet Street, Downtown',
                'phone' => '+1 (234) 567-8901',
                'hours' => 'Mon-Sun: 11:00 AM - 11:00 PM'
            ],
            [
                'name' => 'Deboned Waterfront',
                'address' => '456 Harbor View, Waterfront',
                'phone' => '+1 (234) 567-8902',
                'hours' => 'Mon-Sun: 12:00 PM - 10:00 PM'
            ]
        ];
        
        return view('pages.restaurants', compact('restaurants'));
    }

    /**
     * Display the events page
     *
     * @return \Illuminate\View\View
     */
    public function events()
    {
        return view('pages.events');
    }

    /**
     * Display the contact page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }

    /**
     * Display the reservations page
     *
     * @return \Illuminate\View\View
     */
    public function reservations()
    {
        return view('pages.reservations');
    }

    /**
     * Handle reservation form submission
     *
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function storeReservation(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'date' => 'required|date|after:today',
            'time' => 'required|string',
            'guests' => 'required|integer|min:1|max:20',
            'special_requests' => 'nullable|string|max:500'
        ]);

        // Here you would typically save to database
        // Reservation::create($validated);

        return redirect()->route('reservations')->with('success', 'Your reservation has been successfully submitted!');
    }

    /**
     * Handle newsletter subscription
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function newsletter(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email|unique:newsletter_subscribers,email'
        ]);

        // Here you would typically save to database
        // NewsletterSubscriber::create($validated);

        if ($request->ajax()) {
            return response()->json([
                'success' => true,
                'message' => 'Successfully subscribed to our newsletter!'
            ]);
        }

        return redirect()->back()->with('success', 'Successfully subscribed to our newsletter!');
    }

    /**
     * Display the catering page
     *
     * @return \Illuminate\View\View
     */
    public function catering()
    {
        return view('pages.catering');
    }

    /**
     * Display the private dining page
     *
     * @return \Illuminate\View\View
     */
    public function privateDining()
    {
        return view('pages.private-dining');
    }

    /**
     * Display the careers page
     *
     * @return \Illuminate\View\View
     */
    public function careers()
    {
        $positions = [
            [
                'title' => 'Head Chef',
                'department' => 'Kitchen',
                'location' => 'Downtown Location',
                'type' => 'Full-time'
            ],
            [
                'title' => 'Sous Chef',
                'department' => 'Kitchen',
                'location' => 'Waterfront Location',
                'type' => 'Full-time'
            ],
            [
                'title' => 'Server',
                'department' => 'Front of House',
                'location' => 'All Locations',
                'type' => 'Part-time/Full-time'
            ]
        ];
        
        return view('/careers', compact('positions'));
    }

    /**
     * Display the gift cards page
     *
     * @return \Illuminate\View\View
     */
    public function giftCards()
    {
        return view('pages.gift-cards');
    }

    /**
     * Display the loyalty program page
     *
     * @return \Illuminate\View\View
     */
    public function loyalty()
    {
        return view('pages.loyalty');
    }

    /**
     * Display the press page
     *
     * @return \Illuminate\View\View
     */
    public function press()
    {
        return view('pages.press');
    }

    /**
     * Display the privacy policy page
     *
     * @return \Illuminate\View\View
     */
    public function privacy()
    {
        return view('pages.privacy');
    }

    /**
     * Display the terms of service page
     *
     * @return \Illuminate\View\View
     */
    public function terms()
    {
        return view('pages.terms');
    }

    /**
     * Display the sitemap page
     *
     * @return \Illuminate\View\View
     */
    public function sitemap()
    {
        return view('pages.sitemap');
    }

        public function successmessage()
    {
        return view('success-message');
    }



    // Add these methods to your existing PagesController

public function storeFranchise(Request $request)
{
    $validated = $request->validate([
        'email' => 'required|email|max:255',
        'concept' => 'required|string|max:255',
        'message' => 'nullable|string|max:1000'
    ]);

    \DB::table('franmsgs')->insert([
        'email' => $validated['email'],
        'concept' => $validated['concept'],
        'message' => $validated['message'] ?? '',
        'created_at' => now(),
        'updated_at' => now()
    ]);

   return view('success-message');
}




/**
 * Handle contact form submission
 *
 * @param Request $request
 * @return \Illuminate\Http\RedirectResponse
 */
public function storeContact(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'message' => 'required|string|min:10|max:1000'
    ]);

    \DB::table('messages')->insert([
        'name' => $validated['name'],
        'email' => $validated['email'],
        'message' => $validated['message'],
        'created_at' => now(),
        'updated_at' => now()
    ]);

    return redirect()->back()->with('success', 'Thank you for your message. We will get back to you soon!');
}





}