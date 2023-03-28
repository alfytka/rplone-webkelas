<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search()
    {
        $filter = request()->query();
        return User::where('name', 'like', "%{$filter['search']}%")->get();
    }
}
