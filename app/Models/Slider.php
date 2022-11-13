<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Slider extends Model
{
    use SoftDeletes;
    use HasFactory;

    public const TYPE_SELECT = [
        'topslider'      => 'Top Slider',
        'sectionslider'  => 'Section Slider',
        'verticalslider' => 'Vertical Slider',
        'videoslider'    => 'Video Slider',
        'textslider'     => 'Text Slider',
    ];

    public $table = 'sliders';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'type',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function sliderSlides()
    {
        return $this->hasMany(Slide::class, 'slider_id', 'id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
