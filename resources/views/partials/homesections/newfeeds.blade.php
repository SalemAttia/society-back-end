  
  <div class="row"> <!-- postsrow -->

            <div class="col-sm-10 col-sm-offset-1">
            
		        @foreach ($subjects as $subject)
		          @foreach ($subject->question as $question)
		         <p style="background: red;"> 
		         {{$question->User->name}},,{{$question->created_at->diffForHumans()}}
		         <br>
		         {{$question->body}}
		         <br>
		           @foreach ($question->answer as $ans)
		            <h5 style="background: blue;">{{$ans->User->name}} , {{$ans->User->rol}},{{$ans->created_at->diffForHumans()}}</h5>
		            
		           <p style="background: green;">{{$ans->body}}</p> 
		           <br>
		           @endforeach
		         </p>
		         <br>
		         @endforeach
                <!-- matrials -->
		         @foreach ($subject->matrial as $matrial)
		         <p style="background: yellow;"> 
		         {{$matrial->name}},{{$matrial->User->name}},{{$matrial->created_at->diffForHumans()}}
		         <br>
		         {{$matrial->attachfile}}
		         <br>
		          
		         </p>
		         <br>
		         @endforeach
		         <!-- end matrilas -->

		        @endforeach



              <!-- end of ask quetion post -->
              </div>
              </div>

                            
