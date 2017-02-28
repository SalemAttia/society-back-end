 <!-- add new matrials -->
           <div class="col-md-12">


            <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">
             ADD New matrial
           </button>
           <br>
           <hr>
           <br>
           <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="myModalLabel">Create new Subject</h4>
                </div>
                <div class="modal-body">

                   <div class="widget-area no-padding blank">
                      <div class="status-upload">
                        <form id="uploadform" enctype="multipart/form-data" method="post" action="{{ url('/uploadlecture') }}" style="box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 3px 3px;padding-bottom: 10px;">
                         {{ csrf_field() }}
                          <textarea name="name" placeholder="add some description or write news you have" ></textarea>
                          <ul>
                            <li>
                             <select name= "subject_id" class="form-control filedselect" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="select filed" >
                              @foreach($subjects as $subjec)
                              <option value="{{$subjec->subject->id}}">{{$subjec->subject->name}}</option>
                              @endforeach

                            </select>
                          </li>
                          <li>
                           <label class="btn"  style="margin-top: 9px;"><i class="sattach"></i>attachment <input name ="attachfile" type="file" style="display:none;"></label>
                          </li>

                        </ul>
                       
                      </form>
                    </div><!-- Status Upload  -->
                  </div><!-- Widget Area -->
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                 <button onclick="event.preventDefault(); document.getElementById('uploadform').submit();" class="btn btn-success green"><i class="fa fa-share"></i> Post</button>
                  </form>
                </div>
              </form>
            </div>
          </div>
        </div>


        <!-- End Modals-->
        
      </div>
      <!-- end of add new matrials -->
