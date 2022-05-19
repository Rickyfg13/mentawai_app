<?php

namespace App\Models;

use App\Models\Pulau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class WisataList extends Model
{
    use HasFactory;
    protected $table='table_list_wisata';
    protected $primaryKey = "pulau_id";

    public function pulau()
    {
        return $this->belongsTo(Pulau::class,'pulau_id');
    }
}
