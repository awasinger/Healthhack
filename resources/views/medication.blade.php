@extends('layouts.app')
@section('content')
<h1>1. Medication(s):</h1>
<form method="POST" action="{{ route('register') }}">
<div class="col-md-6">
    <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

    @if ($errors->has('name'))
        <span class="invalid-feedback">
            <strong>{{ $errors->first('name') }}</strong>
        </span>
    @endif
</form>




    
@endsection
