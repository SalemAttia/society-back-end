@extends('layouts.doctor')
@section('title')
<?php $title = "Materials";?>
@endsection
@section('css')
 <link href="{{asset('css/profile.css')}}" rel="stylesheet">
@endsection

@section('content')
 @include('partials.matrialhead')
 @include('partials.matrialcontent')
@endsection
