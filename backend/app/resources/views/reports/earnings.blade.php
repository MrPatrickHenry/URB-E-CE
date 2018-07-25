<div class="row " data-name="today" >
              

               <div class="col-lg-4 col-xs-6 " >
              <!-- small box -->
              <div class="small-box bg-gray">
                <div class="inner" ng-repeat="x in earnings">
                  <h3><sup style="font-size: 20px">$</sup>@{{x.DownloadsTotal}}</h3>
                  <p>Total Earning Today</p>
                  <sub> Last updated {{ date('Y-m-d H:i:s') }}</sub>
 <div class="icon">
                  <i class="fas fa-money-bill-wave"></i>
                </div>
                </div>
                
               
               
              </div>
            </div><!-- ./col -->   


            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner" ng-repeat="x in earnings">
                  <h3><sup style="font-size: 20px"></sup>@{{x.TotalViews}}</h3>
                  <p>Total Views Today</p>
                  <sub> Last updated {{ date('Y-m-d H:i:s') }}</sub>

                </div>
                
                <div class="icon">
                  <i class="fas fa-eye"></i>
                </div>
               
              </div>
            </div><!-- ./col -->




            <div class="col-lg-4 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner" ng-repeat="x in earnings">
                  <h3><sup style="font-size: 20px"></sup>@{{x.engagementTotal}}</h3>
                  <p>Total Engagment Today</p>
                  <sub> Last updated {{ date('Y-m-d H:i:s') }}</sub>

                </div>
                
                <div class="icon">
                  <i class="fas fa-hand-point-up"></i>
                </div>
               
              </div>
            </div><!-- ./col -->
        
          </div>