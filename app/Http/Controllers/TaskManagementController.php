<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Models\Category;
use Auth;
class TaskManagementController extends Controller
{
    private $path='tasks.';

    public function index(){
        $tasks=Task::where('user_id',Auth::id())->OrderBy('id','Desc')->paginate(10);
       
        return view($this->path.'index',compact('tasks'));
    }

    public function create(){
        $categories=Category::where('user_id',Auth::id())->get();
        return view($this->path.'store',compact('categories'));
    }

}
