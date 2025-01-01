<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class review extends Model
{
    use HasFactory;
    public function movie()
    {
        return $this->belongsTo(Movie::class);
    }
    protected $table = 'review';
    protected $fillable = [
		'review',
		'rating',
		'movie_id'
	];
}
