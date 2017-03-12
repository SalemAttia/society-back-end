<div style="padding: 40px;">

<h4>see all Question asked for today</h4>

<!-- notification -->

@foreach($questions as $question)

<a href="question/{{$question->id}}">
  <div class="row panel panel-white post panel-shadow"> <!-- postwell -->
    <div class="post-heading">
      <div class="col-md-1 pull-left image">
         @if($question->User->avatar)
                   <img src="{{asset($question->User->avatar)}}" class="img-circle avatar" alt="user profile image">
                   @else
                    <img src="http://bootdey.com/img/Content/user_1.jpg" class="img-circle avatar" alt="user profile image">
                    @endif
      </div>
      <div class="col-md-11 pull-left meta">
        <div class="title h5">
          <a href="#"><b>{{$question->User->name}}</b></a>
          Ask Question in <span class="quetion">{{$question->subject->name}}</span>
        </div>
        <h6 class="text-muted time">{{$question->created_at->diffForHumans()}}</h6>
        <p>{{$question->body}}</p>
        <a href="question/{{$question->id}}" class="btn btn-info pull-right">see answers</a>
        <br>
        <br>
      </div>
    </div> 
  </div>
  

</a>
<div class="clearfix"></div>
@endforeach

</div>