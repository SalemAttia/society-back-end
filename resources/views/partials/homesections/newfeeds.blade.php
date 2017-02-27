  
  <div class="row"> <!-- postsrow -->

            <div class="col-sm-10 col-sm-offset-1">
            
		        @foreach ($subjects as $subject)
		          @foreach ($subject->question as $question)


		                <!-- ask question post -->
              <div class="panel panel-white post panel-shadow"> <!-- postwell -->
                <div class="post-heading">
                  <div class="pull-left image">
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                  </div>
                  <div class="pull-left meta">
                    <div class="title h5">
                      <a href="#"><b>{{$question->User->name}}</b></a>
                      Ask Question in <span class="quetion">{{$subject->name}}</span>
                    </div>
                    <h6 class="text-muted time">{{$question->created_at->diffForHumans()}}</h6>
                  </div>
                </div> 
                <div class="post-description"> 
                  <p> {{$question->body}} </p>
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
                    <input type="hidden" name="quetion_id" value="{{$question->id}}">
                    <input name="body" class="form-control" placeholder="Add a comment" type="text">
                    <span class="input-group-addon">
                      <button type="submit"><i class="fa fa-edit"></i></button>  
                    </span>
                    
                 
                    

                  </div>
                   </form>
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

                <!-- matrials -->
		         @foreach ($subject->matrial as $matrial)


		         <div class="panel panel-white post panel-shadow"> <!-- postwell -->
                <div class="post-heading">
                  <div class="pull-left image">
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                  </div>
                  <div class="pull-left meta">
                  <div class="title h5">
                      <a href="#"><b>Dr/{{$matrial->User->name}}</b></a>
                      Uplad new lecture in <span class="download">{{$subject->name}}</span>
                    </div>
                    
                    <h6 class="text-muted time">{{$matrial->created_at->diffForHumans()}}</h6>
                  </div>
                </div> 
                <div class="post-description"> 
                  
                  <div class="stats">
                    <a href="#" class="btn btn-default stat-item">
                      <i class="fa fa-thumbs-up icon"></i>2
                    </a>
                    <a href="#" class="btn btn-default stat-item">
                      <i class="fa fa-share icon"></i>12
                    </a>
                    <a href="{{$matrial->attachfile}}" class="btn btn-default stat-item">
                      <i class="fa fa-cloud-download"></i>
                    </a>
                    
                  </div>
                </div>
                
              </div> <!-- postwell -->
		        
		         @endforeach
		         <!-- end matrilas -->

		        @endforeach



              <!-- end of ask quetion post -->
              </div>
              </div>

