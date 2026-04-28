<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'destination', 'prix', 'description', 
        'duree', 'image', 'type_voyage_id'
    ];

    // Relations
    public function type()
    {
        return $this->belongsTo(TypeVoyage::class, 'type_voyage_id');
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class);
    }

    public function favorisParClients()
    {
        return $this->belongsToMany(Client::class, 'client_voyage_favoris', 'voyage_id', 'client_id')
                    ->withTimestamps();
    }
}