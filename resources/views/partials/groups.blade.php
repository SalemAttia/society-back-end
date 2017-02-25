  <!-- group row -->
  <div class="row group-maincontent">
   <h2 class="group-head"><i class="groupiconh"></i>  Your Groups</h2>
   <hr>
   <!-- gropu col -->
  @foreach($subjects as $subject)
   <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 group">
     <a href="group/{{$subject->group->id}}">
      <div class="">
       <img src="images/groups/grouplogo.png">
       <i class="iconslog"></i>
     </div>
     <p class="createdata">{{$subject->group->created_at->diffForHumans()}} </p>

     <h3 class="groupname">{{$subject->group->name}}</h3>
     <p class="descraption">
       find all matrila and Question in  {{$subject->name}}
     </p>

     <hr style="margin-bottom: 12px;">
     <p class="numberpeopel"><i class="groupf"></i> 110 <span class="trem">1 st Term</span></p>
     <br>
   </a>


 </div>
 <!-- endof group col -->
 @endforeach
</div>