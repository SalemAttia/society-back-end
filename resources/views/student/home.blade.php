@extends('layouts.student')
@section('title')
<?php $title = "Home";?>
@endsection
@section('css')

@include('partials.homecss')

@endsection

@section('content')

<div class="row mainrow">
	
<!-- ask form -->
@include('partials.homesections.askform')

<!-- new feeds posts -->
 @include('partials.homesections.newfeeds')

</div>
@endsection
@section('js')
@include('partials.homejs')
@endsection