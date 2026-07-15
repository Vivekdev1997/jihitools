<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Setting extends Model
{
    protected $fillable = ['key', 'value'];

    /**
     * All settings as a key => value array (cached).
     */
    public static function all_pairs(): array
    {
        return Cache::rememberForever('site_settings', function () {
            return static::pluck('value', 'key')->toArray();
        });
    }

    public static function get(string $key, ?string $default = null): ?string
    {
        return static::all_pairs()[$key] ?? $default;
    }

    public static function set(string $key, ?string $value): void
    {
        static::updateOrCreate(['key' => $key], ['value' => $value]);
        Cache::forget('site_settings');
    }
}
