<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'genre_id', 'year', 'synopsis'];

    public function movie()
{
    return $this->hasMany(Movie::class);
}

}
