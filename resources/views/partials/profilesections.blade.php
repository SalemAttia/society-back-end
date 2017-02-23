


           <!-- Question posts -->
           <div class="col-sm-10 col-sm-offset-1 tab-pane fade in active" id="tab1">

            <!-- ask question post -->
            @foreach($questions as $question)
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
            <!-- end of ask quetion post -->
            @endforeach



          </div>   <!-- tab 1 end -->


         <!-- tab 2 -->
          <div class="col-sm-10 col-sm-offset-1 tab-pane fade in" id="tab2">
                  my friends over here


            </div>   <!-- Question posts upload tab 2 -->
           

            <!-- about doctoure -->
            <div class="col-sm-10 col-sm-offset-1 tab-pane fade in" id="tab4">
                <div class="row" style="background: #fff; border-radius: 15px; padding: 10px;">
                  <h1>name:-{{$user->name}}</h1>
                  <h4>email:-{{$user->email}}</h4>
                  <h4>{{$user->student->stage_id}} nd @ {{$user->student->faculty->name}}</h4>
                  <ul>
                  @foreach($user->student->stage->subject as $sub)
                  <li>{{$sub->name}}</li>
                  @endforeach
                  </ul>

                </div>
            </div>
            <!-- end of about doctore-->

        </div> <!-- end tab conten -->