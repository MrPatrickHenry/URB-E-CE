<!DOCTYPE html>
<html lang="en">
  <!--================================================================================
  Item Name: Materialize - Material Design Admin Template
  Version: 4.0
  Author: PIXINVENT
  Author URL: https://themeforest.net/user/pixinvent/portfolio
  ================================================================================ -->
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="msapplication-tap-highlight" content="no">
    <meta name="description" content="Materialize is a Material Design Admin Template,It's modern, responsive and based on Material Design by Google. ">
    <meta name="keywords" content="Urb-e Community, Portal, Admin">
    <title>Urb-E Community app Backend</title>
    <!-- Favicons-->
    <link rel="icon" href="/images/favicon/favicon-32x32.png" sizes="32x32">
    <!-- Favicons-->
    <link rel="apple-touch-icon-precomposed" href="/images/favicon/apple-touch-icon-152x152.png">
    <!-- For iPhone -->
    <meta name="msapplication-TileColor" content="#00bcd4">
    <meta name="msapplication-TileImage" content="images/favicon/mstile-144x144.png">
    <!-- For Windows Phone -->
    <!-- CORE CSS-->
    <link href="/css/materialize.css" type="text/css" rel="stylesheet">
    <link href="/css/style.css" type="text/css" rel="stylesheet">
    <!-- Custome CSS-->
    <link href="/css/custom.css" type="text/css" rel="stylesheet">
    <!-- CSS style Horizontal Nav-->
    <link href="/css/style-horizontal.css" type="text/css" rel="stylesheet">
    <!-- INCLUDED PLUGIN CSS ON THIS PAGE -->
    <link href="/css/perfect-scrollbar.css" type="text/css" rel="stylesheet">
    <link href="/css/jquery-jvectormap.css" type="text/css" rel="stylesheet">
    <link href="/css/flag-icon.min.css" type="text/css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>

  </head>
  <body id="layouts-horizontal" ng-app="myApp" ng-controller="myCtrl">
    <!-- Start Page Loading -->
    <div id="loader-wrapper">
      <div id="loader"></div>
      <div class="loader-section section-left"></div>
      <div class="loader-section section-right"></div>
    </div>
    <!-- End Page Loading -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START HEADER -->
    <header id="header" class="page-topbar">
      <div class="navbar-fixed">
        <nav class="navbar-color gradient-45deg-light-blue-cyan">
          <div class="nav-wrapper">
            <ul class="left">
              <li>
                <h1 class="logo-wrapper">
                  <a href="index.html" class="brand-logo darken-1">
                    <span class="logo-text hide-on-med-and-down">Urb-E CX</span>
                  </a>
                </h1>
              </li>
            </ul>
           {{--  <div class="header-search-wrapper hide-on-med-and-down">
              <i class="material-icons">search</i>
              <input type="text" name="Search" class="header-search-input z-depth-2" placeholder="Explore Materialize" />
            </div> --}}
            {{-- <ul class="right hide-on-med-and-down">
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light translation-button" data-activates="translation-dropdown">
                  <span class="flag-icon flag-icon-gb"></span>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light toggle-fullscreen">
                  <i class="material-icons">settings_overscan</i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light notification-button" data-activates="notifications-dropdown">
                  <i class="material-icons">notifications_none
                    <small class="notification-badge orange accent-3">5</small>
                  </i>
                </a>
              </li>
              <li>
                <a href="javascript:void(0);" class="waves-effect waves-block waves-light profile-button" data-activates="profile-dropdown">
                  <span class="avatar-status avatar-online">
                    <img src="/images//avatar-7.png" alt="avatar">
                    <i></i>
                  </span>
                </a>
              </li>
              <li>
                <a href="#" data-activates="chat-out" class="waves-effect waves-block waves-light chat-collapse">
                  <i class="material-icons">format_indent_increase</i>
                </a>
              </li>
            </ul> --}}
            <!-- translation-button -->
           {{--  <ul id="translation-dropdown" class="dropdown-content">
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-gb"></i> English</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-fr"></i> French</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-cn"></i> Chinese</a>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-1">
                  <i class="flag-icon flag-icon-de"></i> German</a>
              </li>
            </ul>
            <!-- notifications-dropdown -->
            <ul id="notifications-dropdown" class="dropdown-content">
              <li>
                <h6>NOTIFICATIONS
                  <span class="new badge">5</span>
                </h6>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle cyan small">add_shopping_cart</span> A new order has been placed!</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">2 hours ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle red small">stars</span> Completed the task</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">3 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle teal small">settings</span> Settings updated</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">4 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle deep-orange small">today</span> Director meeting started</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">6 days ago</time>
              </li>
              <li>
                <a href="#!" class="grey-text text-darken-2">
                  <span class="material-icons icon-bg-circle amber small">trending_up</span> Generate monthly report</a>
                <time class="media-meta" datetime="2015-06-12T20:50:48+08:00">1 week ago</time>
              </li>
            </ul>
            <!-- profile-dropdown -->
            <ul id="profile-dropdown" class="dropdown-content">
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">face</i> Profile</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">settings</i> Settings</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">live_help</i> Help</a>
              </li>
              <li class="divider"></li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">lock_outline</i> Lock</a>
              </li>
              <li>
                <a href="#" class="grey-text text-darken-1">
                  <i class="material-icons">keyboard_tab</i> Logout</a>
              </li>
            </ul> --}}
          </div>
        </nav>
        <!-- HORIZONTL NAV START-->
        
        
      </div>
    </header>
    <!-- END HEADER -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START MAIN -->
    <div id="main">
      <!-- START WRAPPER -->
      <div class="wrapper">
        <!-- START LEFT SIDEBAR NAV-->
        
        <!-- END LEFT SIDEBAR NAV-->
        <!-- //////////////////////////////////////////////////////////////////////////// -->
        <!-- START CONTENT -->
        <section id="content">
          <!--start container-->
          <div class="container">
            <!--card stats start-->
            <div id="card-stats">
              <div class="row">
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content cyan white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">person_outline</i> New Clients</p>
                      <h4 class="card-stats-number">566</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 15%
                        <span class="cyan text text-lighten-5">from yesterday</span>
                      </p>
                    </div>
                    <div class="card-action cyan darken-1">
                      <div id="clients-bar" class="center-align"></div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content red accent-2 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">attach_money</i>Total rides</p>
                      <h4 class="card-stats-number">$8990.63</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 70%
                        <span class="red-text text-lighten-5">last month</span>
                      </p>
                    </div>
                    <div class="card-action red darken-1">
                      <div id="rides-compositebar" class="center-align"></div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content teal accent-4 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">trending_up</i> Today Miles</p>
                      <h4 class="card-stats-number">@{{myWelcome.distance}}</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_up</i> 80%
                        <span class="teal-text text-lighten-5">from yesterday</span>
                      </p>
                    </div>
                    <div class="card-action teal darken-1">
                      <div id="profit-tristate" class="center-align"></div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m6 l3">
                  <div class="card">
                    <div class="card-content deep-orange accent-2 white-text">
                      <p class="card-stats-title">
                        <i class="material-icons">content_copy</i> New Invoice</p>
                      <h4 class="card-stats-number">1806</h4>
                      <p class="card-stats-compare">
                        <i class="material-icons">keyboard_arrow_down</i> 3%
                        <span class="deep-orange-text text-lighten-5">from last month</span>
                      </p>
                    </div>
                    <div class="card-action  deep-orange darken-1">
                      <div id="invoice-line" class="center-align"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--card stats end-->
            <!--chart dashboard start-->
            <div id="chart-dashboard">
              <div class="row">
                <div class="col s12 m8 l8">
                  <div class="card">
                    <div class="card-move-up waves-effect waves-block waves-light">
                      <div class="move-up cyan darken-1">
                        <div>
                          <span class="chart-title white-text">Revenue</span>
                          <div class="chart-revenue cyan darken-2 white-text">
                            <p class="chart-revenue-total">$4,500.85</p>
                            <p class="chart-revenue-per">
                              <i class="material-icons">arrow_drop_up</i> 21.80 %</p>
                          </div>
                          <div class="switch chart-revenue-switch right">
                            <label class="cyan-text text-lighten-5">
                              Month
                              <input type="checkbox">
                              <span class="lever"></span> Year
                            </label>
                          </div>
                        </div>
                        <div class="trending-line-chart-wrapper">
                          <canvas id="trending-line-chart" height="70"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="card-content">
                      <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons activator">filter_list</i>
                      </a>
                      <div class="col s12 m3 l3">
                        <div id="doughnut-chart-wrapper">
                          <canvas id="doughnut-chart" height="200"></canvas>
                          <div class="doughnut-chart-status">4500
                            <p class="ultra-small center-align">Sold</p>
                          </div>
                        </div>
                      </div>
                      <div class="col s12 m2 l2">
                        <ul class="doughnut-chart-legend">
                          <li class="mobile ultra-small">
                            <span class="legend-color"></span>Mobile</li>
                          <li class="kitchen ultra-small">
                            <span class="legend-color"></span> Kitchen</li>
                          <li class="home ultra-small">
                            <span class="legend-color"></span> Home</li>
                        </ul>
                      </div>
                      <div class="col s12 m5 l6">
                        <div class="trending-bar-chart-wrapper">
                          <canvas id="trending-bar-chart" height="90"></canvas>
                        </div>
                      </div>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Revenue by Month
                        <i class="material-icons right">close</i>
                      </span>
                      <table class="responsive-table">
                        <thead>
                          <tr>
                            <th data-field="id">ID</th>
                            <th data-field="month">Month</th>
                            <th data-field="item-sold">Item Sold</th>
                            <th data-field="item-price">Item Price</th>
                            <th data-field="total-profit">Total Profit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>1</td>
                            <td>January</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>2</td>
                            <td>February</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>3</td>
                            <td>March</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>4</td>
                            <td>April</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>5</td>
                            <td>May</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>6</td>
                            <td>June</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>7</td>
                            <td>July</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>8</td>
                            <td>August</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>9</td>
                            <td>Septmber</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>10</td>
                            <td>Octomber</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>11</td>
                            <td>November</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                          <tr>
                            <td>12</td>
                            <td>December</td>
                            <td>122</td>
                            <td>100</td>
                            <td>$122,00.00</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4 l4">
                  <div class="card">
                    <div class="card-move-up teal accent-4 waves-effect waves-block waves-light">
                      <div class="move-up">
                        <p class="margin white-text">Browser Stats</p>
                        <canvas id="trending-radar-chart" height="114"></canvas>
                      </div>
                    </div>
                    <div class="card-content  teal">
                      <a class="btn-floating btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons activator">done</i>
                      </a>
                      <div class="line-chart-wrapper">
                        <p class="margin white-text">Revenue by country</p>
                        <canvas id="line-chart" height="114"></canvas>
                      </div>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Revenue by country
                        <i class="material-icons right">close</i>
                      </span>
                      <table class="responsive-table">
                        <thead>
                          <tr>
                            <th data-field="country-name">Country Name</th>
                            <th data-field="item-sold">Item Sold</th>
                            <th data-field="total-profit">Total Profit</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>USA</td>
                            <td>65</td>
                            <td>$452.55</td>
                          </tr>
                          <tr>
                            <td>UK</td>
                            <td>76</td>
                            <td>$452.55</td>
                          </tr>
                          <tr>
                            <td>Canada</td>
                            <td>65</td>
                            <td>$452.55</td>
                          </tr>
                          <tr>
                            <td>Brazil</td>
                            <td>76</td>
                            <td>$452.55</td>
                          </tr>
                          <tr>
                            <td>India</td>
                            <td>65</td>
                            <td>$452.55</td>
                          </tr>
                          <tr>
                            <td>France</td>
                            <td>76</td>
                            <td>$452.55</td>
                          </tr>
                          <tr>
                            <td>Austrelia</td>
                            <td>65</td>
                            <td>$452.55</td>
                          </tr>
                          <tr>
                            <td>Russia</td>
                            <td>76</td>
                            <td>$452.55</td>
                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--chart dashboard end-->
            <!--work collections start-->
            <div id="work-collections">
              <div class="row">
                <div class="col s12 m12 l6">
                  <ul id="projects-collection" class="collection z-depth-1">
                    <li class="collection-item avatar">
                      <i class="material-icons cyan circle">card_travel</i>
                      <h6 class="collection-header m-0">Projects</h6>
                      <p>Your Favorites</p>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s6">
                          <p class="collections-title">Web App</p>
                          <p class="collections-content">AEC Company</p>
                        </div>
                        <div class="col s3">
                          <span class="task-cat cyan">Development</span>
                        </div>
                        <div class="col s3">
                          <div id="project-line-1"></div>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s6">
                          <p class="collections-title">Mobile App for Social</p>
                          <p class="collections-content">iSocial App</p>
                        </div>
                        <div class="col s3">
                          <span class="task-cat red accent-2">UI/UX</span>
                        </div>
                        <div class="col s3">
                          <div id="project-line-2"></div>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s6">
                          <p class="collections-title">Website</p>
                          <p class="collections-content">MediTab</p>
                        </div>
                        <div class="col s3">
                          <span class="task-cat teal accent-4">Marketing</span>
                        </div>
                        <div class="col s3">
                          <div id="project-line-3"></div>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s6">
                          <p class="collections-title">AdWord campaign</p>
                          <p class="collections-content">True Line</p>
                        </div>
                        <div class="col s3">
                          <span class="task-cat deep-orange accent-2">SEO</span>
                        </div>
                        <div class="col s3">
                          <div id="project-line-4"></div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
                <div class="col s12 m12 l6">
                  <ul id="issues-collection" class="collection z-depth-1">
                    <li class="collection-item avatar">
                      <i class="material-icons red accent-2 circle">bug_report</i>
                      <h6 class="collection-header m-0">Issues</h6>
                      <p>Assigned to you</p>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s7">
                          <p class="collections-title">
                            <strong>#102</strong> Home Page</p>
                          <p class="collections-content">Web Project</p>
                        </div>
                        <div class="col s2">
                          <span class="task-cat deep-orange accent-2">P1</span>
                        </div>
                        <div class="col s3">
                          <div class="progress">
                            <div class="determinate" style="width: 70%"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s7">
                          <p class="collections-title">
                            <strong>#108</strong> API Fix</p>
                          <p class="collections-content">API Project </p>
                        </div>
                        <div class="col s2">
                          <span class="task-cat cyan">P2</span>
                        </div>
                        <div class="col s3">
                          <div class="progress">
                            <div class="determinate" style="width: 40%"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s7">
                          <p class="collections-title">
                            <strong>#205</strong> Profile page css</p>
                          <p class="collections-content">New Project </p>
                        </div>
                        <div class="col s2">
                          <span class="task-cat red accent-2">P3</span>
                        </div>
                        <div class="col s3">
                          <div class="progress">
                            <div class="determinate" style="width: 95%"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li class="collection-item">
                      <div class="row">
                        <div class="col s7">
                          <p class="collections-title">
                            <strong>#188</strong> SAP Changes</p>
                          <p class="collections-content">SAP Project</p>
                        </div>
                        <div class="col s2">
                          <span class="task-cat teal accent-4">P1</span>
                        </div>
                        <div class="col s3">
                          <div class="progress">
                            <div class="determinate" style="width: 10%"></div>
                          </div>
                        </div>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!--work collections end-->
            <!--card widgets start-->
            <div id="card-widgets">
              <div class="row">
                <div class="col s12 m4 l4">
                  <ul id="task-card" class="collection with-header">
                    <li class="collection-header teal accent-4">
                      <h4 class="task-card-title">My Task</h4>
                      <p class="task-card-date">Sept 16, 2017</p>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task1" />
                      <label for="task1">Create Mobile App UI.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Today</span>
                        </a>
                      </label>
                      <span class="task-cat cyan">Mobile App</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task2" />
                      <label for="task2">Check the new API standerds.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Monday</span>
                        </a>
                      </label>
                      <span class="task-cat red accent-2">Web API</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task3" checked="checked" />
                      <label for="task3">Check the new Mockup of ABC.
                        <a href="#" class="secondary-content">
                          <span class="ultra-small">Wednesday</span>
                        </a>
                      </label>
                      <span class="task-cat teal accent-4">Mockup</span>
                    </li>
                    <li class="collection-item dismissable">
                      <input type="checkbox" id="task4" checked="checked" disabled="disabled" />
                      <label for="task4">I did it !</label>
                      <span class="task-cat deep-orange accent-2">Mobile App</span>
                    </li>
                  </ul>
                </div>
                <div class="col s12 m12 l4">
                  <div id="flight-card" class="card">
                    <div class="card-header deep-orange accent-2">
                      <div class="card-title">
                        <h4 class="flight-card-title">Flight</h4>
                        <p class="flight-card-date">June 18, Thu 04:50</p>
                      </div>
                    </div>
                    <div class="card-content-bg white-text">
                      <div class="card-content">
                        <div class="row flight-state-wrapper">
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">LDN</h4>
                              <p class="ultra-small">London</p>
                            </div>
                          </div>
                          <div class="col s2 m2 l2 center-align">
                            <i class="material-icons flight-icon">local_airport</i>
                          </div>
                          <div class="col s5 m5 l5 center-align">
                            <div class="flight-state">
                              <h4 class="margin">SFO</h4>
                              <p class="ultra-small">San Francisco</p>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col s6 m6 l6 center-align">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Depart:</span> 04.50</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Terminal:</span> B</p>
                            </div>
                          </div>
                          <div class="col s6 m6 l6 center-align flight-state-two">
                            <div class="flight-info">
                              <p class="small">
                                <span class="grey-text text-lighten-4">Arrive:</span> 08.50</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Flight:</span> IB 5786</p>
                              <p class="small">
                                <span class="grey-text text-lighten-4">Terminal:</span> C</p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col s12 m4 l4">
                  <div id="profile-card" class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <img class="activator" src="/images/3.png" alt="user bg">
                    </div>
                    <div class="card-content">
                      <img src="/images/avatar-7.png" alt="" class="circle responsive-img activator card-profile-image cyan lighten-1 padding-2">
                      <a class="btn-floating activator btn-move-up waves-effect waves-light red accent-2 z-depth-4 right">
                        <i class="material-icons">edit</i>
                      </a>
                      <span class="card-title activator grey-text text-darken-4">Roger Waters</span>
                      <p>
                        <i class="material-icons">perm_identity</i> Project Manager</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                      <p>
                        <i class="material-icons">email</i> yourmail@domain.com</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">Roger Waters
                        <i class="material-icons right">close</i>
                      </span>
                      <p>Here is some more information about this card.</p>
                      <p>
                        <i class="material-icons">perm_identity</i> Project Manager</p>
                      <p>
                        <i class="material-icons">perm_phone_msg</i> +1 (612) 222 8989</p>
                      <p>
                        <i class="material-icons">email</i> yourmail@domain.com</p>
                      <p>
                        <i class="material-icons">cake</i> 18th June 1990
                      </p>
                      <p>
                      </p>
                      <p>
                        <i class="material-icons">airplanemode_active</i> BAR - AUS
                      </p>
                      <p>
                      </p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <!-- blog card -->
                <div class="col s12 m12 l4 item">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="#">
                        <img src="/images/3.png" alt="item-img">
                      </a>
                      <h4 class="card-title text-shadow m-0">Card Title</h4>
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <a class="btn-floating waves-effect waves-light teal accent-4">
                          <i class="material-icons">share</i>
                        </a>
                      </li>
                      <li>
                        <a class="btn-floating waves-effect waves-light red accent-2">
                          <i class="material-icons activator">info_outline</i>
                        </a>
                      </li>
                    </ul>
                    <div class="card-content">
                      <a href="#!"></a>
                      <p class="row mb-1">
                        <small class="right">
                          <a href="#!">
                            <span class="new badge red accent-2" data-badge-caption="UI/UX"></span>
                            <span class="new badge cyan m-0" data-badge-caption="Web Design"></span>
                          </a>
                        </small>
                        <small class="left">18th June, 2017</small>
                      </p>
                      <p class="item-post-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">
                        <i class="material-icons right">close</i> Apple MacBook Pro A1278 13"</span>
                      <p>Here is some more information about this item that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
                <!-- product-card -->
                <div class="col s12 m12 l4 item product">
                  <div class="card">
                    <div class="card-image waves-effect waves-block waves-light">
                      <a href="#" class="btn-floating btn-large btn-price waves-effect waves-light teal accent-4">$189</a>
                      <a href="#">
                        <img src="/images/11.png" alt="item-img">
                      </a>
                    </div>
                    <ul class="card-action-buttons">
                      <li>
                        <a class="btn-floating waves-effect waves-light cyan">
                          <i class="material-icons">add_shopping_cart</i>
                        </a>
                      </li>
                      <li>
                        <a class="btn-floating waves-effect waves-light red accent-2">
                          <i class="material-icons">favorite</i>
                        </a>
                      </li>
                      <li>
                        <a class="btn-floating waves-effect waves-light deep-orange accent-2">
                          <i class="material-icons activator">info_outline</i>
                        </a>
                      </li>
                    </ul>
                    <div class="card-content">
                      <div class="row">
                        <div class="col s12">
                          <p class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Apple MacBook Pro A1278 13"</a></p>
                          <p>Some more information about this product features and specification.</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-reveal">
                      <span class="card-title grey-text text-darken-4">
                        <i class="material-icons right">close</i> Apple MacBook Pro A1278 13"</span>
                      <p>Here is some more information about this item that is only revealed once clicked on.</p>
                    </div>
                  </div>
                </div>
                <!-- map-card -->
                <div class="col s12 m12 l4">
                  <div class="map-card">
                    <div class="card">
                      <div class="card-image waves-effect waves-block waves-light">
                        <div id="map-canvas" data-lat="40.747688" data-lng="-74.004142"></div>
                      </div>
                      <div class="card-content">
                        <a class="btn-floating activator btn-move-up waves-effect waves-light darken-2 right">
                          <i class="material-icons">pin_drop</i>
                        </a>
                        <h4 class="card-title grey-text text-darken-4"><a href="#" class="grey-text text-darken-4">Company Name LLC</a>
                        </h4>
                        <p class="blog-post-content">Some more information about this company.</p>
                      </div>
                      <div class="card-reveal">
                        <span class="card-title grey-text text-darken-4">Company Name LLC
                          <i class="material-icons right">close</i>
                        </span>
                        <p>Here is some more information about this company. As a creative studio we believe no client is too big nor too small to work with us to obtain good advantage.By combining the creativity of artists with the precision of engineers we develop custom solutions that achieve results.Some more information about this company.</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">perm_identity</i> Manager Name</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">business</i> 125, ABC Street, New Yourk, USA</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">perm_phone_msg</i> +1 (612) 222 8989</p>
                        <p>
                          <i class="material-icons cyan-text text-darken-2">email</i> support@pixinvent.com</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!--card widgets end-->
            <!-- //////////////////////////////////////////////////////////////////////////// -->
          </div>
          <!--end container-->
        </section>
        <!-- END CONTENT -->
        {{-- <!-- START RIGHT SIDEBAR NAV-->
        <aside id="right-sidebar-nav">
          <ul id="chat-out" class="side-nav rightside-navigation">
            <li class="li-hover">
              <div class="row">
                <div class="col s12 border-bottom-1 mt-5">
                  <ul class="tabs">
                    <li class="tab col s4">
                      <a href="#activity" class="active">
                        <span class="material-icons">graphic_eq</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#chatapp">
                        <span class="material-icons">face</span>
                      </a>
                    </li>
                    <li class="tab col s4">
                      <a href="#settings">
                        <span class="material-icons">settings</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div id="settings" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">GENERAL SETTINGS</h6>
                  <ul class="collection border-none">
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input checked type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Notifications</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show recent activity</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show your emails</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>Use checkboxes when looking for yes or no answers.</p>
                    </li>
                    <li class="collection-item border-none">
                      <div class="m-0">
                        <span class="font-weight-600">Show Task statistics</span>
                        <div class="switch right">
                          <label>
                            <input type="checkbox">
                            <span class="lever"></span>
                          </label>
                        </div>
                      </div>
                      <p>The for attribute is necessary to bind our custom checkbox with the input.</p>
                    </li>
                  </ul>
                </div>
                <div id="chatapp" class="col s12">
                  <div class="collection border-none">
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Elizabeth Elliott </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-2.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Mary Adams </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Hello Boo </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Caleb Richards </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Keny ! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-4.png" alt="" class="circle cyan">
                      <span class="line-height-0">June Lane </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.14 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Ohh God </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-5.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Edward Fletcher </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.15 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Love you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-6.png" alt="" class="circle deep-orange accent-2">
                      <span class="line-height-0">Crystal Bates </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">8.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can we </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-7.png" alt="" class="circle cyan">
                      <span class="line-height-0">Nathan Watts </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">9.53 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Great! </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-8.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Willard Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.20 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Do it </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-9.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Ronnie Ellis </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">5.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Got that </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-1.png" alt="" class="circle cyan">
                      <span class="line-height-0">Gwendolyn Wood </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">4.34 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Like you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-2.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Daniel Russell </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">12.00 AM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Thank you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-3.png" alt="" class="circle teal accent-4">
                      <span class="line-height-0">Sarah Graves </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">11.14 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Okay you </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-4.png" alt="" class="circle red accent-2">
                      <span class="line-height-0">Andrew Hoffman </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">7.30 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Can do </p>
                    </a>
                    <a href="#!" class="collection-item avatar border-none">
                      <img src="/images//avatar-5.png" alt="" class="circle cyan">
                      <span class="line-height-0">Camila Lynch </span>
                      <span class="medium-small right blue-grey-text text-lighten-3">2.00 PM</span>
                      <p class="medium-small blue-grey-text text-lighten-3">Leave it </p>
                    </a>
                  </div>
                </div>
                <div id="activity" class="col s12">
                  <h6 class="mt-5 mb-3 ml-3">RECENT ACTIVITY</h6>
                  <div class="activity">
                    <div class="col s3 mt-2 center-align recent-activity-list-icon">
                      <i class="material-icons white-text icon-bg-color deep-purple lighten-2">add_shopping_cart</i>
                    </div>
                    <div class="col s9 recent-activity-list-text">
                      <a href="#" class="deep-purple-text medium-small">just now</a>
                      <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jim Doe Purchased new equipments for zonal office.</p>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color cyan lighten-2">airplanemode_active</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="cyan-text medium-small">Yesterday</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Your Next flight for USA will be on 15th August 2015.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color green lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="green-text medium-small">5 Days Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color amber lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="amber-text medium-small">1 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-orange lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-orange-text medium-small">2 Week Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon medium-small">
                        <i class="material-icons white-text icon-bg-color brown lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="brown-text medium-small">1 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Natalya Parker Send you a voice mail for next conference.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list chat-out-list row mb-0">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color deep-purple lighten-2">store</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="deep-purple-text medium-small">3 Month Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">Jessy Jay open a new store at S.G Road.</p>
                      </div>
                    </div>
                    <div class="recent-activity-list row">
                      <div class="col s3 mt-2 center-align recent-activity-list-icon">
                        <i class="material-icons white-text icon-bg-color grey lighten-2">settings_voice</i>
                      </div>
                      <div class="col s9 recent-activity-list-text">
                        <a href="#" class="grey-text medium-small">1 Year Ago</a>
                        <p class="mt-0 mb-2 fixed-line-height font-weight-300 medium-small">voice mail for conference.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>
          </ul>
        </aside> --}}
        <!-- END RIGHT SIDEBAR NAV-->
      </div>
      <!-- END WRAPPER -->
    </div>
    <!-- END MAIN -->
    <!-- //////////////////////////////////////////////////////////////////////////// -->
    <!-- START FOOTER -->
    <footer class="page-footer">
      <div class="container">
        <div class="row section">
          <div class="col l6 s12">
            <h5 class="white-text">World Market</h5>
            <p class="grey-text text-lighten-4">World map, world regions, countries and cities.</p>
            <div id="world-map-markers"></div>
          </div>
          <div class="col l4 offset-l2 s12">
            <h5 class="white-text">rides by Country</h5>
            <p class="grey-text text-lighten-4">A sample polar chart to show rides by country.</p>
            <div id="polar-chart-holder">
              <canvas id="polar-chart-country" width="200"></canvas>
            </div>
          </div>
        </div>
      </div>
      <footer class="page-footer">
        <div class="footer-copyright">
          <div class="container">
            <span>Copyright ©
              <script type="text/javascript">
                document.write(new Date().getFullYear());
              </script> <a class="grey-text text-lighten-4" href="http://patrickhenry.us" target="_blank">PATRICK HENRY</a> All rights reserved.</span>
          </div>
        </div>
      </footer>
    </footer>
    <!-- END FOOTER -->
    <!-- ================================================
    Scripts
    ================================================ -->

<script>
var app = angular.module('myApp', []);
app.controller('myCtrl', function($scope, $http) {
  $http.get("/api/v1/admin/milesToday")
  .then(function(response) {
      $scope.myWelcome = response.data;
  });
});
</script>




    <!-- jQuery Library -->
<script
        src="https://code.jquery.com/jquery-3.3.1.js"
        integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
        crossorigin="anonymous"></script>

            <!--materialize js-->
    <script type="text/javascript" src="js/materialize.js"></script>
    <!--scrollbar-->
    <script type="text/javascript" src="/js/perfect-scrollbar.min.js"></script>
    <!-- chartjs -->
    <script type="text/javascript" src="/js/chart.min.js"></script>
    <!-- sparkline -->
    <script type="text/javascript" src="/js/jquery.sparkline.min.js"></script>
    <!-- google map api -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAZnaZBXLqNBRXjd-82km_NO7GUItyKek"></script>
    <!--jvectormap-->
    <script type="text/javascript" src="/js/jquery-jvectormap-1.2.2.min.js"></script>
    <script type="text/javascript" src="/js/jquery-jvectormap-world-mill-en.js"></script>
    <script type="text/javascript" src="/js/vectormap-script.js"></script>
    <!--google map-->
    <script type="text/javascript" src="/js/google-map-script.js"></script>
    <!--plugins.js - Some Specific JS codes for Plugin Settings-->
    <script type="text/javascript" src="/js/plugins.js"></script>
    <!--card-advanced.js - Page specific JS-->
{{--     <script type="text/javascript" src="/js/dashboard-analytics.js"></script>
 --}}    <!--custom-script.js - Add your own theme custom JS-->
    <script type="text/javascript" src="/js/custom-script.js"></script>
  </body>
</html>