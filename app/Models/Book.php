<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'isbn',
        'title',
        'description',
        'publisher',
        'release_date',
        'pages',
        'image'
    ];

    function authors() : BelongsToMany {
        return $this->belongsToMany(Author::class);
    }
}
