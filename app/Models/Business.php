<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Guarded;
use Illuminate\Database\Eloquent\Attributes\Scope;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;


#[Guarded(['id'])]
class Business extends Model implements HasMedia
{
    /** @use HasFactory<\Database\Factories\BusinessFactory> */
    use HasFactory, InteractsWithMedia, HasSlug;

    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }


    public function getRouteKeyName()
    {
        return 'slug';
    }


    public function registerMediaConversions(?Media $media = null): void
    {
        $this->addMediaConversion('webp')
            ->format('webp')
            ->quality(20)
            ->nonQueued()
            ->performOnCollections('cover');
    }

    #[Scope]
    protected function active(Builder $query): void
    {
        $query->where('is_active', true);
    }
    #[Scope]
    protected function published(Builder $query): void
    {
        $query->where('is_published', true);
    }

    protected static function booted(): void
    {
        static::addGlobalScope('sort', function (Builder $builder) {
            $builder->orderBy('sort', 'asc');
        });
    }
}
