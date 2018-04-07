@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    Your ailments:
                    <hr>
                    @foreach (Auth::user()->ailments as $ailment)
                        {{ $ailment->name }}
                    @endforeach
                    <br>
                    Your Doctor:
                    {{ Auth::user()->doctor->name }}
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
