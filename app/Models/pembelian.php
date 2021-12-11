<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pembelian extends Model
{
    
    
    use HasFactory;
    
    protected $fillable = [
        'No_po', 
        'Suplier',
        'Kode', 
        'Nama_Barang', 
        'Satuan',  
        'Qty', 
        'Harga_Satuan', 

    ];
}
