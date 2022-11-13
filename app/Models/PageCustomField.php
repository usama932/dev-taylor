<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PageCustomField extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const TYPE_SELECT = [
        'text'     => 'Text',
        'textarea' => 'Textarea',
        'select'   => 'Select',
        'image'    => 'Image',
    ];

    public $table = 'page_custom_fields';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'field_lable',
        'field_value',
        'type',
        'page_id',
        'what_we_do_id',
        'case_study_custom_id',
        'knowledge_custom_id',
        'team_custom_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function page()
    {
        return $this->belongsTo(ContentPage::class, 'page_id');
    }

    public function what_we_do()
    {
        return $this->belongsTo(WhatWeDo::class, 'what_we_do_id');
    }

    public function case_study_custom()
    {
        return $this->belongsTo(CaseStudy::class, 'case_study_custom_id');
    }

    public function knowledge_custom()
    {
        return $this->belongsTo(Knowledge::class, 'knowledge_custom_id');
    }

    public function team_custom()
    {
        return $this->belongsTo(TeamMember::class, 'team_custom_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
