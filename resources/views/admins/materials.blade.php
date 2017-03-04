@extends('layouts.admin')
@section('title')
<?php $title = "Materials";?>
@endsection
@section('css')
 <link href="{{asset('css/admingroup.css')}}" rel="stylesheet">
@endsection

@section('content')
@include('partials.adminmatrial')
@endsection
