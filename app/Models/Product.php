<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = ['name_product', 'stock', 'category_id', 'mitra_id'];
    protected $table = 'products';


    /**
     * Get all of the comments for the Product
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function mitraname()
    {
        return $this->belongsTo(Mitra::class,'mitra_id');
    }


    public function categoryname()
    {
        return $this->belongsTo(Category::class,'category_id');
    }
}
