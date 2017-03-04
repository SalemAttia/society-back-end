@extends('layouts.admin')
@section('title')
<?php $title = "Dashbord";?>
@endsection

@section('content')

 <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12 maincontant"> <!-- maincontant -->
              <div class="row mainhead"> <!-- header of dashbord statistcs -->
         <div class="row">
                  <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <span class="icon-box bg-color-red set-icon">
                        <i class="fa fa-users"></i>
                      </span>
                      <div class="text-box">
                        <p class="main-text">{{$userscount}} New</p>
                        <p class="text-muted">Users</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <span class="icon-box bg-color-green set-icon">
                        <i class="fa fa-question"></i>
                      </span>
                      <div class="text-box">
                        <p class="main-text">{{$questioncount}} New</p>
                        <p class="text-muted">Questions</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-3 col-sm-6 col-xs-6">           
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
                  <div class="col-md-3 col-sm-6 col-xs-6">           
                    <div class="panel panel-back noti-box">
                      <span class="icon-box bg-color-brown set-icon">
                        <i class="fa fa-file"></i>
                      </span>
                      <div class="text-box">
                        <p class="main-text">{{$uploadcount}} New</p>
                        <p class="text-muted">Uploaded files</p>
                      </div>
                    </div>
                  </div>
                </div>

                <hr>
                

              @include('partials.Newsform')
              <!-- update status and posts contant -->
            </div> <!-- header of dashbord statistcs -->
          </div>   <!-- maincontant -->


        </div> <!-- end row -->


@endsection
