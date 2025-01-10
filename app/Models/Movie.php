<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    use HasFactory;
    protected $table = 'movies';
    

    protected $fillable = [
        'id',
        'title',
        'synopsis',
        'poster',
        'year',
        'available',
        'genre_id',
    ];
    
    public function genre()
{
    return $this->belongsTo(Genre::class);
}

}
