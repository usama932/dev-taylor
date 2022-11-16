<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContentPage;
use App\Models\Slide;
use App\Models\Slider;
use App\Models\WhatWeDo;
use App\Models\KnowledgeCategory;
use App\Models\Knowledge;

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

        $whatwedos = WhatWeDo::where('featured',1)->latest()->take(4)->get();

        $page  = ContentPage::where('slug', $pageSlug)->with('categories', 'parent', 'tags','contactInfoLocations','slidesidSlides','pagePageCustomFields')->first();

        $recruitment_slider = Slider::where('name','Recruitement')->with('sliderSlides')->first();

        $specialist_slider = Slider::where('name','Specialist')->with('sliderSlides')->first();

        if(!$pageSlug) {
            return view('index',compact('page','recruitment_slider','specialist_slider','top_slides','whatwedos'));
        }
        $pageTemplate = \View::exists($pageSlug) ? $pageSlug : 'index';

        return view($pageTemplate ,compact('page','recruitment_slider'));
    }
    public function knowledge_single($slug){
       $knowledge = Knowledge::where('slug',$slug)->first();

       $knowledge_related = Knowledge::where('name','LIKE',"%{$knowledge->name}%")->orwhere('description','LIKE',"%{$knowledge->name}%")->with('category')->limit(3)->get();

       return view('knowledge-single',compact('knowledge','knowledge_related'));

    }
}
