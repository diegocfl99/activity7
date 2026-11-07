<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Course extends Model
{
    use HasFactory;

    protected $fillable = [
        'course_key',
        'name',
        'cover',
        'content',
        'kit_id',
    ];

    // Un curso pertenece a un kit de robótica
    public function kit(): BelongsTo
    {
        return $this->belongsTo(Kit::class);
    }

    // Un curso puede tener varios materiales didácticos
    public function materials(): HasMany
    {
        return $this->hasMany(DidacticMaterial::class);
    }

    // Un curso puede pertenecer a varios grupos
    public function groups(): BelongsToMany
    {
        return $this->belongsToMany(Group::class, 'course_group');
    }
}
