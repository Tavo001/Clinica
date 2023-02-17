<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\group;

class GroupController extends Controller
{
    //

    public function index()
    {
        $group = group :: all();
        return view('groupsviews', compact('group'));
    }

    public function save()
    {
        $group = new Group;
        $group->name = '2';
        $group->key_name = '1';
        $group->description = 'Hola2';
        $group->save();
    }

}
