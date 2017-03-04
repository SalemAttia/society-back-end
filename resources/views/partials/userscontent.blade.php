 <div class="tab-content">
                <!-- students -->
                  <!-- doctors -->
     
    
                <div class="col-lg-12 tab-pane fade in active" id="tab1">
                  <div class="panel panel-default">
                    <div class="panel-heading">
                     Users of Fci - minia
                   </div>
                   <!-- /.panel-heading -->
                   <div class="panel-body">
                    <div class="dataTable_wrapper">
                      <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                          <tr>
                            <th>User Name</th>
                            <th>Stage</th>
                            <th>Email</th>
                           
                            <th>edit-delete</th>
                          </tr>
                        </thead>
                        <tbody>
                        @foreach($students as $student)
                          <tr class="odd gradeX">
                            <td>{{$student['name']}}</td>

                            <td>{{$student['student']['stage_id']}}</td>
                            <td class="center">{{$student['email']}}</td>
                           
                            <td class="center"><a class="btn btn-info"><em class="fa fa-edit"></em></a> - <a href="userdelet/{{$student['id']}}" class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
                          </tr>
                             @endforeach
                         
 
               </tbody>
             </table>
           </div>

         </div>
         <!-- /.panel -->
       </div>
       <!-- /.col-lg-12 -->

     </div>  <!-- end students -->
  


   
     <div class="col-lg-12 tab-pane fade in" id="tab2">
      <div class="panel panel-default">
        <div class="panel-heading">
         Doctor of Fci - minia
       </div>
       <!-- /.panel-heading -->
       <div class="panel-body">
        <div class="dataTable_wrapper">
          <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example2">
            <thead>
              <tr>
                <th>Doctor Name</th>
                <th>Email</th>
                <th>Subjects</th>
                <th>edit-delete</th>
              </tr>
            </thead>
            <tbody>
               @foreach($doctors as $doctor)
                          <tr class="odd gradeX">
                            <td>{{$doctor['name']}}</td>

                           
                            <td class="center">{{$doctor['email']}}</td>
                            <td class="center">
                            <ul>
                              @foreach($doctor['subject'] as $subject)
                              <li>{{$subject->name}}</li>
                              @endforeach
                            </ul>
                            </td>
                            <td class="center"><a class="btn btn-info"><em class="fa fa-edit"></em></a> - <a href="userdelet/{{$doctor['id']}}" class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
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


<!-- end doctores -->


<!-- admin -->

<div class="col-lg-12 tab-pane fade in" id="tab3">
  <div class="panel panel-default">
    <div class="panel-heading">
     Admin of Fci - minia
   </div>
   <!-- /.panel-heading -->
   <div class="panel-body">
    <div class="dataTable_wrapper">
    <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example3">
        <thead>
          <tr>
            <th>Admin Name</th>
            <th>Email</th>
            <th>edit-delete</th>
          </tr>
        </thead>
        <tbody>
           @foreach($admins as $admin)
                          <tr class="odd gradeX">
                            <td>{{$admin['name']}}</td>

                           
                            <td class="center">{{$admin['email']}}</td>
                           
                            <td class="center"><a class="btn btn-info"><em class="fa fa-edit"></em></a> - <a href="userdelet/{{$admin['id']}}" class="btn btn-danger"><em class="fa fa-trash"></em></a></td>
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

<!-- end admins -->
</div>

