<?php

namespace App\Models;

use App\Models\Pjs;
use App\Models\Wisata;
use App\Models\Kuliner;
use App\Models\Penginapan;
use App\Models\RumahMakan;
use App\Models\WisataList;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pulau extends Model
{
    use HasFactory;
    protected $table='tabel_pulau';
    protected $primaryKey = "pulau_id";

    public function kuliners()
    {
        return $this->hasMany(Kuliner::class);
    }
    public function wisata()
    {
        return $this->hasMany(Wisata::class);
    }
    public function penginapan()
    {
        return $this->hasMany(Penginapan::class);
    }
    public function pjs()
    {
        return $this->hasMany(Pjs::class);
    }
    public function rms()
    {
        return $this->hasMany(RumahMakan::class);
    }
    public function WisataList()
    {
        return $this->hasMany(WisataList::class);
    }

}
