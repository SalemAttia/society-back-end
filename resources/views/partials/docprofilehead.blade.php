
         <!-- head of profile  -->
           <div class="row panel">
            <div class="col-md-4 bg_blur">
            
                <a href="follow/{{$user[0]->name}}"" class="follow_btn hidden-xs">Follow</a>
            </div>
            <div class="col-md-8  col-xs-12">
             <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture hidden-xs" />
             <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail visible-xs picture_mob" />
             <div class="header">
              <h1>Dr/{{$user[0]->name}}</h1>
              <h4> Faculty @ {{$user[0]->doctor->faculty->name}}</h4>
              <span></span>
              </div>
            </div>
          </div>   

          <div class="row nav">    
            <div class="col-md-4"></div>
             <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
              <div href="#tab1" data-toggle="tab" class="col-md-3 col-xs-4 well" title="" ><i class="fa fa-weixin fa-lg" data-toggle="tooltip" data-placement="bottom" data-original-title="Question Answerd"></i> 16</div>
              <div href="#tab2" data-toggle="tab" class="col-md-3 col-xs-4 well" ><i class="fa fa-user fa-lg" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Follower"></i> 14</div>
              <div  href="#tab3" data-toggle="tab" class="col-md-3 col-xs-4 well"><i class="fa fa-file fa-lg"  title="" data-toggle="tooltip" data-placement="bottom" data-original-title="lectures uploaded"></i> 26</div>
              <div href="#tab4" data-toggle="tab" class="col-md-3 col-xs-4 well" ><i class="fa fa-globe fa-lg"  title="" data-toggle="tooltip" data-placement="bottom" data-original-title="About"></i> </div>


            </div>
          </div>


          <!-- end of head of profile -->
          <div class="tab-content">
