<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeVoyage extends Model
{
    use HasFactory;

    protected $fillable = ['nomType'];

    public function voyages()
    {
        return $this->hasMany(Voyage::class, 'type_voyage_id');
    }
}