<?php

use App\Models\ContentPage;
use Illuminate\Support\Facades\Auth;


Auth::routes();
Route::get('/', 'IndexController@index');

Route::get('/testing',function(){
    return view('auth.login');
});

ContentPage::get()->map(function($page) {
    Route::get('/'.$page->slug, 'IndexController@index');
});
Route::get('knowledge/{slug}','IndexController@knowledge_single')->name('knowledge.show');

Route::get('userVerification/{token}', 'UserVerificationController@approve')->name('userVerification');


Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth', 'admin']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Case Study
    Route::delete('case-studies/destroy', 'CaseStudyController@massDestroy')->name('case-studies.massDestroy');
    Route::post('case-studies/media', 'CaseStudyController@storeMedia')->name('case-studies.storeMedia');
    Route::post('case-studies/ckmedia', 'CaseStudyController@storeCKEditorImages')->name('case-studies.storeCKEditorImages');
    Route::resource('case-studies', 'CaseStudyController');

    // Knowledge
    Route::delete('knowledges/destroy', 'KnowledgeController@massDestroy')->name('knowledges.massDestroy');
    Route::post('knowledges/media', 'KnowledgeController@storeMedia')->name('knowledges.storeMedia');
    Route::post('knowledges/ckmedia', 'KnowledgeController@storeCKEditorImages')->name('knowledges.storeCKEditorImages');
    Route::resource('knowledges', 'KnowledgeController');

    // Knowledge Category
    Route::delete('knowledge-categories/destroy', 'KnowledgeCategoryController@massDestroy')->name('knowledge-categories.massDestroy');
    Route::post('knowledge-categories/media', 'KnowledgeCategoryController@storeMedia')->name('knowledge-categories.storeMedia');
    Route::post('knowledge-categories/ckmedia', 'KnowledgeCategoryController@storeCKEditorImages')->name('knowledge-categories.storeCKEditorImages');
    Route::resource('knowledge-categories', 'KnowledgeCategoryController');

    // Knowledge Tag
    Route::delete('knowledge-tags/destroy', 'KnowledgeTagController@massDestroy')->name('knowledge-tags.massDestroy');
    Route::resource('knowledge-tags', 'KnowledgeTagController');

    // Navigationmenu
    Route::delete('navigationmenus/destroy', 'NavigationmenuController@massDestroy')->name('navigationmenus.massDestroy');
    Route::resource('navigationmenus', 'NavigationmenuController');

    // Menuitem
    Route::delete('menuitems/destroy', 'MenuitemController@massDestroy')->name('menuitems.massDestroy');
    Route::resource('menuitems', 'MenuitemController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::resource('sliders', 'SliderController');

    // Slide
    Route::delete('slides/destroy', 'SlideController@massDestroy')->name('slides.massDestroy');
    Route::post('slides/media', 'SlideController@storeMedia')->name('slides.storeMedia');
    Route::post('slides/ckmedia', 'SlideController@storeCKEditorImages')->name('slides.storeCKEditorImages');
    Route::resource('slides', 'SlideController');

    // Team Members
    Route::delete('team-members/destroy', 'TeamMembersController@massDestroy')->name('team-members.massDestroy');
    Route::post('team-members/media', 'TeamMembersController@storeMedia')->name('team-members.storeMedia');
    Route::post('team-members/ckmedia', 'TeamMembersController@storeCKEditorImages')->name('team-members.storeCKEditorImages');
    Route::resource('team-members', 'TeamMembersController');

    // Location
    Route::delete('locations/destroy', 'LocationController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationController');

    // Company
    Route::delete('companies/destroy', 'CompanyController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompanyController@storeMedia')->name('companies.storeMedia');
    Route::post('companies/ckmedia', 'CompanyController@storeCKEditorImages')->name('companies.storeCKEditorImages');
    Route::resource('companies', 'CompanyController');

    // Page Custom Field
    Route::delete('page-custom-fields/destroy', 'PageCustomFieldController@massDestroy')->name('page-custom-fields.massDestroy');
    Route::resource('page-custom-fields', 'PageCustomFieldController');

    // What We Do
    Route::delete('what-we-dos/destroy', 'WhatWeDoController@massDestroy')->name('what-we-dos.massDestroy');
    Route::post('what-we-dos/media', 'WhatWeDoController@storeMedia')->name('what-we-dos.storeMedia');
    Route::post('what-we-dos/ckmedia', 'WhatWeDoController@storeCKEditorImages')->name('what-we-dos.storeCKEditorImages');
    Route::resource('what-we-dos', 'WhatWeDoController');

    Route::get('global-search', 'GlobalSearchController@search')->name('globalSearch');
});
Route::group(['prefix' => 'profile', 'as' => 'profile.', 'namespace' => 'Auth', 'middleware' => ['auth']], function () {
    // Change password
    if (file_exists(app_path('Http/Controllers/Auth/ChangePasswordController.php'))) {
        Route::get('password', 'ChangePasswordController@edit')->name('password.edit');
        Route::post('password', 'ChangePasswordController@update')->name('password.update');
        Route::post('profile', 'ChangePasswordController@updateProfile')->name('password.updateProfile');
        Route::post('profile/destroy', 'ChangePasswordController@destroy')->name('password.destroyProfile');
    }
});
Route::group(['as' => 'frontend.', 'namespace' => 'Frontend', 'middleware' => ['auth']], function () {
    Route::get('/home', 'HomeController@index')->name('home');

    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Content Category
    Route::delete('content-categories/destroy', 'ContentCategoryController@massDestroy')->name('content-categories.massDestroy');
    Route::resource('content-categories', 'ContentCategoryController');

    // Content Tag
    Route::delete('content-tags/destroy', 'ContentTagController@massDestroy')->name('content-tags.massDestroy');
    Route::resource('content-tags', 'ContentTagController');

    // Content Page
    Route::delete('content-pages/destroy', 'ContentPageController@massDestroy')->name('content-pages.massDestroy');
    Route::post('content-pages/media', 'ContentPageController@storeMedia')->name('content-pages.storeMedia');
    Route::post('content-pages/ckmedia', 'ContentPageController@storeCKEditorImages')->name('content-pages.storeCKEditorImages');
    Route::resource('content-pages', 'ContentPageController');

    // Case Study
    Route::delete('case-studies/destroy', 'CaseStudyController@massDestroy')->name('case-studies.massDestroy');
    Route::post('case-studies/media', 'CaseStudyController@storeMedia')->name('case-studies.storeMedia');
    Route::post('case-studies/ckmedia', 'CaseStudyController@storeCKEditorImages')->name('case-studies.storeCKEditorImages');
    Route::resource('case-studies', 'CaseStudyController');

    // Knowledge
    Route::delete('knowledges/destroy', 'KnowledgeController@massDestroy')->name('knowledges.massDestroy');
    Route::post('knowledges/media', 'KnowledgeController@storeMedia')->name('knowledges.storeMedia');
    Route::post('knowledges/ckmedia', 'KnowledgeController@storeCKEditorImages')->name('knowledges.storeCKEditorImages');
    Route::resource('knowledges', 'KnowledgeController');

    // Knowledge Category
    Route::delete('knowledge-categories/destroy', 'KnowledgeCategoryController@massDestroy')->name('knowledge-categories.massDestroy');
    Route::post('knowledge-categories/media', 'KnowledgeCategoryController@storeMedia')->name('knowledge-categories.storeMedia');
    Route::post('knowledge-categories/ckmedia', 'KnowledgeCategoryController@storeCKEditorImages')->name('knowledge-categories.storeCKEditorImages');
    Route::resource('knowledge-categories', 'KnowledgeCategoryController');

    // Knowledge Tag
    Route::delete('knowledge-tags/destroy', 'KnowledgeTagController@massDestroy')->name('knowledge-tags.massDestroy');
    Route::resource('knowledge-tags', 'KnowledgeTagController');

    // Navigationmenu
    Route::delete('navigationmenus/destroy', 'NavigationmenuController@massDestroy')->name('navigationmenus.massDestroy');
    Route::resource('navigationmenus', 'NavigationmenuController');

    // Menuitem
    Route::delete('menuitems/destroy', 'MenuitemController@massDestroy')->name('menuitems.massDestroy');
    Route::resource('menuitems', 'MenuitemController');

    // Slider
    Route::delete('sliders/destroy', 'SliderController@massDestroy')->name('sliders.massDestroy');
    Route::resource('sliders', 'SliderController');

    // Slide
    Route::delete('slides/destroy', 'SlideController@massDestroy')->name('slides.massDestroy');
    Route::post('slides/media', 'SlideController@storeMedia')->name('slides.storeMedia');
    Route::post('slides/ckmedia', 'SlideController@storeCKEditorImages')->name('slides.storeCKEditorImages');
    Route::resource('slides', 'SlideController');

    // Team Members
    Route::delete('team-members/destroy', 'TeamMembersController@massDestroy')->name('team-members.massDestroy');
    Route::post('team-members/media', 'TeamMembersController@storeMedia')->name('team-members.storeMedia');
    Route::post('team-members/ckmedia', 'TeamMembersController@storeCKEditorImages')->name('team-members.storeCKEditorImages');
    Route::resource('team-members', 'TeamMembersController');

    // Location
    Route::delete('locations/destroy', 'LocationController@massDestroy')->name('locations.massDestroy');
    Route::resource('locations', 'LocationController');

    // Company
    Route::delete('companies/destroy', 'CompanyController@massDestroy')->name('companies.massDestroy');
    Route::post('companies/media', 'CompanyController@storeMedia')->name('companies.storeMedia');
    Route::post('companies/ckmedia', 'CompanyController@storeCKEditorImages')->name('companies.storeCKEditorImages');
    Route::resource('companies', 'CompanyController');

    // Page Custom Field
    Route::delete('page-custom-fields/destroy', 'PageCustomFieldController@massDestroy')->name('page-custom-fields.massDestroy');
    Route::resource('page-custom-fields', 'PageCustomFieldController');

    // What We Do
    Route::delete('what-we-dos/destroy', 'WhatWeDoController@massDestroy')->name('what-we-dos.massDestroy');
    Route::post('what-we-dos/media', 'WhatWeDoController@storeMedia')->name('what-we-dos.storeMedia');
    Route::post('what-we-dos/ckmedia', 'WhatWeDoController@storeCKEditorImages')->name('what-we-dos.storeCKEditorImages');
    Route::resource('what-we-dos', 'WhatWeDoController');

    Route::get('frontend/profile', 'ProfileController@index')->name('profile.index');
    Route::post('frontend/profile', 'ProfileController@update')->name('profile.update');
    Route::post('frontend/profile/destroy', 'ProfileController@destroy')->name('profile.destroy');
    Route::post('frontend/profile/password', 'ProfileController@password')->name('profile.password');
});
Route::get('/{link_to}','IndexController@whatwedo_single')->name('whatwedo.show');
