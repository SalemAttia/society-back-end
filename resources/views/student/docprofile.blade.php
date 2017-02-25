@extends('layouts.student')
@section('title')
<?php $title = "Profile";?>
@endsection
@section('css')
 <link href="{{asset('css/profile.css')}}" rel="stylesheet">
@endsection

@section('content')
@include('partials.docprofilehead')
@include('partials.docprofilesections')
@endsection
@section('js')
@include('partials.homejs')
@endsection