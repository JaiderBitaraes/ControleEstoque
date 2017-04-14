<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Response;
use App\CategoryModel;

class CategoryController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function create(){
        $data = Input::all();
        CategoryModel::create($data);
        return Response::json($data);

    }
    public function get(){

        $get = CategoryModel::find(1);
        return Response::json($get);

    }
}
