<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class sertifikat extends Model
{
    protected $table = 'sertifikat';

    public function sertifikats()
    {
        return $this->belongsTo(User::class, 'Nopeg', 'Nopeg');
    }
    
}
