@extends('layouts.app')

@section('content')
<div ng-controller="situationCtrl">
<label>Insira</label>
<input type="text" name="name" class="input rounded" ng-model="obj.name">
<input type="text" name="name" class="input rounded" ng-model="Search" placeholder="Pesquisar...">
<button ng-if="!modeUpdate" type="button" ng-click="create(obj)">Enviar</button>

<button ng-if="modeUpdate" type="button" ng-click="update(obj)">Atualizar</button>

<table class="table" >
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cadastro</th>
        <th>Update</th>
        <th>Editar ou Excluir</th>
    </tr>
    <tr ng-repeat="item in situations | orderBy:'created_at' | filter :Search">
        <td ng-bind="item.id">
        <td ng-bind="item.name">
        <td ng-bind="item.created_at">
        <td ng-bind="item.updated_at">
        <td>
            <button ng-click="loadObj(item)" > Editar</button>
            <button ng-click="delete(item)">Excluir</button>
        </td>
</table>
</div>


<script src="{{ asset('js/AngularJs/Factorys/situationFactory.js') }}"></script>
<script src="{{ asset('js/AngularJs/Controllers/situationCtrl.js') }}"></script>
@endsection