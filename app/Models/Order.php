<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Order extends Model
{
    use HasFactory;
    protected $fillable = [
        'bo_vn',
        'bo_latin',
        'description',
        'slug',
        'classes_id',
        'phylum_id',
        'status',
    ];
    public function classes()
    {
        return $this->belongsTo(Classes::class, 'classes_id', 'id');
    }

    // Định nghĩa mối quan hệ với bảng phylums
    public function phylum()
    {
        return $this->belongsTo(Phylum::class, 'phylum_id', 'id');
    }
    protected static function boot()
    {
        parent::boot();

        // Sự kiện trước khi tạo mới

        static::creating(function ($order) {
            $order->slug = Str::slug($order->bo_vn);
        });

        // Sự kiện trước khi cập nhật
        static::updating(function ($order) {
            $order->slug = Str::slug($order->bo_vn);
        });
    }
    
}
