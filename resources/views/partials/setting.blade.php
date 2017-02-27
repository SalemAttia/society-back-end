<div class="row" style="padding: 60px; background: #fff;">
 <h2>update your data as student</h2>
 <div class="form" style="width: 400px; margin: auto;">
 	      <form method="POST" action="update/{{$user->id}}">
 	      <input type="hidden" name="_token" value="{{ csrf_token() }}">
             {{method_field('PATCH')}}    

                 
                  <div class="form-group" >
                    <label for="exampleInputEmail1">name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" value ="{{$user->name}}"aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <div class="form-group">
                    <label for="exampleInputEmail1">email</label>
                    <input type="email" name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>

                <button type="submit" class="btn btn-success btn-block">Update</button>
            </form>
 </div>
	
</div>