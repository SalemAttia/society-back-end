@extends('layouts.admin')
@section('title')
<?php $title = "Groups";?>
@endsection
@section('css')
 <link href="{{asset('css/admingroup.css')}}" rel="stylesheet">
@endsection

@section('content')
@include('partials.groupsmaneage')
@endsection
