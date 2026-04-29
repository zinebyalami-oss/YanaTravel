<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';
    protected $primaryKey = 'id';  // ⬅️ Changé de 'CIN' à 'id'
    public $incrementing = true;    // ⬅️ Changé à true
    protected $keyType = 'int';     // ⬅️ Changé à 'int'

    protected $fillable = [
        'CIN', 
        'nomClient', 
        'prenomClient',
        'telClient', 
        'emailClient', 
        'passwordClient',
        'email'
    ];

    protected $hidden = [
        'passwordClient',
    ];

    // ⬇️ Identifiant pour l'auth (email)
    public function getAuthIdentifierName()
    {
        return 'email';
    }

    // ⬇️ Mot de passe
    public function getAuthPassword()
    {
        return $this->passwordClient;
    }

    // ⬇️ Pour la vérification d'email
    public function getEmailForVerification()
    {
        return $this->email;
    }

    // Relations
    public function demandes()
    {
        return $this->hasMany(Demande::class, 'client_id', 'id');  // ⬅️ Changé
    }

    public function favoris()
    {
        return $this->belongsToMany(Voyage::class, 'favoris', 'client_id', 'voyage_id');
    }

    public function getFilamentName(): string
    {
        return "{$this->nomClient} {$this->prenomClient}";
    }
}