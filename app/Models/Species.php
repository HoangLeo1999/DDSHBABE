<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
class Species extends Model
{
    use HasFactory;
    protected $fillable = [
        'loai_vn',
        'loai_latin',
        'genus_id',
        'family_id',
        'order_id',
        'classes_id',
        'phylum_id',
        'description',
        'slug',
        'status',
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($genus) {
            $genus->slug = Str::slug($genus->chi_vn);
        });
    }
    public function genus()
    {
        return $this->belongsTo(Genus::class, 'genus_id');
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
