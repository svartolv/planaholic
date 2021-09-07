@extends('tasks.layout')

@section('content')
    <plan :plan_date="'{{ $planDate }}'"></plan>
@endsection
