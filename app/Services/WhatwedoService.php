<?php

namespace App\Services;
use App\Models\WhatWeDo;

class WhatwedoService
{

    public Static function whatwedo(){

            return WhatWeDo::where('featured','1')->latest()->take(4)->get();

    }
}
