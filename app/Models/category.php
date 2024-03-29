<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
 	protected $primaryKey = 'id';
  	protected $table = 'category';
    protected $guarded = [];

    public function scopeActive($query)
    {
        return $query->where('is_active', 1)->where('is_deleted', 0);
    }
    public function getNews()
    {
        return $this->hasMany(news::class, 'category_id')->active();
    }

}
