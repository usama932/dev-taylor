<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Menuitem extends Model
{
    use SoftDeletes;
    use HasFactory;

    public $table = 'menuitems';

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'name',
        'menu_id',
        'page_link_id',
        'link_to',
        'parent_id',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function menu()
    {
        return $this->belongsTo(Navigationmenu::class, 'menu_id');
    }

    public function page_link()
    {
        return $this->belongsTo(ContentPage::class, 'page_link_id');
    }

    public function parent()
    {
        return $this->belongsTo(Menuitem::class, 'parent_id');
    }
    public function child()
    {
        return $this->hasMany(Menuitem::class, 'parent_id');
    }
    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
