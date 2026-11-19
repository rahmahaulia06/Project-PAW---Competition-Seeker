<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Competition extends Model
{
    protected $fillable = [
        'category_id',
        'title',
        'description',
        'requirements',
        'organizer',
        'prize',
        'start_date',
        'deadline',
        'registration_link',
        'image',
    ];

    public function category(): BelongsTo {
        return $this->belongsTo(Category::class);
    }
    public function savedCompetitions(): HasMany {
        return $this->hasMany(SavedCompetition::class);
    }
}
