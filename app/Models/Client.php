<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';
    protected $primaryKey = 'CIN';
    public $incrementing = false;
    protected $keyType = 'string';

    protected $fillable = [
        'CIN', 'nomClient', 'prenomClient',
        'telClient', 'emailClient', 'passwordClient'
    ];

    protected $hidden = [
        'passwordClient',
    ];

    public function getAuthPassword()
    {
        return $this->passwordClient;
    }

    public function getEmailForVerification()
    {
        return $this->emailClient;
    }

    // Relations
    public function demandes()
    {
        return $this->hasMany(Demande::class, 'client_id', 'CIN');
    }

    public function favoris()
    {
        return $this->belongsToMany(Voyage::class, 'favoris', 'client_id', 'voyage_id');
    }
}