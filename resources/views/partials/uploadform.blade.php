





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
                <!-- update status and posts contant -->
                <div class="col-md-8 col-md-offset-2">
                <h3 class="centerhead"> Add new lectures or upload files or upload news</h3>
                  <div class="row">
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
                        <button onclick="event.preventDefault(); document.getElementById('uploadform').submit();" class="btn btn-success green"><i class="fa fa-share"></i> Post</button>
                      </form>
                    </div><!-- Status Upload  -->
                  </div><!-- Widget Area -->
                </div>
              </div>