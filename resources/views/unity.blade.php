@extends('layouts.app')
@section('content')

    <div ng-controller="UnityCtrl">
        First name:
        <input type="text" ng-model="obj.name">
        <button type="button" ng-click="create(obj)">Enviar</button>
        <!--<p>@{{ nome }} </p>
        <p ng-bind="nome"></p>-->
        <p>@{{ obj }}</p>
    </div>

    <script src="{{ asset('js/AngularJs/Factorys/UnityFactory.js') }}"></script>
    <script src="{{ asset('js/AngularJs/Controllers/UnityCtrl.js') }}"></script>
@endsection


