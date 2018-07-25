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


          <form action="http://ml.20-twenty.online/asset/upload/ssg" method="POST" enctype="multipart/form-data">
    {{ csrf_field() }}
        <div class="file-field input-field">
          <div class="btn">
        <span>File</span>
           <input type="file" name="file" accept=".jpg,.png,.jpeg,.gif"/>
</div>
  </div>
<input type="submit" value="Upload" class="waves-effect waves-light btn" />
</form>




        </div>
      </div>
    </div>
  </div>
</div>
@endsection
