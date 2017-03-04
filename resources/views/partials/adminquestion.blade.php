  <div class="row">




                <div class="col-lg-12">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                     Question of Fci - minia
                   </div>
                   <!-- /.panel-heading -->
                   <div class="panel-body">
                    <div class="dataTable_wrapper">
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                          
                            <th>stage</th>
                            <th>Question body</th>
                            <th>User_name</th>
                            <th>NO.answers</th>
                            <th>edit-delete</th>
                          </tr>
                        </thead>

                        <tbody>
                        @foreach($questions as $question)
                          <tr class="odd gradeA">
                          
                           <td>st-{{$question->subject->stage->id}}</td>
                           <td style="width: 40%;"> {{$question->body}}</td>
                           <td class="center">{{$question->User->name}}</td>
                           <td class="center">{{$question->answer->count()}}</td>
                           <td class="center"><a href="deletequestion/{{$question->id}}" class="btn btn-danger" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="delete this Question"><em class="fa fa-trash"></em></a>
                          </td>
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