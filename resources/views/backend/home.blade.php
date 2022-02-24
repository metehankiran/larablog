@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row mt-4">
            <h3>Welcome {{ Auth()->user()->name }}.</h3>
        </div>
    </div>
@endsection