@extends('layouts.app')

@section('content')
<div ng-controller="situationCtrl">
<label>Insira</label>
<input type="text" name="name" ng-model="obj.name">
<button type="button" ng-click="create(obj)">Enviar</button>
<p>@{{obj}}</p>
</div>
<script src="{{ asset('js/AngularJs/Factorys/situationFactory.js') }}"></script>
<script src="{{ asset('js/AngularJs/Controllers/situationCtrl.js') }}"></script>
@endsection