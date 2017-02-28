@extends('layouts.doctor')
@section('title')
<?php $title = "Profile";?>
@endsection
@section('css')
 <link href="{{asset('css/profile.css')}}" rel="stylesheet">
@endsection

@section('content')
  @include('partials.docownprofilehead')
  @include('partials.docprofilesections')
@endsection
