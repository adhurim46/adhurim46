<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersDetail extends Model
{
    use hasFactory;
    protected $fillable = [

        'age',
        'gender',
        'birthplace'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
