@extends('layouts.app')
@section('content')
    <div ng-controller="UnityCtrl">
        First name:
        <input type="text" ng-model="obj.name">
        <button type="button" ng-if="!modeUpdate" ng-click="create(obj)">Enviar</button>
        <button type="button" ng-if="modeUpdate" ng-click="update(obj)">Atualizar</button>
        Pesquisar:
        <input type="text" ng-model="search" placeholder="Pesquisar"><br><br>
        <table class="table table-bordered">
            <tr>
                <th>Id</th>
                <th>Nome</th>
                <th>Data</th>
                <th>Ações</th>
            </tr>
            <tr ng-repeat="item in unitys | orderBy:'name' | filter: search ">
                <td ng-bind="item.id"></td>
                <td ng-bind="item.name"></td>
                <td ng-bind="item.created_at"></td>
                <td>
                    <button type="button" ng-click="loadObj(item)"> Editar </button>
                    <button type="button" ng-click="delete(item)"> Excluir </button>
                </td>
            </tr>
        </table>
        <!--<p>@{{ nome }} </p>
        <p ng-bind="nome"></p>-->
        <p>@{{ obj }}</p>
    </div>

    <script src="{{ asset('js/AngularJs/Factorys/UnityFactory.js') }}"></script>
    <script src="{{ asset('js/AngularJs/Controllers/UnityCtrl.js') }}"></script>
@endsection


