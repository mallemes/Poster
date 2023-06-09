<?php

namespace App\Http\Controllers\Group;

use App\Http\Controllers\Controller;
use App\Models\Group;
use Illuminate\Support\Facades\Auth;

class GroupUserController extends Controller
{
    public function subscribe(Group $group){
        Auth::user()->groupsIn()->toggle($group->id);
        return back();
    }
}
