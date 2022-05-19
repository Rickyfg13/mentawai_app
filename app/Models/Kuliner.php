<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kuliner extends Model
{
    use HasFactory;
    protected $table='kuliners';
    protected $primaryKey = "pulau_id";
    
  

    public function pulau()
    {
        return $this->belongsTo(Pulau::class,'pulau_id');
    }

}
