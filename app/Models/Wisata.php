<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;
    protected $table='tabel_wisata';
    protected $primaryKey = "pulau_id";

    public function pulau()
    {
        return $this->belongsTo(Pulau::class,'pulau_id');
    }

}
