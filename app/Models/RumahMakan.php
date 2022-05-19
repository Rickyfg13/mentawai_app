<?php

namespace App\Models;

use App\Models\Pulau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RumahMakan extends Model
{
    use HasFactory;
    protected $table = 'rms';
    protected $primaryKey = "pulau_id";


    public function pulau()
    {
        return $this->belongsTo(Pulau::class,'pulau_id');
    }
}
