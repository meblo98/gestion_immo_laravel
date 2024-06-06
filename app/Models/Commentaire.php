<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class commentaire extends Model
{
    use HasFactory;
    protected $fillable=[
        'nom',
        'contenu',
        'bien_id'
    ];
    public function post(): BelongsTo
    {
        return $this->belongsTo(Bien::class);
    }
}
