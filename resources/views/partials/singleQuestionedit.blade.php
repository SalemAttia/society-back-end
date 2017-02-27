    @foreach ($question as $question)


     <form method="POST" action="{{route('updatethisQuestion',$question->id)}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
             {{method_field('PATCH')}} 

   <div style="padding: 40px;">
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
                 <div class="form-group">
                    <label for="exampleTextarea">body</label>
                    <textarea name="body" class="form-control" id="exampleTextarea" rows="4">
                    {{$question->body}}
                    </textarea>
                </div>
                  
                  <button type="submit" class="btn btn-success btn-lg">Update</button>
                  
                </div>
               
              </div> <!-- postwell -->
        </div>
        </form>

             @endforeach


                   