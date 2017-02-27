@extends('layouts.student')
@section('title')
<?php $title = "Home";?>
@endsection
@section('css')

@include('partials.homecss')

@endsection

@section('content')

<div class="row mainrow">
	


<!-- new feeds posts -->
 @include('partials.homesections.uploads')

</div>
@endsection
@section('js')
@include('partials.homejs')
@endsection