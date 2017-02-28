@extends('layouts.doctor')
@section('title')
<?php $title = "Home";?>
@endsection
@section('css')

@include('partials.homecss')

@endsection

@section('content')

<div class="row mainrow">
	
<!-- ask form -->
@include('partials.setting')


</div>
@endsection
@section('js')
@include('partials.homejs')
@endsection