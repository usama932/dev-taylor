<?php

namespace App\Services;
use App\Models\Knowledge;

class KnowledgeService
{

    public Static function knowledge(){

            return  Knowledge::with('category')->latest()->limit(6)->get();
    }
}
