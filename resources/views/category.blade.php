@extends('layouts.app')
@section('content')
<div ng-controller="CategoryCtrl">
    <label>Nome Categoria</label>
    <input type="text" name="name" class="input rounded" ng-model="obj.name" />
    <button type="button" ng-click="update(obj)" ng-if="modeUpdate">Atualizar</button>
    <button type="button" ng-click="create(obj)" ng-if="!modeUpdate">Enviar</button>
    <input type="text" name="name" class="input rounded" ng-model="Search" placeholder="Pesquisar..."  />
    
    
<p>@{{obj}}</p>
<script src="{{ asset('js/AngularJs/Factorys/CategoryFactory.js') }}"></script>
    <script src="{{ asset('js/AngularJs/Controllers/CategoryCtrl.js') }}"></script>
    <table class="table">
        <tr>
            <th>Id</th>
            <th>Nome</th>
            <th>Data</th>
            <th>Editar ou Excluir </th>
            
        </tr>
        <tr ng-repeat="item in categories | orderBy:'created_at' | filter:Search">
            <td ng-bind="item.id"></td>
            <td ng-bind="item.name"></td>
            <td ng-bind="item.created_at"></td>
            <td>
                <button class="" ng-click="loadObj(item)">Editar</button>
                <button  ng-click="delete(item)">Excluir</button>
            </td>
        </tr>

    </table>
</div>

@endsection