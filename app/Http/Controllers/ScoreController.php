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
			$valid = $request->validate([
				'student_name' => 'required|min:3|max:20',
				'eng' => 'required|integer',
                'japanese' => 'required|integer',
                'laravel' => 'required|integer',
                'react' => 'required|integer',
				'comment' => 'required|min:1',
			]);

			Score::create($valid);

			return redirect('/scores/input')->with('success', 'Scores inserted successfully!');;

	}

    public function scores()
	{
		// $data = Score::all();
		// // $data=Menu::where('id', 10);
		// // $data->update(['name' => 'Chocolate Cake']);
		// // dd($data);
        // return view('articles.scores', [
        //     'scores' => $data
        // ]);

		$scores = Score::all();
    	return view('articles.scores', compact('scores'));
	}

	public function edit($id)
	{
		$scores = Score::findOrFail($id);
		return view('articles.editscores', compact('scores'));
	}

	public function update(Request $request, $id)
	{
		$scores = Score::findOrFail($id);

		$scores->update([
			'student_name' => $request->student_name,
			'eng' => $request->eng,
			'japanese' => $request->japanese,
			'laravel' => $request->laravel,
			'react' => $request->react,
			'comment' => $request->comment,
		]);

		return redirect('/scores');
	}

	public function destroy($id)
	{
		$scores = Score::findOrFail($id);
		$scores->delete();

		return redirect('/scores');
	}
}
