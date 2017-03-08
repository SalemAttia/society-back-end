<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>@yield('title')</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('css/simple-sidebar.css')}}" rel="stylesheet">
  <link href="{{asset('css/sweetalert.css')}}" rel="stylesheet">


  <link href="{{asset('css/home.css')}}" rel="stylesheet">


  <!-- css of the main contant of friend page -->
 @yield('css')
 


  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-T8Gy5hrqNKT+hzMclPo118YTQO6cYprQmhrYwIiQ/3axmI1hQomh7Ud2hPOy8SP1" crossorigin="anonymous">


      </head>

      <body>
     

        <div id="wrapper">

          <!-- Sidebar -->
          <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
              <li class="sidebar-brand">

               <img src="{{asset('images/loginpage/one.jpg')}}">
        
               <h4 style="text-align: center;">{{Auth::user()->name}}</h4>
               <p style="">{{Auth::user()->student->stage_id}} stage
              </p>

               <button class="btn btn-default">Student</button>
             </li>
              
             <li class="<?php $page =  $title; if ($page == 'Home') {echo 'active_l';}?>">
              <a href="{{ url('/') }}"><i class="home" aria-hidden="true"></i>Home</a>
            </li>
           <li class="<?php $page =  $title; if ($page == 'Profile') {echo 'active_l';}?>">
              <a href="{{ url('/profile') }}"><i class="Profile" aria-hidden="true"></i>Profile</a>
            </li>
           <li class="<?php $page =  $title; if ($page == 'Friends') {echo 'active_l';}?>">
              <a href="{{ url('/friends') }}"><i class="users" aria-hidden="true"></i>Friends</a>
            </li>
           <li class="<?php $page =  $title; if ($page == 'Messages') {echo 'active_l';}?>">
              <a href="{{ url('/masseges') }}"><i class="message" aria-hidden="true"></i>Messages</a>
            </li>
           <li class="<?php $page =  $title; if ($page == 'Notification') {echo 'active_l';}?>">
              <a href="{{ url('/notification') }}"><i class="not" aria-hidden="true"></i>Notification</a>
            </li>
            <li class="<?php $page =  $title; if ($page == 'Groups') {echo 'active_l';}?>">
              <a href="{{ url('/groups') }}"><i class="groups" aria-hidden="true"></i>Groups</a>
            </li>
           <li class="<?php $page =  $title; if ($page == 'Questions') {echo 'active_l';}?>">
              <a href="{{ url('/questions') }}"><i class="questions" aria-hidden="true"></i>Questions</a>
            </li>
            <div id="sidbarfooter">
            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
              {{ csrf_field() }}
            </form>
            
              <a href="{{ url('/setting') }}" class="footicon pull-right"><i class="setting" aria-hidden="true"></i> 
              </a>
            <a href="{{ url('/logout') }}" class="footicon" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             <i class="logout" aria-hidden="true"></i>
             </a>

            </div>
          </ul>

        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper">
          <div class="container-fluid">

            <!-- row -->
            <div class="row">

              <nav class="navbar navbar-default Header">
                <div class="container-fluid">
                  <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                      <span class="sr-only">Toggle navigation</span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#menu-toggle" id="menu-toggle"><i class="home_menu_icon" aria-hidden="true"></i><?php echo $title;?></a>
                  </div>

                  <!-- Collect the nav links, forms, and other content for toggling -->
                  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <div class="nav navbar-nav navbar-left col-md-8">
                      <ul class="pull-right nav navbar-nav">
                       <!-- Messages list -->
                       <li class="dropdown">    <!-- userdata -->
                        <a href=""   class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="h_message" aria-hidden="true"></i></a>

                        <ul class="dropdown-menu my-dropdown">

                          <li>
                            <a href="#">
                              <div class="pic"><img src="{{asset('images/icon/header-pic.png')}}" alt=""/></div>
                              <div class="cht-not-rgt">
                                <div class="cht-snd-name">Anas Abdallah:</div>
                                <div class="cht-short-msg">“I didn’t like the design can you..</div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pic"><img src="{{asset('images/icon/header-pic.png')}}" alt=""/></div>
                              <div class="cht-not-rgt">
                                <div class="cht-snd-name">Rita Tran</div>
                                <div class="cht-short-msg">:“I really like the design but can y..</div>
                              </div>
                            </a>
                          </li>
                        </ul>


                      </li>   <!-- end userdata -->


                    </li>    <!-- end Messages -->  

                    <li class="dropdown">    <!-- userdata -->
                      <a href="" class="icon-info" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-bell h_notfication" aria-hidden="true"></i>
                        <span class="label label-primary">3</span> </a>

                        <ul class="dropdown-menu my-dropdown">

                          <li>
                            <a href="#">
                              <div class="pic"><img src="{{asset('images/icon/header-pic.png')}}" alt=""/></div>
                              <div class="cht-not-rgt">
                                <div class="cht-snd-name">Anas Abdallah:</div>
                                <div class="cht-short-msg">“I didn’t like the design can you..</div>
                              </div>
                            </a>
                          </li>
                          <li>
                            <a href="#">
                              <div class="pic"><img src="{{asset('images/icon/header-pic.png')}}" alt=""/></div>
                              <div class="cht-not-rgt">
                                <div class="cht-snd-name">Rita Tran</div>
                                <div class="cht-short-msg">:“I really like the design but can y..</div>
                              </div>
                            </a>
                          </li>
                        </ul>



                      </li>   <!-- end userdata -->
                      <!--Notifications-->

                    </ul>

                  </div>

                  <ul class="nav navbar-nav navbar-right col-md-3">
                    <li><a href="#"><img src="{{asset('images/index/logo.png')}}" width="135" height="35"></a></li>

                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
            </nav>
          </div>

          <div class="row">
          <!-- maincontant -->
            <div class="col-md-12 maincontant"> <!-- maincontant -->
              <div class="row">  <!-- row -->
               @yield('content')
               </div>
            </div>
            <!-- endmain contant -->
              <!-- <div class="col-md-3 col-sm-12 col-xs-12 chatlist">  -->
              <!-- saidbar right -->
               <!-- <div class="row"> -->
                <!-- chat row -->

                <!-- include('partials.chatbox') -->



               <!-- </div> -->
                <!-- end row of chat -->

             <!-- </div>  -->
              <!-- end saidbar right -->




    </div> <!-- end row -->
  </div>

</div> <!-- /#page-content-wrapper -->


</div> <!-- /#wrapper -->

@yield('js')


<!-- Menu Toggle Script -->
<script src="{{asset('js/sweetalert-dev.js')}}"></script>
 @include('partials.flash')
<script>
  $("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
  });
</script>
<script type="text/javascript">
    $(document).ready(function(){


      $("[data-toggle=tooltip]").tooltip();
    });
  </script>
<script type="text/javascript" src="{{asset('js/chat.js')}}"></script>

</body>

</html>
