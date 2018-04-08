@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Your current patients</h1>
    <hr>
    @foreach (Auth::user()->patients as $patient)
    <div class="panel panel-default">
        <div class="panel-body">
            <a href="/patientAnswers">{{ $patient->name }}</a>
            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<a href="/patients/{{$patient->id}}/ailments">Edit</a>
        </div>
    </div>
    @endforeach
    <a class="btn btn-primary" href="/patients/create">Add a new patient</a>
</div>

@endsection
