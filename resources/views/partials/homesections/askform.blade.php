
              <div class="row" style="padding-left: 30px;">  <!-- row -->
                <!-- saidbar content -->
                <div class="well col-md-4">
                 7 Feb 2017 
                 <hr>
                 <ul class="nav nav-pills nav-stacked">
                  <li role="presentation" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Question asked this day"><a href="#"><span class="glyphicon glyphicon-question-sign" aria-hidden="true"></span> Questions </a></li>
                  <li role="presentation"  data-toggle="tooltip" data-placement="bottom" data-original-title="File uploads this day"><a href="#"><span class="glyphicon glyphicon-open" aria-hidden="true"></span> Uploads</a></li>
                  <li role="presentation"  data-toggle="tooltip" data-placement="bottom" data-original-title="all actions in your Groups"><a href="#"><span class="fa fa-users" aria-hidden="true"></span> Groups</a></li>

                </ul>
              </div>
              <!-- /saidbar content -->

              <!-- update status and posts contant -->
              <div class="col-md-7">
                <div class="row">
                  <div class="widget-area no-padding blank">
                    <div class="status-upload">
                      <form style="box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 3px 3px;padding-bottom: 10px;">
                        <textarea placeholder="What is your Question?" ></textarea>
                        <ul>
                          <li>
                           <select class="form-control filedselect" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="select filed" >
                           @foreach ($subjects as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                            
                            @endforeach

                          </select>
                        </li>


                      </ul>
                      <button type="submit" class="btn btn-success green"><i class="fa fa-share"></i> Ask</button>
                    </form>
                  </div><!-- Status Upload  -->
                </div><!-- Widget Area -->
              </div>
            </div>
            <!-- update status and posts contant -->

          </div> <!-- row -->