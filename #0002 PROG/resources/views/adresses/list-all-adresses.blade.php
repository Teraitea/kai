@extends('layouts.template')
@section('title')
Adresses
@stop
@section('content')
<div class="jumbotron">
    <h1>Les adresses</h1>
</div>
<div>
    <table class="table table-sm table-striped">
        <thead>
            <tr>
                <th>#</th>
                <th>Date</th>
            </tr>
        </thead>
        <tbody>
        @foreach($adresses as $adress)
            <tr>
                <td>{{ $adress->lastname }}</td>
                <td>{{ $adress->firstname }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
@stop