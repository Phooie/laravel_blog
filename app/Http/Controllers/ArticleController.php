<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\Menu;



class ArticleController extends Controller
{
 public function index1()
 {
	 return "A Place To View Menu List";
 }
 public function detail($id)
 {
	 return "Menu Detail - $id";
 }

 public function test()
 {
	 return "Test Menu";
 }

//  public function booking()
// {
//  return view('articles/booking');
// }

public function booking()
{
 return view('articles.booking');
}

// public function index()
// {
//  $data = [
//  [ "id" => 1, "item" => "Chicken sandwich" ],
//  [ "id" => 2, "item" => "Orange juice" ],
//  [ "id" => 3, "item" => "Tomato salad" ],
//  [ "id" => 4, "item" => "Espresso" ],
//  [ "id" => 5, "item" => "Creamy cashew mac and cheese" ],
//  [ "id" => 6, "item" => "Korean BBQ beef tacos with kimchi" ],
//  [ "id" => 7, "item" => "Truffle mushroom and arugula pizza" ],
//  [ "id" => 8, "item" => "Avocado toast with poached egg" ],
//  [ "id" => 9, "item" => "Spicy honey-glazed chicken wings" ],
//  [ "id" => 10, "item" => "Grilled octopus" ],
//  [ "id" => 11, "item" => "Japanese yakitori skewers" ],
//  [ "id" => 12, "item" => "Moroccan spiced meatballs" ],
//  [ "id" => 13, "item" => "Dark chocolate avocado mousse" ],
//  [ "id" => 14, "item" => "Kimchi fried rice" ],
//  [ "id" => 15, "item" => "Winter root vegetable stew" ],
//  [ "id" => 16, "item" => "Squid ink pasta with seafood marinara" ],
//  [ "id" => 17, "item" => "Smoked sausage" ],
//  [ "id" => 18, "item" => "Spicy tuna roll" ],
//  [ "id" => 19, "item" => "Spicy Thai curry with tofu" ],
//  [ "id" => 20, "item" => "Acai bowl" ],
//  ];
//  return view('articles.index', [
//  'articles' => $data
//  ]);
// }




public function index()
    {
		// Article::create([
		// 'title' => 'New Article',
		// 'body' => 'This is content',
		// 'category_id' => '6'
		// ]);
		// $article = Article::find(1);
		// $article->update(['title' => 'Updated']);
		// Article::find(32)->delete();
		// $data=Article::pluck('title');//remove [] from index
		// $data=Article::orderBy('id', 'desc')->get();
		// $data=Article::orderBy('id', 'asc')->get();
		// $data=Article::where('title', 'sample_title')->first();
		// $data=Article::where('category_id', 1)->get();
		// $data=Article::find(5);
        // $data = Article::all();









		// Menu::create([
		// 'name' => 'Tomato Salad',
		// 'price' => '108',
		// 'category' => 'Side Dish',
		// 'description' => 'A simple tomato salad',
		// ]);
		// $article = Menu::find(14);
		// $article->update(['name' => 'Okonomiyaki']);
		// Menu::find(22)->delete();
		// $data=Menu::pluck('name');//remove [] in index
		// $data = Menu::select('name')->get();
		// $data=Menu::orderBy('id', 'desc')->get();
		// $data=Menu::orderBy('id', 'asc')->get();
		// $data=Menu::where('category', 'Dessert')->first();//'articles' in  index and comment 'foreach'
		// $data=Menu::where('category', 'Main Dish')->get();
		// $data=Menu::find(12);
        $data = Menu::all();
		// $data=Menu::where('id', 10);
		// $data->update(['name' => 'Chocolate Cake']);
		// dd($data);
        return view('articles.index', [
            'articles' => $data
        ]);

		// echo "Delete Success";
		// echo "Insert Success";
		// echo "Update Success";
    }



	public function sample()
    {
        return view('articles.sample');
    }

	public function create()
	{
		return view('articles.create');

	}

	public function store(Request $request)
	{
			// Article::create([
			// 	'title' => $request->title,
			// 	'body' => $request->body,
			// 	'category_id' => $request->category_id,
			// ]);

			$validated = $request->validate([
				'title' => 'required|min:3|max:20',
				'body'  => 'required|min:10',
				'category_id' => 'required|integer',
			]);

			Article::create($validated);

			return redirect('/articles/create')-> with('success','Article created successfully!');

	}

	public function article_ex()
	{
		// $data = Article::all();
		// // $data=Menu::where('id', 10);
		// // $data->update(['name' => 'Chocolate Cake']);
		// // dd($data);
        // return view('articles.index', [
        //     'articles' => $data
        // ]);
		$articles = Article::all();
		return view('articles.index', compact('articles'));
	}

	public function edit($id)
	{
		$article = Article::findOrFail($id);
		return view('articles.edit', compact('article'));
	}

	 public function update(Request $request, $id)
	{
		$article = Article::findOrFail($id);

		$article->update([
			'title' => $request->title,
			'body' => $request->body,
			'category_id' => $request->category_id,
		]);

		return redirect('/articles/example');
	}

	public function destroy($id)
	{
		$article = Article::findOrFail($id);
		$article->delete();

		return redirect('/articles/example');
	}
}