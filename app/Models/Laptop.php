<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Laptop extends Model
{
    use HasFactory;

    protected $table = 'laptop';
    protected $primarykey = 'id';
    protected $fillable = [
        'nama',
        'tglambil',
        'merk',
        'serialnumber',
        'notes'
    ];
}