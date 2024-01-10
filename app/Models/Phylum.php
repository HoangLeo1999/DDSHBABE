<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Phylum extends Model
{
    use HasFactory;
    protected $fillable = ['nganh_vn', 'nganh_latin', 'description', 'slug', 'status'];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($phylum) {
            $phylum->slug = Str::slug($phylum->nganh_vn);
        });
    }
}
