<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class faqs extends Model
{
    protected $primaryKey = 'id';
    protected $table = 'faqs';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1)->where('is_deleted', 0);
    }
}
