@extends('layouts.doctor')
@section('title')
<?php $title = "Questions";?>
@endsection
@section('css')
 <link href="{{asset('css/profile.css')}}" rel="stylesheet">

@endsection

@section('content')
@include('partials.unansweredq')

@endsection
