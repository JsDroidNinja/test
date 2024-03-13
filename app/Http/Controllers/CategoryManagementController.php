<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\Models\Category;
use Auth;
class CategoryManagementController extends Controller
{
    private $path="category.";
    public function index(){
       $categories=Category::where('user_id',Auth::id())->paginate(10);
       return view($this->path.'index',compact('categories'));
    }

    public function create(){
        return view($this->path.'store');
    }

    public function store(CategoryRequest $request){ 
        $category=new Category;
        $category->user_id=Auth::id();
        $category->category=$request->name;
        $category->save();
        
        return redirect(route('category.index'))->with('success','Category is Created Successfully');
    }
}
