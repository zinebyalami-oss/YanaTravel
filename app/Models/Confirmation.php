<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Confirmation extends Model
{
    use HasFactory;

    protected $fillable = ['dateConfirmation', 'demande_id'];

    public function demande()
    {
        return $this->belongsTo(Demande::class);
    }
}