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

    public function Animal()
    {
        return $this->belongsTo(Animal::class, 'animal_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id');
    }
}

