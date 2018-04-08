@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Hello {{$patient->name}} Welcome to your Assessment</h1>
    <div class="m-auto">
        <form action="/redirect" method="post" class="justify-content-center">
            {{ csrf_field() }}
            @includeWhen($ailmentIds -> contains(1), 'diabetes')
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
</div>
@endsection
