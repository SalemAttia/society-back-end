  <div class="row"> <!-- postsrow -->
     <br>
     <br>

            <div class="col-sm-10 col-sm-offset-1">
  <!-- matrials -->

		         @foreach ($uploads as $matrial)


		         <div class="panel panel-white post panel-shadow"> <!-- postwell -->
                <div class="post-heading">
                  <div class="pull-left image">
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                  </div>
                  <div class="pull-left meta">
                  <div class="title h5">
                      <a href="#"><b>Dr/{{$matrial->User->name}}</b></a>
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
		        
		         @endforeach
		         <!-- end matrilas -->

            </div>
            </div>