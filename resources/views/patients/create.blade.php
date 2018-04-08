@extends('layouts.app')
@section('content')
<div class="container">
    <form method="post" action="/patients/create">
        <div class="form-group">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="name">Patient name</label>
                <input type="text" name="name">
            </div>
            <div class="form-group">
                <label for="email">Patient email</label>
                <input type="email" name="email">
            </div>
            <div class="form-group">
                <label for="phone">Patient phone number</label>
                <input type="text" name="phone" value="+1">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">Add Patient</button>
            </div>
        </div>
    </form>
</div>
@endsection