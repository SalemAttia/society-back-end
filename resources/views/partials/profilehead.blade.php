
         <!-- head of profile  -->
           <div class="row panel">
            <div class="col-md-4 bg_blur ">
              
            </div>
            <div class="col-md-8  col-xs-12">
             <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture hidden-xs" />
             <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail visible-xs picture_mob" />
             <div class="header">
              <h1>{{$user->name}}</h1>
              <h4>{{$user->student->stage_id}} nd @ {{$user->student->faculty->name}}</h4>
              <span></span>
              </div>
            </div>
          </div>   

          <div class="row nav">    
            <div class="col-md-4"></div>
            <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
            <div class="col-md-3 col-xs-4 "></div>
              <div href="#tab1" data-toggle="tab" class="col-md-3 col-xs-4 well" title="" ><i class="fa fa-weixin fa-lg" data-toggle="tooltip" data-placement="bottom" data-original-title="Question Answerd"></i> 16</div>
              <div href="#tab2" data-toggle="tab" class="col-md-3 col-xs-4 well" ><i class="fa fa-user fa-lg" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Follower"></i> 14</div>
              
              <div href="#tab4" data-toggle="tab" class="col-md-3 col-xs-4 well" ><i class="fa fa-globe fa-lg"  title="" data-toggle="tooltip" data-placement="bottom" data-original-title="About"></i> </div>


            </div>
          </div>


          <!-- end of head of profile -->
          <div class="tab-content">
