@extends('layouts.student')
@section('title')
<?php $title = "Questions";?>
@endsection
@section('css')

 <link href="{{asset('css/notification.css')}}" rel="stylesheet">
@endsection

@section('content')

@include('partials.askedqetion')
 
@endsection
@section('js')
@include('partials.homejs')
@endsection