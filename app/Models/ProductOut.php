<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductOut extends Model
{
    use HasFactory;
    protected $fillable = ['no_invoice', 'product_id', 'mitra_id', 'stock', 'keterangan'];


    /**
     * Get the user that owns the ProductIn
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function mitraname()
    {
        return $this->belongsTo(Mitra::class, 'mitra_id');
    }

    /**
     * Get the user that owns the ProductIn
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function productname()
    {
        return $this->belongsTo(Product::class, 'product_id');
    }
}
