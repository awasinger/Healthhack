@extends('layouts.app')
@section('content')
    <h1>Hello {{$patient->name}} welcome to your assessment</h1>
    <form>
        @includeWhen($ailmentIds -> contains(1), 'diabetes')
        {{$ailmentIds}}
    </form>
@endsection
