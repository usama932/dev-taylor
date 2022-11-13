<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Navigationmenu extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'navigationmenus';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'parent_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function menuMenuitems()
    {
        return $this->hasMany(Menuitem::class, 'menu_id', 'id');
    }

    public function parentNavigationmenus()
    {
        return $this->hasMany(Navigationmenu::class, 'parent_id', 'id');
    }

    public function parent()
    {
        return $this->belongsTo(Navigationmenu::class, 'parent_id');
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
