<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class TravelKategori extends Model
{
    use HasFactory;
    public function AllData(){
        return DB::table('kategori_travel')->get();
    }

    protected $table = "kategori_travel";
    protected $fillable = [
        "nama_kategori"
    ];

    public function travel()
    {
        return $this->hasMany(Travel::class, 'id_kategori', 'id');
    }
}
