


           <!-- Question posts -->
           <div class="col-sm-10 col-sm-offset-1 tab-pane fade in active" id="tab1">

              @foreach($user[0]->answer as $answer)
      
            <!-- ask question post -->
            <div class="panel panel-white post panel-shadow"> <!-- postwell -->
              <div class="post-heading">
                <div class="pull-left image">
                  <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                  <div class="title h5">
                    <a href="profile/{{$answer->quetion->user->id}}"><b>{{$answer->quetion->user->name}}</b></a>
                    Ask Question in <span class="quetion">{{$answer->quetion->subject->name}}</span>
                  </div>
                  <h6 class="text-muted time">{{$answer->quetion->created_at->diffForHumans()}}</h6>
                </div>
              </div> 
              <div class="post-description"> 
                <p> {{$answer->quetion->body}}</p>
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
                 <form method="post" action="{{ url('/answer') }}">
                  <div class="input-group"> 
                 
                   {{ csrf_field() }}
                    <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                    <input type="hidden" name="quetion_id" value="{{$answer->quetion->id}}">
                    <input name="body" class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                      <button type="submit"><i class="fa fa-edit"></i></button>  
                    </span>
                    
                 
                    

                  </div>
                   </form>
                <ul class="comments-list">
                  <li class="comment">
                    <a class="pull-left" href="#">
                      <img class="avatar" src="http://bootdey.com/img/Content/user_1.jpg" alt="avatar">
                    </a>
                    <div class="comment-body">
                      <div class="comment-heading">
                        
                        <h5 class="time">{{$answer->created_at->diffForHumans()}}</h5>
                      </div>
                      <p>{{$answer->body}}</p>
                    </div>

                  </li>
                </ul>
              </div>
            </div> <!-- postwell -->

            <!-- end of ask quetion post -->
            @endforeach


          </div>   <!-- tab 1 end -->
          <div class="col-sm-10 col-sm-offset-1 tab-pane fade in" id="tab2">
       
           <!-- uploads files post -->
           @foreach($matrials as $matrial)

            <div class="panel panel-white post panel-shadow"> <!-- postwell -->
              <div class="post-heading">
                <div class="pull-left image">
                  <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                </div>
                <div class="pull-left meta">
                  <div class="title h5">
                    <a href="#"><b></b></a>
                    Uplad new lecture in <span class="download">{{$matrial->subject->name}}</span>
                  </div>
                  <h6 class="text-muted time">{{$matrial->created_at->diffForHumans()}}</h6>
                </div>
              </div> 
              <div class="post-description"> 
                <p>{{$matrial->name}}</p>
                <div class="stats">
                  <a href="#" class="btn btn-default stat-item">
                    <i class="fa fa-thumbs-up icon"></i>2
                  </a>
                  <a href="#" class="btn btn-default stat-item">
                    <i class="fa fa-share icon"></i>12
                  </a>
                  <a href="download/{{$matrial->attachfile}}" class="btn btn-default stat-item">
                    <i class="fa fa-cloud-download"></i>
                  </a>
                </div>
              </div>
             
            </div> <!-- postwell -->

            <!-- end of upload file post -->

            <!-- end uploades post -->
            @endforeach





            </div>   <!-- Question posts upload tab 2 -->



         <!-- tab 2 -->
          <div class="col-sm-10 col-sm-offset-1 tab-pane fade in" id="tab3">
               <!-- who follow the doctor -->
              <ul>

                 @foreach($userfollower as $follower)
                  <li>
                     {{$follower[0]->name}}
                     {{$follower[0]->id}}
                     
                    @foreach($follower as $s)
                      
                     {{$s->student['stage_id']}}
                     @endforeach
                    


                     
                  </li>

               @endforeach
              </ul>
              
          </div>   <!-- Question posts upload tab 2 -->
           

            <!-- about doctoure -->
            <div class="col-sm-10 col-sm-offset-1 tab-pane fade in" id="tab4">
                <div class="row" style="background: #fff; border-radius: 15px; padding: 10px;">
                  {{$user[0]->name}}
                  <ul>
                  @foreach($user[0]->subject as $subject)
                  <li>1-{{$subject->name}}</li>
                  @endforeach
                  </ul>
                </div>
            </div>
            <!-- end of about doctore-->

        </div> <!-- end tab conten -->