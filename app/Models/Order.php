<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Order extends Model
{
    use HasFactory;

    public function details()
    {
        return $this->hasMany(OrderDetail::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function getFormattedDateWIBAttribute()
    {
        return Carbon::parse($this->attributes['created_at'])
            ->setTimezone('Asia/Jakarta')
            ->format('H:i:s d-m-Y');
    }
}