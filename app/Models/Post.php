<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $table = 'posts';
    protected $fillable = [ 'post_id', 'description', 'image', 'District','location', 'message', 'id',];

    protected $primaryKey = 'post_id';

    public $timestamp=false;

    // 1:1 relationship with animal
    public function Animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

        
    // 1:m relationship with user
    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

