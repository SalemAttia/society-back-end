   

         <div class="col-lg-12">
        <div class="panel panel-default">
          <div class="panel-heading">
           Matrials of Fci - minia
         </div>
         <!-- /.panel-heading -->
         <div class="panel-body">
          <div class="dataTable_wrapper">
            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
              <thead>
                <tr>
                  <th>Name</th>
                  <th>stage</th>
                  <th>Matrials body</th>
                 
                  <th>Uploaded file</th>
                  <th>edit-delete</th>
                </tr>
              </thead>

              <tbody>
              @foreach ($matrials as $matrial)
                <tr class="odd gradeA">
                 <td>{{$matrial->subject->name}}</td>
                 <td>st{{$matrial->subject->stage->id}}</td>
                 
                 <td>{{$matrial->name}}</td>
                 
                 <td class="center"><a href="download/{{$matrial->attachfile}}" class="btn btn-default stat-item">
                      <i class="fa fa-cloud-download"></i>
                    </a></td>
                 <td class="center"><a href="deletematrial/{{$matrial->id}}" class="btn btn-danger" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="delete this Question"><em class="fa fa-trash"></em></a>
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