<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bien extends Model
{
    use HasFactory;

    protected $table = 'biens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'url_image',
        'description',
        'categorie',
        'status',
        'localisation',
    ];
}
