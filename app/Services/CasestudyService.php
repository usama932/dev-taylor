<?php

namespace App\Services;
use App\Models\CaseStudy;

class CasestudyService
{

    public Static function teams(){

            return CaseStudy::limit(6)->get();

    }
}
