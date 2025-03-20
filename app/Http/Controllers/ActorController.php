<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Actor;

class ActorController extends Controller
{
    public function index()
    {
        $actors = Actor::paginate(10);
        return view('actors.index', compact('actors'));
    }

}
