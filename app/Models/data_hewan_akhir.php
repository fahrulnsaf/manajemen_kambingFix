<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_hewan_akhir extends Model
{
    use HasFactory;

    protected $table="data_hewan_akhirs";
    protected $primaryKey="id_data_hewan_akhir";
    protected $guard="id_data_hewan_akhir";
    protected $hidden="";

}
