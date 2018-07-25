@extends('layouts.app')

@section('content')

@php
$accountType = Auth::user()->account_type;
@endphp

<div id="profile" ng-controller="profileViewController">
        <div class="col-lg-6 col-sm-6" >
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="@{{profileuser[0].user_profile_avatar}}" src="/profile/@{{profileuser[0].name}}">
        </div>
        <div class="card-info"> <span class="card-title">@{{profileuser[0].name}}</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg groupprofile" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="Details" class="btn btn-outline-primary" href="#tab1" data-toggle="tab"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Details


                </div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="History" class="btn btn-outline-primary" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">History</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="Email Notifications" class="btn btn-outline-primary" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Email Notifications</div>
            </button>
        </div>

        <div class="btn-group" role="group">
            <button type="button" id="Messages" class="btn btn-outline-primary" href="#tab4" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Messages</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="Devices" class="btn btn-outline-primary" href="#tab5" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Devices</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="QuickView" class="btn btn-outline-primary" href="#tab6" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">QuickView</div>
            </button>
        </div>
    </div>

        <div class="card">
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <div class="row">
          <div class="col-md-4"><strong>Signed Up:</strong> @{{profileuser[0].created_at}}</div>
<div class="col-md-4"> <strong>Last update:</strong></div>
<div class="col-md-4"> <strong>Username:</strong> @{{profileuser[0].email}}</div>
</div>

<div class="row">
          <div class="col-md-4"><strong>Country:</strong> </div>
<div class="col-md-4"> <strong>City:</strong></div>
<div class="col-md-4"> <strong>Last Login:</strong> @{{profileuser[0].updated_at}}</div>
</div>

<div class="row">
          <div class="col-md-4"><strong>Associated Company:</strong> </div>
<div class="col-md-4"> <strong>User Type:</strong> @{{profileuser[0].account_type}}</div>
<div class="col-md-4"> <strong>Nickname:</strong></div>
</div>
        </div>
        <div class="tab-pane" id="tab2">
          <h3>History</h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>Email Notifictions</h3>
        </div>
         <div class="tab-pane fade in" id="tab4">
          <h3>Messages</h3>
        </div>
         <div class="tab-pane fade in" id="tab5">
          <h3>Devices</h3>
        </div>
         <div class="tab-pane fade in" id="tab6">
          <h3>Quick Reporting</h3>
        </div>
      </div>
    </div>
    </div>
             <div class="row">
</div>


    
</div>


<script>
  $(document).ready(function() {
$(".btn-pref .btn").click(function () {
    $(".btn-pref .btn").removeClass("btn-primary").addClass("btn-default");
    // $(".tab").addClass("active"); // instead of this do the below 
    $(this).removeClass("btn-default").addClass("btn-primary");   
});
});
</script>
@endsection
