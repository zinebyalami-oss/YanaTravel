<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Client extends Authenticatable
{
    use Notifiable;

    protected $table = 'clients';
    protected $primaryKey = 'id';  
    public $incrementing = true;    
    protected $keyType = 'int';   

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

    public function getAuthIdentifierName()
    {
        return 'email';
    }

    public function getAuthPassword()
    {
        return $this->passwordClient;
    }

    public function getEmailForVerification()
    {
        return $this->email;
    }

    public function demandes()
    {
        return $this->hasMany(Demande::class, 'client_id', 'id');  
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