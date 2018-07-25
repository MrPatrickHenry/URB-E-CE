<div class="row" data-name="today" ng-controller="reportingControllerType">
            
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>@{{AR}}</h3>
                  <p>Total AR Views Today</p>
                                    <sub> Last updated {{ date('Y-m-d H:i:s') }}</sub>

                </div>
                <div class="icon">
                  <i class="fas fa-glasses"></i>
                </div>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>@{{VR}}</h3>
                  <p>Total VR Views Today</p>
                                    <sub> Last updated {{ date('Y-m-d H:i:s') }}</sub>

                </div>
                
                <div class="icon">
                  <i class="fas fa-glasses"></i>
                </div>
               
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3>@{{MR}}</h3>
                  <p>Total MR Views Today</p>
                                    <sub> Last updated {{ date('Y-m-d H:i:s') }}</sub>

                </div>
                
                <div class="icon">
                  <i class="fas fa-glasses"></i>
                </div>
               
              </div>

            </div><!-- ./col -->
             <div class="col-lg-3 col-xs-6">
              <div class="small-box bg-yellow">
                <div class="inner">
                  <h3>@{{video}}</h3>
                  <p>Total 360 Video Views Today</p>
                                    <sub> Last updated {{ date('Y-m-d H:i:s') }}</sub>

                </div>
                
                <div class="icon">
                  <i class="fas fa-video"></i>
                </div>
               
              </div>

            </div><!-- ./col -->  


            <div class="col-md-12 row">
              <div id="worldmap" style="height: 400px;width: 100%; "></div>

            </div>        
          </div>
