 <form id="nns" enctype="multipart/form-data" method="post" action="{{ url('/uploaduserphoto') }}" style="box-shadow: rgba(0, 0, 0, 0.1) 3px 3px 3px 3px;padding-bottom: 10px;">

                        <!-- update status and posts contant -->
             
                         {{ csrf_field() }}
                          <textarea name="name" placeholder="add some description or write news you have" ></textarea>
                          <ul>
                            <li>
                             <select name= "subject_id" class="form-control filedselect" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="select filed" >
                             <option value="1">1</option>
                             <option value="2">2</option>
                            </select>
                          </li>
                          <li>
                           <label class="btn"  style="margin-top: 9px;"><i class="sattach"></i>attachment <input name ="attachfile" type="file" style="display:none;"></label>
                          </li>

                        </ul>
                        <button onclick="event.preventDefault(); document.getElementById('nns').submit();" class="btn btn-success green"><i class="fa fa-share"></i> Post</button>
                      </form>
                    </div><!-- Status Upload  -->
                  </div><!-- Widget Area -->
                </div>
              </div>