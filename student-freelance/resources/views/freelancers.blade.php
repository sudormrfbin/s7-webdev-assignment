@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Freelancers</h1>
        <x-user-list :users="$freelancers"/>
    </div>
@endsection
