<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:sanctum']], function () {
    // Content Page
    Route::post('content-pages/media', 'ContentPageApiController@storeMedia')->name('content-pages.storeMedia');
    Route::apiResource('content-pages', 'ContentPageApiController');

    // Case Study
    Route::post('case-studies/media', 'CaseStudyApiController@storeMedia')->name('case-studies.storeMedia');
    Route::apiResource('case-studies', 'CaseStudyApiController');

    // Knowledge
    Route::post('knowledges/media', 'KnowledgeApiController@storeMedia')->name('knowledges.storeMedia');
    Route::apiResource('knowledges', 'KnowledgeApiController');

    // Knowledge Category
    Route::post('knowledge-categories/media', 'KnowledgeCategoryApiController@storeMedia')->name('knowledge-categories.storeMedia');
    Route::apiResource('knowledge-categories', 'KnowledgeCategoryApiController');

    // Knowledge Tag
    Route::apiResource('knowledge-tags', 'KnowledgeTagApiController');

    // Navigationmenu
    Route::apiResource('navigationmenus', 'NavigationmenuApiController');

    // Menuitem
    Route::apiResource('menuitems', 'MenuitemApiController');

    // Slider
    Route::apiResource('sliders', 'SliderApiController');

    // Slide
    Route::post('slides/media', 'SlideApiController@storeMedia')->name('slides.storeMedia');
    Route::apiResource('slides', 'SlideApiController');

    // Team Members
    Route::post('team-members/media', 'TeamMembersApiController@storeMedia')->name('team-members.storeMedia');
    Route::apiResource('team-members', 'TeamMembersApiController');

    // Company
    Route::post('companies/media', 'CompanyApiController@storeMedia')->name('companies.storeMedia');
    Route::apiResource('companies', 'CompanyApiController');

    // What We Do
    Route::post('what-we-dos/media', 'WhatWeDoApiController@storeMedia')->name('what-we-dos.storeMedia');
    Route::apiResource('what-we-dos', 'WhatWeDoApiController');
});
