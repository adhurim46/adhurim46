<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use hasFactory;
    protected $fillable = [
        'content',
        'title',
        'isOnline'
    ];
    public function user(){
        return $this->belongsTo(User::class);
    }
}
