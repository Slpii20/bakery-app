<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class produk extends Model
{
    use HasFactory;
    protected $primary_key = 'id_kue';
    protected $table = 'tb_kue';
    protected $guarded = [];
    public $timestamps = false;
}
