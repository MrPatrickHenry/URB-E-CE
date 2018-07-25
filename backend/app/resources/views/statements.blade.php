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
        <div class="card-info"> <span class="card-title">Statements</span>
        </div>
    </div>
<div id="statements" ng-controller="statementController">
    <div class="row">

                
                    <div class="col-md-4">
                        <div class="card bg-teal">
                            <div class="card-body">
                                Total Due this Month
                                <h1>$88888</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-teal">
                            <div class="card-body">
                                Total view
                                <h1>88888</h1>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="card bg-teal">
                            <div class="card-body">
                                Best medium
                                <h1>AR</h1>
                            </div>
                        </div>
                    </div>
<!-- 
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <h1>Outstanding</h1>
                                <h3>$8888</h3>
                            </div>
                        </div>
                    </div>
                </div>
            -->


    </div>
                <div class="col-md-12" style="margin-top:5%">
                <div>
                    <div class="card-body">
                            <div class="chart tab-pane col-md-18"id="revenue-chart" style="position: relative; height: 300px;"></div>
                    </div>
                </div>

            </div>

            
    <div class="row">
                <table class="table table-striped table-responsive col-lg-18"  width="100%">

                    <th>Invoice Id</th>
                    <th>Invoice Type</th>
                    <th>Date Generated </th>
                    <th>Tax</th>
                    <th>Total</th>
                    <th>Currency</th>
                    <th>Status</th>
                    <th>Details</th>
                    <th>Payment</th>
                    <th>Download</th>

                    <tr ng-repeat="x in invoices">
                        <td>@{{ x.id }}</td>
                        <td>@{{ x.invoicable_type}}</td>
                        <td>@{{ x.created_at}}</td>
                        <td>@{{ x.tax }}</td>
                        <td>@{{ x.total }}</td>
                        <td>@{{ x.currency }}</td>
                        <td>@{{ x.status }}</td>

                        <td>
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-id="@{{ x.brandID }}" data-target="#statementDetailsModal">
                                Details
                            </button>
                        </td>
                        <td>
                            @php
$stripeID = Auth::user()->stripe_id;
@endphp 

@if ($stripeID != NULL)
<form action="/charge" method="POST">
    {{ csrf_field() }}
    <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="{{ env('STRIPE_PUB_KEY') }}"
    data-amount="1999"
    data-name="Stripe Demo"
    data-description="Online course about integrating Stripe"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="usd">
</script>
</form>
@else
<form action="/newcharge" method="POST">
    {{ csrf_field() }}
    <script
    src="https://checkout.stripe.com/checkout.js" class="stripe-button"
    data-key="{{ env('STRIPE_PUB_KEY') }}"
    data-amount="1999"
    data-name="Stripe Demo"
    data-description="Online course about integrating Stripe"
    data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
    data-locale="auto"
    data-currency="usd">
</script>
</form>
@endif

                    </td>
                    <td>
                        pdf/csv/
                    </td>
                </tr>

            </table>

</div>

        </div>
    </div>
</div>
</div>
</div>
</div>



@endsection
