<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [ 'animal_id', 'type', 'age', 'breed', 'vaccination', 'image','sex', 'post_id',];
    protected $table = 'animals';
    protected $primaryKey = 'animal_id';

    public $timestamp=false;

    public function Post()
    {
        return $this->hasOne(Post::class, 'post_id');
    }

}
