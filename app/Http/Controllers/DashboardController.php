<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeEmail;
use App\Models\Idea;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        // $idea = new Idea([
        //     'content' => 'test',
        // ]);

        // $idea->save();

        //return new WelcomeEmail(auth()->user());

        $ideas = Idea::orderBy('created_at', 'DESC');

        // where content line %test%

        if(request()->has('search')) {
            $ideas = $ideas->where('content', 'like', '%' . request()->get('search','') . '%');
        }

        return view('dashboard', [
            'ideas' => $ideas->paginate(5)
        ]);
    }
}
