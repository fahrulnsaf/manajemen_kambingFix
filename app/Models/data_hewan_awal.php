<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_hewan_awal extends Model
{
    use HasFactory;

    protected $table="data_hewan_awals";
    protected $primaryKey="id_data_hewan_awal";
    protected $guard="id_data_hewan_awal";
    protected $hidden="";
}
