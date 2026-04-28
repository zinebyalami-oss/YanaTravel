<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    protected $table = 'clients';
    protected $primaryKey = 'id';
    protected $fillable = [
        'cin', 'nomClient', 'prenomClient', 
        'telClient', 'emailClient', 'passwordClient'
    ];
    protected $hidden = ['passwordClient'];

    // Relations
    public function demandes()
    {
        return $this->hasMany(Demande::class, 'client_id');
    }

    public function favoris()
    {
        return $this->belongsToMany(Voyage::class, 'client_voyage_favoris', 'client_id', 'voyage_id')
                    ->withTimestamps();
    }
}