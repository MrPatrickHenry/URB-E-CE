@extends('layouts.app')

@section('content')
    <div class="" ng-cloak ng-controller="reportingController">


<div class="col-lg-6 col-sm-6" >
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="@{{profileuser[0].user_profile_avatar}}" src="/profile/@{{profileuser[0].business_logo}}">
        </div>
        <div class="card-info"> <span class="card-title">Reporting & Analytics</span>

        </div>
    </div>





        <div class="col-lg-12">
            <div class="card">
        

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif


            <div class="container-fluid">

 <div>
         <!--  <div class="col-lg-12 ">
            <div class="nav-tabs-custom">
                <ul class="nav nav-tabs pull-right" style="display: none">
                  <li><a href="#yest" data-toggle="tab">Yesterday</a></li>
                  <li  class="active"><a href="#toda" data-toggle="tab">Today</a></li>
                </ul>
                <div class="tab-content">
                  <div class="tab-pane active" id="today">
                     todays -->
                     @include('reports.earnings')
                     @include('reports.views')
                     @include('reports.geographic')
                  </div>
              
             <!--    </div>
                 .tab-content 
            </div>
          </div> 
        </div> -->

 <div class="row">
    <div class="col-md-6">
    <h2>Income Performance Chart (Week)</h2>
    <h4>Total Income: $2000</h4>
    <div class="chart tab-pane" id="revenue-chart" style="position: relative; height: 300px;"></div>
    </div>
    <div class="col-md-6">
    <h2>View Chart (Week)</h2>
    <h4>Total Views: 4000</h4>
        <div class="chart tab-pane" id="view-chart" style="position: relative; height: 300px;"></div>   </div>
</div>

<div class="row">
    <div class="col-md-12">
    <h2>RPM Performance Chart (Week)</h2>

                          <div class="chart tab-pane" id="rpm-chart" style="position: relative; height: 300px;"></div>
    </div>
</div>
@php
        $accountType = Auth::user()->account_type;
                $prelaunch = Auth::user()->active;

        @endphp
            @if ($accountType === 'brand')
@include('reports.advertiserfocus')
@endif

                
                    
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>



                </div>
            </div>
        </div><div style="clear: both"></div>

@endsection
