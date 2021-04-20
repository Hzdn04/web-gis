<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Travel extends Model
{
    use HasFactory;

    public function AllData(){
        return DB::table('travel')->get();
    }

    public function InsertData($data){
        return DB::table('travel')->insert($data);
    }


    public function DetailData($id_travel){
        return DB::table('travel')->where('$id_travel', $id_travel)->first();
    }

    public function DeletelData($id_travel){
        return DB::table('travel')->where('$id_travel', $id_travel)->delete();
    }
}
