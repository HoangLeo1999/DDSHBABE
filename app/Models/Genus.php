<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Genus extends Model
{
    use HasFactory;
    protected $fillable = [
        'chi_vn',
        'chi_latin',
        'description',
        'slug',
        'status',
        'family_id',
        'order_id',
        'classes_id',
        'phylum_id',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($genus) {
            $genus->slug = Str::slug($genus->chi_vn);
        });
    }

    public function family()
    {
        return $this->belongsTo(Family::class, 'family_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'classes_id');
    }

    public function phylum()
    {
        return $this->belongsTo(Phylum::class, 'phylum_id');
    }
}
