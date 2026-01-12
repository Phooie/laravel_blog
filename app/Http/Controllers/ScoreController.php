<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Score;

class ScoreController extends Controller
{
    //
    public function input()
	{
		return view('articles.input');

	}

	public function save(Request $request)
	{
			Score::create([
				'student_name' => $request->student_name,
				'eng' => $request->eng,
                'japanese' => $request->japanese,
                'laravel' => $request->laravel,
                'react' => $request->react,
				'comment' => $request->comment,
			]);

			return redirect('/scores/input');

	}

    public function scores()
	{
		$data = Score::all();
		// $data=Menu::where('id', 10);
		// $data->update(['name' => 'Chocolate Cake']);
		// dd($data);
        return view('articles.scores', [
            'scores' => $data
        ]);

	}
}
