<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    use HasFactory;
    protected $fillable = [
        'ho_vn',
        'ho_latin',
        'description',
        'slug',
        'status',
        'phylum_id',
        'classes_id',
        'order_id',
    ];

    // Define relationships with phylums, classes, and orders
    public function phylum()
    {
        return $this->belongsTo(Phylum::class, 'phylum_id');
    }

    public function classes()
    {
        return $this->belongsTo(Classes::class, 'classes_id');
    }

    public function order()
    {
        return $this->belongsTo(Order::class, 'order_id');
    }
    protected static function boot()
    {
        parent::boot();

        // Sự kiện creating sẽ được gọi trước khi một bản ghi được tạo mới
        static::creating(function ($family) {
            $family->slug = Str::slug($family->ho_vn);
        });

        // Sự kiện updating sẽ được gọi trước khi một bản ghi được cập nhật
        static::updating(function ($family) {
            $family->slug = Str::slug($family->ho_vn);
        });
    }
}
