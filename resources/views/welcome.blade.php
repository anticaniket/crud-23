@extends('layouts.app')

@section('content')
    
    <div class="container-fluid" >
        <div class="row">
            <div class="success_msg">
                
            </div>
        </div>
    <div class="row col-sm-4">
        <form id="student_form">
        <!-- <form action="{{url('/save')}}" method="post"> -->
            {{csrf_field()}}
          <div class="form-group">
             <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
          </div> 
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd" name="password">
          </div> 
          <div class="form-group">
          <label for="address">Address:</label>
          <textarea class="form-control" rows="5" id="address" name="address"></textarea>
        </div>
          <button type="submit" class="btn btn-default">Submit</button>
        </form>
        
    </div>        
    </div>

    <script type="text/javascript">
        $(function() {
            $("#student_form").on("submit", function(e) {
                // alert('pok')
                e.preventDefault()
                $.ajax({
                    url: '/save',
                    method: 'POST',
                    data: new FormData(this),
                    headers:{
                       'X-CSRF-TOKEN': "{{ csrf_token() }}"
                     },   
                    processData: false,
                    contentType: false,
                    success: function(obj) {
                        console.log()
                        if(obj.status == "success") {
                            $(".success_msg").html("<li class='alert alert-success'>Submitted successfully!</li>")
                        }
                        $(".alert-danger").remove()
                        // alert('Submitted Successfully.')
                    },
                    error: function(obj) {
                        console.log(obj)
                        $(".alert-danger").remove()
                        $.each(obj.responseJSON.errors, function(key, val) {
                            // alert(val)
                            $(".errrors").append("<li class='alert alert-danger'>"+val+"</li>")
                            // console.log(val)
                        })
                        // alert("Server Error occured! PLease contact supprt team.")
                    }
                })
            })
        })
    </script>

    @endsection
