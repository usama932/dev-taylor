<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyWhatWeDoRequest;
use App\Http\Requests\StoreWhatWeDoRequest;
use App\Http\Requests\UpdateWhatWeDoRequest;
use App\Models\CaseStudy;
use App\Models\WhatWeDo;
use Spatie\MediaLibrary\HasMedia;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\MediaLibrary\InteractsWithMedia;
use Symfony\Component\HttpFoundation\Response;
use Yajra\DataTables\Facades\DataTables;

class WhatWeDoController extends Controller
{
    use MediaUploadingTrait;
    use InteractsWithMedia;

    public function index(Request $request)
    {
        abort_if(Gate::denies('what_we_do_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        if ($request->ajax()) {
            $query = WhatWeDo::with(['case_study', 'categories', 'parent', 'tags'])->select(sprintf('%s.*', (new WhatWeDo())->table));
            $table = Datatables::of($query);

            $table->addColumn('placeholder', '&nbsp;');
            $table->addColumn('actions', '&nbsp;');

            $table->editColumn('actions', function ($row) {
                $viewGate = 'what_we_do_show';
                $editGate = 'what_we_do_edit';
                $deleteGate = 'what_we_do_delete';
                $crudRoutePart = 'what-we-dos';

                return view('partials.datatablesActions', compact(
                'viewGate',
                'editGate',
                'deleteGate',
                'crudRoutePart',
                'row'
            ));
            });

            $table->editColumn('title', function ($row) {
                return $row->title ? $row->title : '';
            });
            $table->editColumn('status', function ($row) {
                return $row->status ? WhatWeDo::STATUS_SELECT[$row->status] : '';
            });

            $table->rawColumns(['actions', 'placeholder']);

            return $table->make(true);
        }

        return view('admin.whatWeDos.index');
    }

    public function create()
    {
        $medias = Media::latest()->take(20)->get();

        abort_if(Gate::denies('what_we_do_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $case_studies = CaseStudy::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        return view('admin.whatWeDos.create', compact('case_studies','medias'));
    }

    public function store(StoreWhatWeDoRequest $request)
    {
       
        $image ="unset";
        if ($image = $request->file('title_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image =  $image->move($destinationPath, $profileImage);
           

        }
     
        $whatWeDo = WhatWeDo::create([
                'title'=>$request->title,
                'excerpt'=>$request->excerpt,
                'page_text'=>$request->page_text,
                'cta_button_text'=>$request->cta_button_text,
                'cta_url'=>$request->cta_url,
                'case_study_id'=>$request->case_study_id,
                'featured'=>$request->featured,
                'status'=>$request->status,
                'slug'=>$request->slug,
                'parent_id'=>$request->parent_id,
                'order_by'=>$request->order_by,
                'title_image'=>$image,
                    ]);
              
        if ($request->input('featured_image', false)) {

            $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }
        if ($request->has('featured_image')) {

            $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $whatWeDo->id]);
        }

        return redirect()->route('admin.what-we-dos.index');
    }

    public function edit(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $case_studies = CaseStudy::pluck('title', 'id')->prepend(trans('global.pleaseSelect'), '');

        $whatWeDo->load('case_study', 'categories', 'parent', 'tags');

        return view('admin.whatWeDos.edit', compact('case_studies', 'whatWeDo'));
    }

    public function update(UpdateWhatWeDoRequest $request, WhatWeDo $whatWeDo)
    {
        $whatWeDo->update($request->all());
        $image ="unset";

       
        if ($image = $request->file('title_image')) {
            $destinationPath = 'image/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
           $image =  $image->move($destinationPath, $profileImage);
           $whatWeDo->update([
            'title_image' => $image
        ]);

        }
       
        if ($request->input('featured_image', false)) {
           
            if (!$whatWeDo->featured_image || $request->input('featured_image') !== $whatWeDo->featured_image->file_name) {
                
                if ($whatWeDo->featured_image) {
                    $whatWeDo->featured_image->delete();
                }
                
                $whatWeDo->addMedia(storage_path('tmp/uploads/' . basename($request->input('featured_image'))))->toMediaCollection('featured_image');
            }
        } elseif ($whatWeDo->featured_image) {
            $whatWeDo->featured_image->delete();
        }
        
        return redirect()->route('admin.what-we-dos.index');
    }

    public function show(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatWeDo->load('case_study', 'categories', 'parent', 'tags');

        return view('admin.whatWeDos.show', compact('whatWeDo'));
    }

    public function destroy(WhatWeDo $whatWeDo)
    {
        abort_if(Gate::denies('what_we_do_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $whatWeDo->delete();

        return back();
    }

    public function massDestroy(MassDestroyWhatWeDoRequest $request)
    {
        WhatWeDo::whereIn('id', request('ids'))->delete();

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('what_we_do_create') && Gate::denies('what_we_do_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new WhatWeDo();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
    
}
