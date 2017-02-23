<style type="text/css">
  .friendname {
  font-size: 14px !important;
}
</style>
 <!-- friends row -->
 <div class="row" style="padding: 15px;">
@foreach($followers as $follower)
  
  @foreach($follower->follower as $users)
  <div class="collg-3 col-md-3 col-sm-4 col-xs-6 BG">
   <a href="profile/{{$users->user->id}}">
    <div class="Rounded_Shape">
     <img src="images/friends/friend.png">
   </div>
   <p class="friendname">
      {{ $users->user->name}}
   </p>

   </a>
   <p class="Stage">
     <?php if ($users->user->student){
             echo $users->user->student->stage_id."stage";
      }else{
        echo "Doctor";
      }
       ?>
      
     <a href="{{$users->user->id}}" class="messagefriendicon"><img src="images/friends/ssmessage.png"></a>
   </p>

  </div>
    
  @endforeach

@endforeach


<!-- endof frind col -->
</div>


 <!-- friend col -->
  




 