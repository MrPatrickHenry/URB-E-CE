@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-content">

        <div class="card-header">
          <h2>Upload</h2>
        </div>

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


        <form action="http://localhost:8085/asset/upload" method="post" enctype="multipart/form-data">
          {{ csrf_field() }}
          <div class="file-field input-field">
            <div class="row">
              <span>{{ __('Asset Type') }}</span>
              <select class="browser-default" name="file_type" id="file_type">
                <option value="" selected>Choose your Asset Format</option>
                <option value="360Video">USDZ</option>
                <option value="360Video">360 Video</option>
                <option value="fbxar">fbx AR</option>
                <option value="fbxvr">fbx VR</option>
              </select><br> 
            </div>
            <div class="row">

              <span>Object File</span>
              <input type="file"   class="browser-default"  name="file" accept=".usdz,.fbx,.mp4"/>
            </div>
            <div class="row">
              <span>Object Image</span>
              <input type="file"  class="browser-default"  name="render" accept="jpg"/>
            </div>
             <div class="row">
              <span>Keywords</span><br>
              <span>seperate with commas</span>

              <input type="text"  class="browser-default"  name="title" placeholder="Enter keywords descripe your asset" />
            </div>
          </div>
        </div>
        <div class="row">
          <input type="submit" value="Upload" class="waves-effect waves-light btn" />
        </div>
      </form>




    </div>
  </div>
</div>
</div>
</div>
@endsection
