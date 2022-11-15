<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentPage;
use App\Models\Slide;
use App\Models\Slider;
use App\Models\Knowledge;
use App\Models\TeamMember;
use App\Models\WhatWeDo;
use App\Models\KnowledgeCategory;
class IndexController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $pageSlug = request()->segment(1);

        $top_slides =  Slider::where('name','Hero Slider')->with('sliderSlides')->get();

        $page  = ContentPage::where('slug', $pageSlug)->with('categories', 'parent', 'tags','contactInfoLocations','slidesidSlides','pagePageCustomFields')->first();

        $recruitment_slider = Slider::where('name','Recruitement')->with('sliderSlides')->first();

        $specialist_slider = Slider::where('name','Specialist')->with('sliderSlides')->first();

        $teams = TeamMember::orderby('id')->take(2)->get();

        $teams1 = TeamMember::orderby('id')->skip(2)->take(3)->get();

        $teams2 = TeamMember::orderby('id')->skip(5)->take(2)->get();

        $pageTemplate = \View::exists($pageSlug) ? $pageSlug : 'index';

        $whatwedos = WhatWeDo::latest()->take(4)->get();

        $knowledge = Knowledge::with('category')->latest()->limit(6)->get();

        if(!$pageSlug) {
            $page  = ContentPage::where('slug', 'home')->with('categories', 'parent', 'tags','contactInfoLocations','slidesidSlides','pagePageCustomFields')->first();
            return view('index',compact('page','recruitment_slider','specialist_slider','top_slides','whatwedos'));
        }


        return view($pageTemplate ,compact('page','knowledge','recruitment_slider','teams','teams2','teams1'));
    }
    public function knowledge_single($slug){
       $knowledge = Knowledge::where('slug',$slug)->first();
       $knowledge_related = Knowledge::where('name','LIKE',"%{$knowledge->name}%")->orwhere('description','LIKE',"%{$knowledge->name}%")->with('category')->limit(3)->get();

       return view('knowledge-single',compact('knowledge','knowledge_related'));

    }
}
