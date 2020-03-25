<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateCategoriesRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Facades\Storage;
use App\Category;

class CategoriesController extends Controller
{
    
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all()
        ]);
    }

   
    public function create()
    {
        return view('categories.create');
    }

    
    public function store(CreateCategoriesRequest $request)
    {
        $image = $request->image->store('categories');
        Category::create([
            'name' => $request->name,
            'image' => $image
        ]);
        session()->flash('success', 'New category has been added successfully!!');
        return redirect(route('categories.index'));
    }

 
    public function show($id)
    {
        //
    }

 
    public function edit(Category $category)
    {
        return view('categories.create', [
            'category' => $category
        ]);
    }

 
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        if($request->image){
            Storage::delete($category->image);
            $image = $request->image->store('categories');
            $category->update([
                'name' => $request->name,
                'image' => $image
            ]);
        } else{
            $category->update([
                'name' => $request->name
            ]);
        }
        
        session()->flash('success', 'Category updated successfully!!');
        return redirect(route('categories.index'));
    }

    public function destroy(Category $category)
    {
        $category->delete();
        session()->flash('success', 'Category deleted successfully!!');
        return redirect(route('categories.index'));
    }
}
