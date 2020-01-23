@extends('layouts.app')

@section('content')
    
    <div class="container-fluid" >
    <div class="row col-sm-4">
        <form action="{{url('/update')}}/{{$data->id}}" method="post">
            {{csrf_field()}}
          <div class="form-group">
             <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{$data->name}}">
          </div> 
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email" value="{{$data->email}}">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password" value="{{$data->password}}">
          </div> 
          <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control" rows="5" id="address" name="address" value="{{$data->address}}">{{ $data->address}}</textarea>
        </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        
    </div>        
    </div>
<script type="text/javascript">
  
</script>
    @endsection
