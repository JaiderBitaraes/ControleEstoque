<?php

namespace App\Http\Controllers;

use App\CategoryModel;
use App\ProductsModel;
use Illuminate\Support\Facades\Input;
use Response;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function create()
    {
        $data = Input::all();
        ProductsModel::create($data);
        return Response::json($data);
    }


}
