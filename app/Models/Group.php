<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Group extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Un grupo puede tener muchos usuarios
    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    // Un grupo puede tener muchos cursos
    public function courses(): BelongsToMany
    {
        return $this->belongsToMany(Course::class, 'course_group');
    }
}
