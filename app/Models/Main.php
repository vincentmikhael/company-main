<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Main extends Model
{
    use HasFactory;
    protected $table = 'main';
    public $timestamps = false;
    protected $fillable = ['icon1','icon2','icon3','bg1','bg2','mobil1','mobil2','deskripsi','title','meta_title','meta_deskripsi','meta_sitename','icon_website'];
}
