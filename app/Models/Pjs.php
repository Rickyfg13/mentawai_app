<?php

namespace App\Models;

use App\Models\Pulau;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pjs extends Model
{
    use HasFactory;
    protected $table = 'pjs';

    
    public function pulau()
    {
        return $this->belongsTo(Pulau::class,'pulau_id');
    }
}
