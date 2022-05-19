<?php

namespace App\Models;

use App\Models\Sliders;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Penginapan extends Model
{
    use HasFactory;
    protected $table='tabel_penginapan';
    protected $primaryKey = "pulau_id";
    protected $fillable = [
        'nama_penginapan',
        'pulau_id',        
        'fasilitas',
        'harga',
        'cover'
    ];

    public function pulau()
    {
        return $this->belongsTo(Pulau::class,'pulau_id');
    }

   
}
