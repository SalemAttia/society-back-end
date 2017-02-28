@extends('layouts.doctor')
@section('title')
<?php $title = "Home";?>
@endsection

@section('content')

 <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 maincontant"> <!-- maincontant -->
              <div class="row mainhead"> <!-- header of dashbord statistcs -->
                <div class="row">
                  
                  <div class="col-md-4 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-question"></i>
                      </span>
                      <div class="text-box">
                        <p class="main-text">{{$numquestion}} New</p>
                        <p class="text-muted">Questions</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <span class="icon-box bg-color-blue set-icon">
                        <i class="fa fa-bell-o"></i>
                      </span>
                      <div class="text-box">
                        <p class="main-text">240 New</p>
                        <p class="text-muted">Notifications</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <span class="icon-box bg-color-brown set-icon">
                        <i class="fa fa-envelope"></i>
                      </span>
                      <div class="text-box">
                        <p class="main-text">3 New</p>
                        <p class="text-muted">masseges</p>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>
                

      @include('partials.uploadform')
              <!-- update status and posts contant -->
            </div> <!-- header of dashbord statistcs -->
          </div>   <!-- maincontant -->


        </div> <!-- end row -->


@endsection
