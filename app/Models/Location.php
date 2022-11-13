<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Location extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'locations';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'location_country',
        'location_phone',
        'location_address',
        'location_addlink',
        'orderby',
        'contact_info_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function contact_info()
    {
        return $this->belongsTo(ContentPage::class, 'contact_info_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
