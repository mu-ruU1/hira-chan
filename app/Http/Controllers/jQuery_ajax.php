<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Hub;
use App\Models\ThreadCategorys;
use App\Models\Likes;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class jQuery_ajax extends Controller
{
    public function page_thema(Request $request)
    {
        $page_thema = $request->page_thema;
        $user = User::find($request->user()->id);
        $user->thema = $page_thema;
        $user->save();

        return null;
    }
}
