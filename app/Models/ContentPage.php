<?php

namespace App\Models;

use \DateTimeInterface;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ContentPage extends Model implements HasMedia
{
    use SoftDeletes;
    use InteractsWithMedia;
    use HasFactory;

    public const STATUS_SELECT = [
        '1' => 'Published',
        '0' => 'Unpublished',
    ];

    public $table = 'content_pages';

    protected $appends = [
        'featured_image',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    protected $fillable = [
        'title',
        'excerpt',
        'page_text',
        'status',
        'parent_id',
        'slug',
        'order_by',
        'created_at',
        'updated_at',
        'deleted_at',
    ];

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')->fit('crop', 50, 50);
        $this->addMediaConversion('preview')->fit('crop', 120, 120);
    }

    public function pagePageCustomFields()
    {
        return $this->hasMany(PageCustomField::class, 'page_id', 'id');
    }

    public function contactInfoLocations()
    {
        return $this->hasMany(Location::class, 'contact_info_id', 'id');
    }

    public function slidesidSlides()
    {
        return $this->hasMany(Slide::class, 'slidesid_id', 'id');
    }

    public function getFeaturedImageAttribute()
    {
        $file = $this->getMedia('featured_image')->last();
        if ($file) {
            $file->url       = $file->getUrl();
            $file->thumbnail = $file->getUrl('thumb');
            $file->preview   = $file->getUrl('preview');
        }

        return $file;
    }

    public function categories()
    {
        return $this->belongsToMany(ContentCategory::class);
    }

    public function parent()
    {
        return $this->belongsTo(ContentPage::class, 'parent_id');
    }

    public function tags()
    {
        return $this->belongsToMany(ContentTag::class);
    }

    protected function serializeDate(DateTimeInterface $date)
    {
        return $date->format('Y-m-d H:i:s');
    }
}
