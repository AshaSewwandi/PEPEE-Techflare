<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class message extends Model
{
    use HasFactory;

    protected $fillable = [ 'id', 'name', 'email', 'contact_number', 'message', 'user_id',];
    protected $table = 'messages';
    protected $primaryKey = 'id';

    public $timestamp=false;

}