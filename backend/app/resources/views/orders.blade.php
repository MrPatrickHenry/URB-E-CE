@extends('layouts.app')

@section('content')

<div id="orders" ng-controller="ViewordersControler">
        <div class="col-lg-6 col-sm-6" >
    <div class="card hovercard">
        <div class="card-background">
            <img class="card-bkimg" alt="" src="http://lorempixel.com/100/100/people/9/">
            <!-- http://lorempixel.com/850/280/people/9/ -->
        </div>
        <div class="useravatar">
            <img alt="@{{ordersView[0].user_profile_avatar}}" src="/profile/@{{ordersView[0].business_logo}}">
        </div>
        <div class="card-info"> <span class="card-title">Insertion Orders</span>

        </div>
    </div>
    <div class="btn-pref btn-group btn-group-justified btn-group-lg groupprofile" role="group" aria-label="...">
        <div class="btn-group" role="group">
            <button type="button" id="Details" class="btn btn-outline-primary" href="#modalOrdersInsert" data-toggle="modal"><span class="glyphicon glyphicon-star" aria-hidden="true"></span>
                <div class="hidden-xs">+ Order
                </div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="History" class="btn btn-outline-primary" href="/reporting" data-toggle="tab"><span class="glyphicon glyphicon-heart" aria-hidden="true"></span>
                <div class="hidden-xs">Reporting</div>
            </button>
        </div>
        <div class="btn-group" role="group">
            <button type="button" id="Email Notifications" class="btn btn-outline-primary" href="/statements" data-toggle="tab"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                <div class="hidden-xs">Statements</div>
            </button>
        </div>

        
    </div>
<table id="geoTodaydata" style="table-layout:fixed;width: 100%;" data-pagination="true" data-toggle="table" class="table table-striped table-responsive col-lg-18" data-url="/6/orders/view" data-cache="false">
        <thead>
          <tr>
            <th data-field="id" data-sortable="true" >id</th>
            <th data-field="ad_start_date"  data-sortable="true">ad start date</th>
            <th data-field="ad_end_date"  data-sortable="true">ad end date</th>
                    <th data-field="ad_format">ad format</th>
                    <th data-field="ad_duration"  data-sortable="true">ad duration</th>
                    <th data-field="ad_offer_payout">ad offer payout</th>
                    <th data-field="total_budget">total budget</th>
                    <th data-field="bid_type"  data-sortable="true">bid type</th>
                    <th data-field="paid"  data-sortable="true">paid</th>
          </tr>
        </thead>
      </table>





        </div>
      </div>
    </div>
  </div>
</div>
@endsection
