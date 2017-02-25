@extends('layouts.student')
@section('title')
<?php $title = "Groups";?>
@endsection
@section('css')
  <link href="{{asset('css/grouppage.css')}}" rel="stylesheet">

@endsection

@section('content')
@include('partials.group')
@include('partials.groupcontent')
  
@endsection
@section('js')
@include('partials.homejs')
<script type="text/javascript">
  $(document).ready(function() {
    $(".btn-pref .btn").click(function () {
      $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
  });
  });
</script>
@endsection