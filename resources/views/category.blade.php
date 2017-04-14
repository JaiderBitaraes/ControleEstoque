@extends('layouts.app')
@section('content')
<div ng-controller="CategoryCtrl">
    <label>Nome Categoria</label>
    <input type="text" name="name" class="input rounded" ng-model="obj.name" />
    
    <button type="button" ng-click="create(obj)">Enviar</button>
<p>@{{obj}}</p>
<script src="{{ asset('js/AngularJs/Factorys/CategoryFactory.js') }}"></script>
    <script src="{{ asset('js/AngularJs/Controllers/CategoryCtrl.js') }}"></script>
</div>

@endsection