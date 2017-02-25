@extends('layouts.student')
@section('title')
<?php $title = "Profile";?>
@endsection
@section('css')
 <link href="{{asset('css/profile.css')}}" rel="stylesheet">
@endsection

@section('content')
@include('partials.profilehead')
@include('partials.profilesections')
@endsection
@section('js')
@include('partials.homejs')
@endsection