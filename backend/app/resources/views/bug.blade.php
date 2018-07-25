@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card-content">

          <div class="card-header"><h3> <i class="large material-icons">bug_report</i> 
Bug</h3></div>

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


          <form action="order" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="file-field input-field">
              <span>What happened</span>
              <input type="text" name="issue" value="" placeholder="Describe what happaned">
            </div>
            <input type="submit" value="Submit" class="waves-effect waves-light btn" />
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
