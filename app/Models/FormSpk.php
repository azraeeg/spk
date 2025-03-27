<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormSpk extends Model
{
    protected $table = 'form_spk';

    public function choper()
    {
        return $this->belongsTo(User::class, 'Nopeg', 'Nopeg');
    }
}
