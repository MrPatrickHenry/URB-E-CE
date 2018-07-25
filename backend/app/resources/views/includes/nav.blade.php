   <nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
     <a href="/"> <img src="/images/logo/2020-logo-RGB-BW.png" class="logo" alt="2020 logo"></a>
      
      <ul class="navbar-nav ml-auto">

        <!-- Dropdown Trigger -->


        <!-- Authentication Links -->
        @guest
        <li><a class="nav-link" href="/login">{{ __('Login') }}</a></li>
        <li><a class="nav-link" href="/register">{{ __('Register') }}</a></li>
        @else
     

@php
        $accountType = Auth::user()->account_type;

        @endphp
        <li class="nav-item dropdown" >
          <span class="caret"></span><a id="navbarDropdown" class="nav-link dropdown-toggle" href="/profile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
<img src="{{ Auth::user()->user_profile_avatar }}" width="40px" style="border-radius: 100%" >{{ Auth::user()->name }} 
          </a>


          <div class="dropdown-menu" aria-labelledby="navbarDropdown" stlye="display:none;z-index:30;" >
 

  <a class="dropdown-item" href="/profile">
            <i class="tiny material-icons">account_box</i> 
            {{ __('Account') }}
          </a>


  <a class="dropdown-item" href="/statements">
            <i class="tiny material-icons">monetization_on</i> 
            {{ __('Statement') }}
          </a>

            <a class="dropdown-item" href="/reporting">
              <i class="tiny material-icons">assessment</i> 
              {{ __('Reporting') }}
            </a>


            @if ($accountType === 'Brand')

            <hr>
            <a class="dropdown-item" href="/assets">
              <i class="tiny material-icons">fingerprint</i> 
              {{ __('Assets') }}
            </a>

       
          </hr>
          <a class="dropdown-item" href="/orders">
            <i class="tiny material-icons">IO's</i> 
            {{ __('Insertion Orders') }}

          </a>
          @endif

          @if ($accountType === 'Publisher')
            <a class="dropdown-item" href="/publisher/sdkgen/">
            <i class="tiny material-icons">i</i> 
            {{ __('>_ API Keys') }}
          </a>
          @endif
<hr>

          <a class="dropdown-item" href="/bug">
            <i class="tiny material-icons">bug_report</i> 
            {{ __('Bug') }}
          </a>

          {{--  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">  <i class="tiny material-icons">exit_to_app</i> 
            {{ __('Logout') }}
          </a>



          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
          </form>
 --}}

       <a class="dropdown-item" href="/help">
            <i class="tiny material-icons">help</i> 
            {{ __('Help') }}
          </a>
{{--                               <a data-toggle="modal" href="#UploadAssetDetailsModal">Assets</a>
 --}}
                              <a class="dropdown-item" href="/assets">
            <i class="tiny material-icons">fingerprint</i> 
            {{ __('Asset Upload') }}

          </a>

<a class="dropdown-item" href="https://20-twenty.online/logout" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>

<form id="logout-form" action="https://20-twenty.online/logout" method="POST" style="display: none;">{{ csrf_field() }}</form>



        </div>

        
      </li>

      @endguest
    </ul>
  </div>
</nav>


