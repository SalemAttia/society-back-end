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