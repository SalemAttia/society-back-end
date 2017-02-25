@extends('layouts.student')
@section('title')
<?php $title = "Groups";?>
@endsection
@section('css')
  <link href="{{asset('css/group-maincontent.css')}}" rel="stylesheet">

@endsection

@section('content')
@include('partials.groups')
  
@endsection
@section('js')
@include('partials.homejs')
@endsection