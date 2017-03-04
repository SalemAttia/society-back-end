





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
                        <form id="uploadnews" enctype="multipart/form-data" method="post" action="{{ url('/uploadnews') }}" style="box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 3px 3px;padding-bottom: 10px;">
                         {{ csrf_field() }}
                          <textarea name="body" placeholder="add some description or write news you have" ></textarea>
                          <ul>
                            <li>
                             <select name= "stage_id" class="form-control filedselect" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="select filed" >
                              @foreach($stages as $stage)
                              <option value="{{$stage->id}}">{{$stage->name}}</option>
                              @endforeach

                            </select>
                          </li>
                          <li>
                           <label class="btn"  style="margin-top: 9px;"><i class="sattach"></i>attachment <input name ="attachfile" type="file" style="display:none;"></label>
                          </li>

                        </ul>
                        <button onclick="event.preventDefault(); document.getElementById('uploadnews').submit();" class="btn btn-success green"><i class="fa fa-share"></i> Post</button>
                      </form>
                    </div><!-- Status Upload  -->
                  </div><!-- Widget Area -->
                </div>
              </div>