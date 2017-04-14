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
    public function getAll(){

        $data = CategoryModel::all();
        return Response::json($data);

    }
    public function getById($id){
        $data = CategoryModel::find($id);
        return Response::json($data);
    }
    public function update($id){
        $data = Input::all();
        $result = CategoryModel::where('id',$id) ->update($data);
        return Response::json($data);
    }
    public function delete($id){
        $result = CategoryModel::where('id',$id) ->delete();
        return Response::json($result);
    }
}
