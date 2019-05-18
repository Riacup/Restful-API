<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Buku extends Model
{
    //define the table
    protected $table = 'bukus';
    //primary key
    protected $primaryKey = 'id';
    //disable create_at and update_at
    public $timestamps = false;

    protected $fillable = [
        'id',
        'judul',
        'penulis',
        'penerbit',
        'tahun_terbit'
    ];

}
