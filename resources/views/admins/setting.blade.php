@extends('layouts.admin')
@section('title')
<?php $title = "Dashbord";?>
@endsection
@section('css')
 <link href="{{asset('css/admingroup.css')}}" rel="stylesheet">

@endsection

@section('content')
@include('partials.setting')

@endsection
@section('js')
@include('partials.homejs')
@endsection