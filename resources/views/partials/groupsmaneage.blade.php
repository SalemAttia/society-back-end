<div class="row">
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
                <div class="col-md-12">
                  <!--  Modals-->

                  <button class="btn btn-success pull-right" data-toggle="modal" data-target="#myModal">
                   Create Groups
                 </button>

                 <br>
                 <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                  <div class="modal-dialog">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        <h4 class="modal-title" id="myModalLabel">Create new Group</h4>
                      </div>
                      <div class="modal-body">
                       <form method="post" action="{{ url('/addnewgroup') }}">

                         {{ csrf_field() }}

                        <div class="form-group">
                          <label>Group name</label>
                          <input name="name" class="form-control" />
                          <p class="help-block">enter the name of the group</p>
                        </div>
                        <div class="form-group">
                          <label>Choose Groups subject</label>
                          <select name="subject_id" class="form-control">
                            @foreach ($subjects as $subject)
                            <option value="{{$subject->id}}">{{$subject->name}}</option>
                            
                            @endforeach
                          </select>
                        </div>
                        
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <button type="submit" class="btn btn-primary">Create</button>
                    </div>
                     </form>
                  </div>
                </div>
              </div>


              <!-- End Modals-->
              <br>
              <hr>



              <div class="col-lg-12">
                <div class="panel panel-default">
                  <div class="panel-heading">
                    Groups of Fci - minia
                  </div>
                  <!-- /.panel-heading -->
                  <div class="panel-body">
                    <div class="dataTable_wrapper">
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                            <th>Group Name</th>
                            <th>stage</th>
                            <th>subject</th>
                            <th>NO.files</th>
                            <th>NO.questions</th>
                            <th>edit-delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($groups as $group)
                          <tr class="odd gradeX">
                            <td>{{$group['name']}}</td>
                            <td>st-{{$group['subject']['stage']['id']}}</td>
                            <td>{{$group['subject']['name']}}</td>
                            <td class="center">{{$group['subject']['matrial']->count()}}</td>
                            <td class="center">{{$group['subject']['question']->count()}}</td>
                            <td class="center"><a class="btn btn-info"><em class="fa fa-edit"></em></a> - <a href="deletegroup/{{$group['id']}}" class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
                          </tr>
                          @endforeach
                         

               </tbody>
             </table>
           </div>

         </div>
         <!-- /.panel -->
       </div>
       <!-- /.col-lg-12 -->
     </div>
     </div>
   
