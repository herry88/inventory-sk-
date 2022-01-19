<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    use HasFactory;
    protected $table = 'mitras';
    protected $fillable = ['mitra_name','alamat','pic'];

    /**
     * Get the  that owns the Mitra
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
