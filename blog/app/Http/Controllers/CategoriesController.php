<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;
use View;

class CategoriesController extends Controller
{
	
    public function index() {
		
        $categories = Category::orderBy('title', 'ASC')->get();
        return view('admin.categories.categories', [
            'categories' => $categories,
        ]);
		
    }
	
	public function create(){
		
		return view('admin/categories/create');
		
	}
	
    public function store(Request $request) {
		
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
        $category = new Category;
        $category->title = $request->title;
        $category->save();
		return back()->with('message','Категория '.$category->title.' добавлена');
		
    }
	
	public function show($id){
		
		$category = Category::find($id);
		return View::make('admin.categories.show',['category'=>$category]);
		
	}
	
	public function edit($id){
		
		$category = Category::find($id);
		return view('admin/categories/edit', [
				'category' => $category,
			]);
    }
	
	public function update(Request $request,$id){
		
		$category = Category::find($id);
		$category->update($request->all());
     
		return back()->with('message', 'Категория изменена');
     
    }	
	
    public function destroy($id) {
		
		$category = Category::find($id);
        $category->delete();
    
		return back()->with('message',"Категория ".$category->title." удалена");
    }
}
