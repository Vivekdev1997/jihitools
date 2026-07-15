<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class PageMeta extends Model
{
    protected $fillable = ['slug', 'name', 'meta_title', 'meta_keywords', 'meta_description'];

    /**
     * Meta record for a page slug (home, about, products, contact), cached.
     */
    public static function bySlug(?string $slug): ?self
    {
        if (! $slug) {
            return null;
        }

        try {
            $all = Cache::rememberForever('page_metas', fn () => static::get()->keyBy('slug'));

            return $all->get($slug);
        } catch (\Throwable $e) {
            return null; // table not migrated yet
        }
    }

    public static function clearCache(): void
    {
        Cache::forget('page_metas');
    }
}
