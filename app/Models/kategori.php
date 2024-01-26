<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';

    protected $primarykey = 'kode_kategoris';

    protected $fillable = [
        'kode_kategori'
        'nama'
        'ket'
     ];
}
