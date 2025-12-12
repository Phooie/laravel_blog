<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
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

public function index()
{
 $data = [
 [ "id" => 1, "item" => "Chicken sandwich" ],
 [ "id" => 2, "item" => "Orange juice" ],
 [ "id" => 3, "item" => "Tomato salad" ],
 [ "id" => 4, "item" => "Espresso" ],
 [ "id" => 5, "item" => "Creamy cashew mac and cheese" ],
 [ "id" => 6, "item" => "Korean BBQ beef tacos with kimchi" ],
 [ "id" => 7, "item" => "Truffle mushroom and arugula pizza" ],
 [ "id" => 8, "item" => "Avocado toast with poached egg" ],
 [ "id" => 9, "item" => "Spicy honey-glazed chicken wings" ],
 [ "id" => 10, "item" => "Grilled octopus" ],
 [ "id" => 11, "item" => "Japanese yakitori skewers" ],
 [ "id" => 12, "item" => "Moroccan spiced meatballs" ],
 [ "id" => 13, "item" => "Dark chocolate avocado mousse" ],
 [ "id" => 14, "item" => "Kimchi fried rice" ],
 [ "id" => 15, "item" => "Winter root vegetable stew" ],
 [ "id" => 16, "item" => "Squid ink pasta with seafood marinara" ],
 [ "id" => 17, "item" => "Smoked sausage" ],
 [ "id" => 18, "item" => "Spicy tuna roll" ],
 [ "id" => 19, "item" => "Spicy Thai curry with tofu" ],
 [ "id" => 20, "item" => "Acai bowl" ],
 ];
 return view('articles.index', [
 'articles' => $data
 ]);
}
}