<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class makanan extends Model
{
    use HasFactory;

    protected $table = 'makanans';

    protected $primarykey = 'kode_makanan';

    protected $fillable = [
        'kode_makanan'
        'nama'
        'kategori'
        'harga'
        'ket'
      ];
}
