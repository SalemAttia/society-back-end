  <div class="row">
                <div class="col-md-8">
                  <!--  Modals-->
                  <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                    <div class="btn-group" role="group">
                      <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="">Student</div>
                      </button>
                    </div>
                    <div class="btn-group" role="group">
                      <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="">Docturs</div>
                      </button>
                    </div>
                    <div class="btn-group" role="group">
                      <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                        <div class="">Admin</div>
                      </button>
                    </div>
                  </div>
                </div>
                <div class="col-md-4">

                  <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">
                   Add new users
                 </button>
               </div>
             </div>



             <!-- form for add new user -->

             <div class="row">

              <div class="col-md-12">
                <!--  Modals-->
                
                <br>
                <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">add new user</h4>
                      </div>
                      <div class="modal-body">
                      <form id="" enctype="multipart/form-data" method="post" action="#" style="box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 3px 3px;padding-bottom: 10px;">
                         {{ csrf_field() }}
                         <div class="form-group">
                          <label>for mult user choose the xlx file and click add multi user</label>
                           <input type="file" name="">
                           <p class="help-block">for adding multi user put all in xlx cheet and upload file here</p>
                        </div>
                         <button type="submit" class="btn btn-primary">Add multi users</button>
                      </form>
                      <hr>
                       <p style="text-align: center;">__OR__</p>
                      <form id="addnewuser" enctype="multipart/form-data" method="post" action="{{ url('/addnewuser') }}">
                       {{ csrf_field() }}
                       
                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password">

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation">

                                @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group">
                          <label>Choose role of user</label>
                          <select name="rol" class="form-control">
                            <option value="2">student</option>
                            <option value="1">doctor</option>
                            <option value="0">admin</option>
                           
                          </select>
                        </div>
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                         <button onclick="event.preventDefault(); document.getElementById('addnewuser').submit();" class="btn btn-success green"><i class="fa fa-share"></i> Add</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>


              <!-- End Modals-->
              <br>
              <hr>

              @include('partials.userscontent')