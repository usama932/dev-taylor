<?php

namespace App\Services;
use App\Models\TeamMember;

class WidgetsService
{

    public Static function teams(){

            return TeamMember::orderby('id')->limit(7)->get();

    }
}
