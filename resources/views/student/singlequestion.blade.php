@extends('layouts.student')
@section('title')
<?php $title = "Questions";?>
@endsection
@section('css')

 <link href="{{asset('css/single.css')}}" rel="stylesheet">
@endsection

@section('content')

@include('partials.singlequestion')
 
@endsection
@section('js')
@include('partials.homejs')
@endsection