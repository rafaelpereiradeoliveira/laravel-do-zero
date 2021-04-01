<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
      'category_id',
      'name',
      'description',
      'exclusive'
    ];

    protected $dates = [
      'deleted_at'
    ];

    public function category()
    {
      return $this->belongTo(related: Category::class);
    }
}
