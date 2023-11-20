@extends('layouts.app')

@section('content')
    <h1>Employers</h1>
    <x-user-list :users="$employers"/>
@endsection
