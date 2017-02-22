<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, shrink-to-fit=no, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>login page</title>

  <!-- Bootstrap Core CSS -->
  <link href="{{asset('css/bootstrap.min.css')}}" rel="stylesheet"> 
  <link href="{{asset('css/loginpage.css')}}" rel="stylesheet">

  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
       <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

      </head>

      <body>
       <div class="container-fluid">
         <div class="row log">

           <div class="col-md-8 right col-sm-8 hidden-xs">

            <section id="carousel">           
              <div class="container">
                <div class="row">
                  <div class="col-md-8 col-md-offset-1" style="margin-top: 40px;">
                    <div class="quote"><i class="fa fa-quote-left fa-4x"></i></div>
                    <div class="carousel slide" id="fade-quote-carousel" data-ride="carousel" data-interval="3000">
                      
                      <div class="carousel-inner">
                        <div class="active item">
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                          </blockquote>
                          <div class="profile-circle" style="background-color: rgba(0,0,0,.2);"></div>
                        </div>
                        <div class="item">
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                          </blockquote>
                          <div class="profile-circle" style="background-color: rgba(77,5,51,.2);"></div>
                        </div>
                        <div class="item">
                          <blockquote>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quidem, veritatis nulla eum laudantium totam tempore optio doloremque laboriosam quas, quos eaque molestias odio aut eius animi. Impedit temporibus nisi accusamus.</p>
                          </blockquote>
                          <div class="profile-circle" style="background-color: rgba(145,169,216,.2);"></div>
                        </div>
                      </div>
                    </div>
                  </div>              
                </div>
              </div>
            </section>



          </div>


          <div class="col-md-4 left col-sm-4 col-xs-12">
            <h2 class="head">FCI Society</h2>

            <div class="inputlog">
             <h2 class="logh">Welcome to our world</h2>
             <p class="logb">Enter our details below here</p>
              <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12 input-group" style="margin-bottom: 25px;">
                                 <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="login-id" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            

                            <div class="col-md-12 input-group" style="margin-bottom: 25px;">
                              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>

                                <input id="login-password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember"> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <button type="submit" class="btn btn-primary btn-block">
                                    <i class="fa fa-btn fa-sign-in"></i> Login
                                </button>

                                <a class="btn btn-link" href="{{ url('/password/reset') }}">Forgot Your Password?</a>
                            </div>
                        </div>
                    </form>


          </div>

          <div class="foot">
           <p> All Rights Reserved By FCI Society.</p>
           <p>Copyrights © 2017</p>
         </div>
       </div>

     </div>
   </div>

   <!-- Bootstrap Core JavaScript -->
   <script src="{{asset('js/bootstrap.min.js')}}"></script>

 </body>
 </html>