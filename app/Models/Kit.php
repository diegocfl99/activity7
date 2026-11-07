<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Kit extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    // Un kit puede estar relacionado con varios cursos
    public function courses(): HasMany
    {
        return $this->hasMany(Course::class);
    }
}
