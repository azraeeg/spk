<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bidan1 extends Model
{
    protected $table = 'bidan1';

    protected $fillable = ['Nopeg', 'Nama', 'DKKD', 'Mandiri', 'Mandat', 'Delegasi','Penilai','Jabatan'];
    protected $primaryKey = 'Nopeg';
    public $timestamps = false;

}
