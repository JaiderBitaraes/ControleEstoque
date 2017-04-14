<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Response;
use App\UnityModel;
use SebastianBergmann\CodeCoverage\Report\Xml\Unit;

class UnityController extends Controller
{
    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function create()
    {
        $data = Input::all();
        UnityModel::create($data);
        return Response::json($data);
    }

    public function getAll()
    {
        $find = UnityModel::all();
        return Response::json($find);

    }

    public function getById($id)
    {
        $result = UnityModel::find($id);
        return Response::json($result);
    }

    public function update($id)
    {
        $data = Input::all();
        UnityModel::where('id', $id) -> update ($data);
        return Response::json($data);
    }
}
