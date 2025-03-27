<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PK1 extends Model
{
    protected $table = 'pk1';
    protected $fillable = ['Nopeg', 'DKKD', 'Mandiri', 'Mandat', 'Delegasi','Penilai','Jabatan'];
    protected $primaryKey = 'Nopeg';
    public $timestamps = false;

}
