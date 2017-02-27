 <!--  group head -->
 @foreach($group as $group)
 <div class="card hovercard">
  <div class="card-background">
    <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">

  </div>
  <div class="useravatar">
    <img alt="" src="http://lorempixel.com/100/100/people/9/">
  </div>
  <div class="card-info"> <span class="card-title">{{$group->subject->name}}</span>

  </div>
</div>
<!-- end of group head -->
<!-- group contant -->
<div class="row" style="padding: 19px;
    margin-top: -22px;">
  <div class="col-sm-3 col-md-3"> <!--group info -->
    <div class="panel-group" id="accordion">
      <div class="panel panel-default">
        <div class="panel-heading">
          <h4 class="panel-title">
            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne"><span class="glyphicon glyphicon-folder-close">
            </span>Content</a>
          </h4>
        </div>
        <div id="collapseOne" class="panel-collapse collapse in">
          <ul class="list-group">
            <li class="list-group-item"><span class="glyphicon glyphicon-question-sign"></span><a href="">Questions</a><span class="badge">42</span></li>

            <li class="list-group-item"><span class="glyphicon glyphicon-flash text-success"></span><a href="#">News</a><span class="badge">42</span></li>

            <li class="list-group-item"><span class="glyphicon glyphicon-file text-info"></span><a href="#">Files</a><span class="badge">42</span></li>

            <li class="list-group-item"> <span class="glyphicon glyphicon-comment text-success"></span><a href="">Comments</a><span class="badge">42</span></li>

          </ul>
        </div>
      </div>


    </div>
  </div> <!-- end of group info -->
  <div class="col-sm-9 col-md-9">  <!-- contant of group -->

    <div class="row">
     <!-- ask Question in the group -->
     <div class="widget-area no-padding blank">
      <div class="status-upload">
        <form id="askformingroup" method="post" action="{{ url('/ask') }}"  method="post" style="box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 3px 3px;padding-bottom: 10px;">
         {{ csrf_field() }}
          <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
           <textarea name="body" placeholder="What is your Question?" ></textarea>
          <input type="hidden" name="subject_id" value="{{$group->subject->id}}">
          <ul>


          </ul>
           <button onclick="event.preventDefault(); document.getElementById('askformingroup').submit();" class="btn btn-success green"><i class="fa fa-share"></i> Ask</button>

        </form>
      </div><!-- Status Upload  -->
    </div><!-- Widget Area -->

  </div>
  @endforeach




  <!-- end of ask question filed in the group -->
</div>   <!-- contant of group -->


            </div>   <!-- end group contant -->