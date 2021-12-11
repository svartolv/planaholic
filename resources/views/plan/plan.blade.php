@extends('layouts.main')

@section('head')
    План на {{ $planDate }}
@endsection

@section('header')
    План на {{ $planDate }}
@endsection

@section('content')
    <plan :plan_date="'{{ $planDate }}'"></plan>
@endsection
