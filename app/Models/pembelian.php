<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    use HasFactory;
    protected $table ="pembelians";
    protected $guarded = ['id'];

    public function types()
    {
        return $this->belongsTo(type::class);
    }

    public function brands()
    {
        return $this->belongsTo(brand::class);
    }
}
