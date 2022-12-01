<?php

namespace App\Http\Controllers\Traits;

use Illuminate\Http\Request;

trait MediaUploadingTrait
{
    public function storeMedia(Request $request)
    {
        
       
        // if (request()->has('size')) {
        //     $this->validate(request(), [
        //         'file' => 'max:25000',
        //     ]);
        // }
      
        // if (request()->has('width') || request()->has('height')) {
        //     $this->validate(request(), [
        //         'file' => sprintf(
        //             'image|dimensions:max_width=%s,max_height=%s',
        //             request()->input('width', 51200),
        //             request()->input('height', 51200)
        //         ),
        //     ]);
        // }

        $path = storage_path('tmp/uploads');

        try {
            if (!file_exists($path)) {
                mkdir($path, 0755, true);
            }
        } catch (\Exception $e) {
        }

        $file = $request->file('file');

        $name = uniqid() . '_' . trim($file->getClientOriginalName());

        $file->move($path, $name);

        return response()->json([
            'name'          => $name,
            'original_name' => $file->getClientOriginalName(),
        ]);
    }
}
