<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;

use Response;
use App\EstoqueModel;

class EstoqueController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }
    public function create(){
        $data = Input::all();
        EstoqueModel::create($data);
        return Response::json($data);

    }
}
