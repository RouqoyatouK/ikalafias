<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Declaration extends Model
{
    use HasFactory;
    protected $dates = ['date_declaration'];

    protected $fillable = [

          'genre',
           'nom' ,
          'prenom',
           'contact',
          'photo_identite',
          'piece_identite',
          'date_declaration',
    ];
}
