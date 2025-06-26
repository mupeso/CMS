<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{

    protected $fillable=["title","body","iamge_path","user_id","categorie_id"];


    public function User (){
        return $this->belongsTo(User::class);
    }


    public function Categorie (){
        return $this->belongsTo(Categorie::class);
    }












    use HasFactory;
}
