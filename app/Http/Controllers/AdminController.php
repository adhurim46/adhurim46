<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function delete($id){
        Post::findOrFail($id)->delete();

        return response('Deleted sucesfuly',200);

    }
}
