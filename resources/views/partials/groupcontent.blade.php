
            <!-- group main contant Questions  and files -->
          
            <div class="row" style="padding: 19px;
    margin-top: -22px;">
              <div class="col-md-12" >
                <div class="btn-pref btn-group btn-group-justified btn-group-lg" role="group" aria-label="...">
                  <div class="btn-group" role="group">
                    <button type="button" id="stars" class="btn btn-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span>
                      <div class="">Question</div>
                    </button>
                  </div>
                  <div class="btn-group" role="group">
                    <button type="button" id="favorites" class="btn btn-default" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-file" aria-hidden="true"></span>
                      <div class="">Files</div>
                    </button>
                  </div>
                  <div class="btn-group" role="group">
                    <button type="button" id="following" class="btn btn-default" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                      <div class="">Users</div>
                    </button>
                  </div>
                </div>

                <div class="well">  <!-- well -->
                  <div class="tab-content"> <!-- table contant -->
                    <div class="tab-pane fade in active" id="tab1"><!--  Question -->


                     <!-- ask question post -->
                    @foreach ($questions as $question)


                    <!-- ask question post -->
              <div class="panel panel-white post panel-shadow"> <!-- postwell -->
                <div class="post-heading">
                  <div class="pull-left image">
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                  </div>
                  <div class="pull-left meta">
                    <div class="title h5">
                      <a href="#"><b>{{$question->User->name}}</b></a>
                      Ask Question in <span class="quetion">{{$question->subject->name}}</span>
                    </div>
                    <h6 class="text-muted time">{{$question->created_at->diffForHumans()}}</h6>
                  </div>
                </div> 
                <div class="post-description"> 
                  <p> {{$question->body}}</p>
                  <div class="stats">
                    <a href="#" class="btn btn-default stat-item">
                      <i class="fa fa-thumbs-up icon"></i>2
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                      <i class="fa fa-share icon"></i>12
                    </a>
                  </div>
                </div>
                <div class="post-footer">
                  <div class="input-group"> 
                    <input class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                      <a href="#"><i class="fa fa-edit"></i></a>  
                    </span>
                  </div>
                   @foreach ($question->answer as $ans)
                  <ul class="comments-list">
                    <li class="comment">
                      <a class="pull-left" href="#">
                        <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                      </a>
                      <div class="comment-body">
                        <div class="comment-heading">
                          <h4 class="user"><?php
                                if($ans->User->rol == '1'){
                                  echo "Dr";
                                }else{
                                  echo "";
                                }
                              ?>
                              {{$ans->User->name}}</h4>
                          <h5 class="time">{{$ans->created_at->diffForHumans()}}</h5>
                        </div>
                        <p>{{$ans->body}}</p>
                      </div>

                         
                     
                    </li>
                    @endforeach
                  </ul>

                </div>
              </div> <!-- postwell -->

             @endforeach


              

                    <!-- end of ask quetion post -->
                  </div>  <!-- end Question -->
                  <div class="tab-pane fade in" id="tab2"> <!-- files -->
                   <table class="table table-striped table-bordered table-list">
                    <thead>
                      <tr>
                       
                        <th class="hidden-xs">ID</th>
                        <th>Dr.name</th>
                        <th>lecture name</th>
                        <th>Download</th>
                      </tr> 
                    </thead>
                    <tbody>
                     @foreach ($matrials as $matrial)
                      <tr>
                        <td > {{$matrial->id}}</td>
                        <td> {{$matrial->User->name}}</td>
                        <td>{{$matrial->name}}</td>
                        <td> <a href="{{$matrial->attachfile}}" class="btn btn-default" style="margin-left: 39%;"><em class="fa fa-cloud-download"></em></a></td>
                      </tr>
                        @endforeach
                      
                    </tbody>
                  </table>
                </div> <!-- end files -->
                <div class="tab-pane fade in" id="tab3"> <!-- users -->
                     <table class="table table-striped table-list">
                    <thead>
                      <tr>
                       
                        <th class="hidden-xs">ID</th>
                        <th>user name</th>
                        <th style="text-align: center;">follow</th>
                        
                      </tr> 
                    </thead>
                    <tbody>
                    @foreach($students as $student)
                      <tr>
                        
                        <td ><a class="btn btn-info" ><em class="fa fa-user"></em></a></td>
                        <td>{{$student->user->name}}</td>
                        <td> <a href="follow/{{$student->user->id}}" class="btn btn-success" style="margin-left: 39%;">follow</a></td>
                      </tr>
                      @endforeach
                       

                    </tbody>
                  </table>
                </div> <!-- end users -->
              </div>  <!-- end table contant -->
            </div>  <!-- end well -->
          </div>

        </div>
        <!-- end of group main contant Questions  and files -->