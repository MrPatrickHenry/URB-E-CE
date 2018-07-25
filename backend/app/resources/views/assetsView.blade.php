@extends('layouts.app')

@section('content')


<div id="profile" ng-controller="assetViewController">
        <div class="col-lg-6 col-sm-6" >
    <div class="card hovercard">

 <div class="row">
        <div class="card-info">
         <span class="card-title">{{ Auth::user()->Business_title }} Assets on platform</span>
</div>
        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg groupprofile" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="Details" class="btn btn-outline-primary" href="#UploadAssetDetailsModal" data-toggle="modal"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">Asset upload
                </div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="History" class="btn btn-outline-primary" href="#tab2" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Reporting</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="Email Notifications" class="btn btn-outline-primary" href="#tab3" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Statements</div>
            </button>
        </div>

        
    </div>

        <div class="card">
      <div class="tab-content">
        <div class="tab-pane active" id="tab1">
          <div class="row">
          <div class="col-sm-4"  ng-repeat="x in assets">
            <a rel="ar" href="https://resources.20-twenty.online/files/@{{ x.assetname }}">
            <img src="https://resources.20-twenty.online/files/@{{ x.render}}" class="objrender waves-effect">
        </a>
      <div class="caption">
        <p><strong>Title</strong>@{{ x.title}}<br>
        <strong>Desc.</strong>@{{ x.description}}<br>
        <strong>Size:</strong> @{{ x.size}} MB</br>
        <strong>Downloads:</strong> @{{ x.downloaded }}</br>

            <a href="https://resources.20-twenty.online/files/@{{ x.assetname }}" class="btn btn-primary btn-grad" style=" float:left;">View</a>
            <a href="https://resources.20-twenty.online/files/@{{ x.assetname }}" class="btn btn-secondary btn-gradCancel" style="width:50%; float:left;">Remove</a>
            <a href="https://resources.20-twenty.online/files/@{{ x.assetname }}" class="btn btn-secondary btn-gradCancel" style="width:50%; float:left;">Pause</a>

      </div>


          </div>

</div>

        </div>
        <div class="tab-pane" id="tab2">
          <h3>360</h3>
        </div>
        <div class="tab-pane fade in" id="tab3">
          <h3>VR</h3>
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

