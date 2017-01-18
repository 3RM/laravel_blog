<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Category;

class CategoriesController extends Controller
{
	
    public function index() {
        $categories = Category::all();
        return view('admin/categories/index', [
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
		return back()->with('message','Категория добавлена');
    }
    public function destroy(Category $category) {
	//$category->posts()->delete();// удаляем посты из БД
        $category->delete();// удаляем саму категорию
    //    return redirect()->route('cat_admin');
		//return back()->with('message','Категория удалена');
		return back()->with('message',"Категория ".$category->title." удалена");
    }
    
    public function edit(Category $category){
		
		return view('admin/categories/edit', [
				'category' => $category,
			]);
    }
    
     public function save(Request $request) {
		 
        $this->validate($request, [
            'title' => 'required|max:255',
        ]);
		
        $category = Category::find($request->id);

		$old_cat = $category->title;
		
        $category->title = $request->title;
		$message = "Категория ".$old_cat." обновлена на ".$category->title;
        $category->save();
		
        return back()->with('message',$message);
		
    }
}
