@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-content">

          <div class="card-header"><h3>Upload</h3></div>

          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif

          @if (count($errors) > 0)
          <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
          </ul>
          @endif



          <form id="MachineLearn" action="https://ml.20-twenty.online/ml/ad" method="post" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class=file-field input-field">
          <div class="btn">
        <span>File</span>
           <input type="file" name="file" id="file" accept=".jpg,.png,.jpeg,.gif"/>
</div>
  </div>

<input type="submit" value="Upload" class="waves-effect waves-light btn" />
</form>


<div id="output">waiting for action</div>



<script>
$(document).ready(function(e) {
    
    $("form[ajax=true]").submit(function(e) {
        
        e.preventDefault();
        
        var form_data = $(this).serialize();
        var form_url = $(this).attr("action");
        var form_method = $(this).attr("method").toUpperCase();
        
        $.ajax({
            url: form_url, 
            type: form_method,      
            data: form_data,     
            cache: false,
            success: function(returnhtml){                          
                console.log("hello ");                  
            }           
        });    
        
    });
    
});
     
</script>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
