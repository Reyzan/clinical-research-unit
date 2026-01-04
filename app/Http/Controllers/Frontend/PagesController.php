<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    // Homepage variations
    public function index()
    {
        return view('frontend.pages.index');
    }

    public function homepage2()
    {
        return view('frontend.pages.homepage-2');
    }

    public function homepage3()
    {
        return view('frontend.pages.homepage-3');
    }

    // About pages
    public function aboutUs()
    {
        return view('frontend.pages.about-us');
    }

    public function ourHistory()
    {
        return view('frontend.pages.our-history');
    }

    // Services
    public function services()
    {
        return view('frontend.pages.services');
    }

    public function serviceDetails()
    {
        return view('frontend.pages.service-details');
    }

    // Doctors
    public function ourDoctors()
    {
        return view('frontend.pages.our-doctors');
    }

    public function doctorDetail()
    {
        return view('frontend.pages.doctor-detail');
    }

    // Other pages
    public function appointment()
    {
        return view('frontend.pages.appointment');
    }

    public function contactUs()
    {
        return view('frontend.pages.contact-us');
    }

    public function faq()
    {
        return view('frontend.pages.faq');
    }

    public function element()
    {
        return view('frontend.pages.element');
    }

    // Blog pages
    public function blogClassic()
    {
        return view('frontend.pages.blog-classic');
    }

    public function blogGridCol3()
    {
        return view('frontend.pages.blog-grid-col-3');
    }

    public function blogGridCol4()
    {
        return view('frontend.pages.blog-grid-col-4');
    }

    public function blogMasonryWide()
    {
        return view('frontend.pages.blog-masonry-wide');
    }

    public function blogMGridCol2()
    {
        return view('frontend.pages.blog-m-grid-col-2');
    }

    public function blogMGridCol3()
    {
        return view('frontend.pages.blog-m-grid-col-3');
    }

    public function blogMGridCol4()
    {
        return view('frontend.pages.blog-m-grid-col-4');
    }

    public function blogSingleDetail()
    {
        return view('frontend.pages.blog-single-detail');
    }

    public function blogSortableGridView()
    {
        return view('frontend.pages.blog-sortable-grid-view');
    }

    // Portfolio pages
    public function portfolioDetailStyle01()
    {
        return view('frontend.pages.portfolio-detail-style-01');
    }

    public function portfolioDetailStyle02()
    {
        return view('frontend.pages.portfolio-detail-style-02');
    }

    public function portfolioGridCol2()
    {
        return view('frontend.pages.portfolio-grid-col-2');
    }

    public function portfolioGridCol3()
    {
        return view('frontend.pages.portfolio-grid-col-3');
    }

    public function portfolioGridCol4()
    {
        return view('frontend.pages.portfolio-grid-col-4');
    }

    public function portfolioGridNoGap()
    {
        return view('frontend.pages.portfolio-grid-no-gap');
    }

    public function portfolioMGridCol2()
    {
        return view('frontend.pages.portfolio-m-grid-col-2');
    }

    public function portfolioMGridCol3()
    {
        return view('frontend.pages.portfolio-m-grid-col-3');
    }

    public function portfolioMGridCol4()
    {
        return view('frontend.pages.portfolio-m-grid-col-4');
    }

    public function portfolioMGridWide()
    {
        return view('frontend.pages.portfolio-m-grid-wide');
    }

    public function portfolioSortableGridCol2()
    {
        return view('frontend.pages.portfolio-sortable-grid-col-2');
    }

    public function portfolioSortableGridCol3()
    {
        return view('frontend.pages.portfolio-sortable-grid-col-3');
    }

    public function portfolioSortableGridCol4()
    {
        return view('frontend.pages.portfolio-sortable-grid-col-4');
    }
}
