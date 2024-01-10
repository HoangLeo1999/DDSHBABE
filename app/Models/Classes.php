<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Classes extends Model
{
    use HasFactory;
    protected $fillable = ['lop_vn', 'lop_latin', 'description', 'phylum_id', 'status'];
    public function phylum()
    {
        return $this->belongsTo(Phylum::class,'phylum_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($classes) {
            $classes->slug = Str::slug($classes->lop_vn);
        });
    }
}
