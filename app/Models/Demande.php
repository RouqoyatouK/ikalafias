<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
    use HasFactory;
    protected $dates = ['date_demande'];

    protected $fillable = [
           'genre',
           'nom',
           'prenom',
           'nom_pere',
           'nom_mere',
            'date_naissance',
           'lieu_naissance',
           'acte_naissance',
           'photo_identite',
           'profession',
           'photo_profession',
           'quartier',
            'rue',
            'porte',
            'taille',
           'teint',
           'couleur_cheveux',
           'signe_particuliere',
           'date_demande',
           'contact',
           'piece_tuteur',
    ];
}
