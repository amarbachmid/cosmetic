<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class type extends Model
{
    use HasFactory;
    protected $table ="types";
    protected $guarded = ['id'];

    public function pembelians()
    {
        return $this->hasMany(pembelians::class);
    }
}
