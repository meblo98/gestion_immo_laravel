<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bien extends Model
{
    use HasFactory;

    protected $table = 'biens';
    protected $primaryKey = 'id';
    protected $fillable = [
        'nom',
        'url_image',
        'prix',
        'description',
        'categorie',
        'status',
        'localisation',
    ];
    public function comments(): HasMany
    {
        return $this->hasMany(commentaire::class);
    }
}
