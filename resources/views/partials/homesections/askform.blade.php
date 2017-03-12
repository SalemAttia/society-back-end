
            @if(count($errors)>0)
             <div class="row" style="padding: 20px;">
                <div class="alert alert-danger">
                  <ul>
                  @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                  </ul>
                  
                </div>
             </div>
             @endif
              <div class="row homesidecontant" style="padding-left: 30px;">  <!-- row -->
                <!-- saidbar content -->
                <div class="well col-md-4">
                 <?php echo date('m/d/Y'); ?>
                 <hr>
                 <ul class="nav nav-pills nav-stacked">
                  <li role="presentation" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Question asked this day"><a href="{{url('questions')}}"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Questions  {{$numquestion}} </a></li>
                  <li role="presentation"  data-toggle="tooltip" data-placement="bottom" data-original-title="File uploads this day"><a href="{{url('upload')}}"><span class="glyphicon glyphicon-open" aria-hidden="true"></span> Uploads  {{$nummatrial}}</a>   </li>
                  <li role="presentation"  data-toggle="tooltip" data-placement="bottom" data-original-title="all actions in your Groups"><a href="{{url('groups')}}"><span class="fa fa-users" aria-hidden="true"></span> Groups    {{$subjects->count()}}</a></li>

                </ul>
              </div>
              <!-- /saidbar content -->

              <!-- update status and posts contant -->
              <div class="col-md-7">
                <div class="row">
                  <div class="widget-area no-padding blank">
                    <div class="status-upload">
                      <form id="askform" method="post" action="{{ url('/ask') }}" style="box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 3px 3px;padding-bottom: 10px;">

                         {{ csrf_field() }}
                         <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
                        <textarea name="body" placeholder="What is your Question?" ></textarea>
                        <ul>
                          <li>
                           <select name="subject_id" class="form-control filedselect" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="select filed" >
                           @foreach ($subjects as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                            
                            @endforeach

                          </select>
                        </li>


                      </ul>
                      <button onclick="event.preventDefault(); document.getElementById('askform').submit();" class="btn btn-success green"><i class="fa fa-share"></i> Ask</button>

                    </form>
                    
                  </div><!-- Status Upload  -->
                </div><!-- Widget Area -->
              </div>
            </div>
            <!-- update status and posts contant -->

          </div> <!-- row -->