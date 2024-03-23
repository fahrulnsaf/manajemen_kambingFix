<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tabel_pendataan_hewan extends Model
{
    use HasFactory;

    protected $table="pendataan_hewans";
    protected $primaryKey="id_pendataan";
    protected $guard="id_pendataan";
    protected $hidden="";
}
