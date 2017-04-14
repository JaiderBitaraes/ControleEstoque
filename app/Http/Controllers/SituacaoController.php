<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use Response;
use App\SituationModel;

class SituacaoController extends Controller
{
   public function __construct()
    {
        // $this->middleware('auth');
    }
    public function create(){
        $data = Input::all();
        SituationModel::create($data);

        return Response::json($data);

    }
    public function getAll(){
        $data = SituationModel::all();
        return Response::json($data);
    }
    public function getById($id){
        $data = SituationModel::find($id);
        return Response::json($data);
    }
    public function update($id){
        $data = Input::all();
        $result = SituationModel::where('id', $id)->update($data);
        return Response::json($result);
    }
    public function delete($id){
        $result = SituationModel::where('id', $id)->delete();
        return Response::json($result);
    }
}
