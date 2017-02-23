@extends('layouts.student')
@section('title')
<?php $title = "Friends";?>
@endsection
@section('css')

@include('partials.homecss')
 <link href="{{asset('css/friends.css')}}" rel="stylesheet">

@endsection

@section('content')

@include('partials.friends')
 
@endsection
@section('js')
@include('partials.homejs')
@endsection