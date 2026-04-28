<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;

    protected $fillable = [
        'nomComplet', 'numTel', 'email', 'message', 
        'voyage_id', 'client_id'
    ];

    // Relations
    public function voyage()
    {
        return $this->belongsTo(Voyage::class);
    }

    public function client()
    {
        return $this->belongsTo(Client::class, 'client_id');
    }

    public function confirmation()
    {
        return $this->hasOne(Confirmation::class, 'demande_id');
    }
}