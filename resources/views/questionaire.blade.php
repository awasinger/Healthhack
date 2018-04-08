@extends('layouts.app')
@section('content')
<div class="container">
    <h1>Hello {{$patient->name}} Welcome to your Assessment</h1>
    <div class="m-auto">
        <form action="/redirect" method="post" class="justify-content-center">
            {{ csrf_field() }}
            @includeWhen($ailmentIds -> contains(1), 'diabetes')
            @includeWhen($ailmentIds -> contains(2), 'depression')
            @includeWhen($ailmentIds -> contains(3), 'afib')
            @includeWhen($ailmentIds -> contains(4), 'hypertension')
            @includeWhen($ailmentIds -> contains(5), 'cholesterol')
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
    
</div>
@endsection
