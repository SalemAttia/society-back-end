@extends('layouts.doctor')
@section('title')
<?php $title = "Home";?>
@endsection

@section('contant')
<form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
 </form>

 <a href="{{ url('/logout') }}"
                      onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                                        Logout
                                        </a>
@endsection
