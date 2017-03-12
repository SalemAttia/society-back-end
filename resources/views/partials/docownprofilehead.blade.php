
         <!-- head of profile  -->
           <div class="row panel">
            <div class="col-md-4 bg_blur">
            
               
            </div>
             <div class="col-md-8  col-xs-12">
             <div class="col-md-4 col-sm-6 col-xs-12">
               @if($user[0]->avatar)

               <img class="img-thumbnail picture" src="{{asset($user[0]->avatar)}}">
               @else
                <img src="http://lorempixel.com/output/people-q-c-100-100-1.jpg" class="img-thumbnail picture" />
              @endif
            </div>
             <div class="col-md-4 col-sm-6 col-xs-12 header">
              <h1>Dr/{{$user[0]->name}}</h1>
              <h4> Faculty @ {{$user[0]->doctor->faculty->name}}</h4>
              <span></span>
              </div>
            </div>
          </div>   

          <div class="row nav">    
            <div class="col-md-4"></div>
             <div class="col-md-8 col-xs-12" style="margin: 0px;padding: 0px;">
              <div href="#tab1" data-toggle="tab" class="col-md-3 col-xs-4 well" title="" ><i class="fa fa-weixin fa-lg" data-toggle="tooltip" data-placement="bottom" data-original-title="Question Answerd"></i> {{$numquestion}}</div>
              <div  href="#tab2" data-toggle="tab" class="col-md-3 col-xs-4 well"><i class="fa fa-file fa-lg"  title="" data-toggle="tooltip" data-placement="bottom" data-original-title="lectures uploaded"></i> {{$matrials->count()}}</div>
              <div href="#tab3" data-toggle="tab" class="col-md-3 col-xs-4 well" ><i class="fa fa-user fa-lg" title="" data-toggle="tooltip" data-placement="bottom" data-original-title="Follower"></i> {{$followme}}</div>
              
              <div href="#tab4" data-toggle="tab" class="col-md-3 col-xs-4 well" ><i class="fa fa-globe fa-lg"  title="" data-toggle="tooltip" data-placement="bottom" data-original-title="About"></i> </div>


            </div>
          </div>


          <!-- end of head of profile -->
          <div class="tab-content">
