@extends('layouts.main')

@section('header')
    <h1>План на {{ $planDate }}</h1>
@endsection

@section('content')
    <plan :plan_date="'{{ $planDate }}'"></plan>
@endsection
