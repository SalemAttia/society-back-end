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
                <th>matrial body</th>
                <th>User_name</th>
                <th>attach file</th>
                <th>subject</th>
                <th>delete</th>
              </tr>
            </thead>

            <tbody>
            @foreach($matrials as $matrial)
              <tr class="odd gradeA">

               <td>st-{{$matrial->subject->stage->id}}</td>
               <td style="width: 40%;"> {{$matrial->name}}</td>
               <td class="center">{{$matrial->User->name}}</td>
               <td class="center">{{$matrial->attachfile}}</td>
                <td class="center">{{$matrial->subject->name}}</td>
               
               <td class="center"><a href="deletematrial/{{$matrial->id}}" class="btn btn-danger" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="delete this matrial"><em class="fa fa-trash"></em></a>
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