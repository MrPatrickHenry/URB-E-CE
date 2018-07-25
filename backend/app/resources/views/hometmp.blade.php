@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-20">
            <div class="card">
                <div class="card-header"><h2><strong>Welcome</strong> {{ Auth::user()->name }}</h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

<h1>Thank you </h1>
<br>
<h2 style="font-weight:200">We just need bit more time to make sure everything is correclty setup and good to go!!</h2>
<h2 style="font-weight:200">We will drop you an email shortly when we have everything up and running</h2>
<h3> Please help share our mission with your social media!  </h3> 

                </div> <a href="https://twitter.com/intent/tweet?screen_name=20_20_online&ref_src=twsrc%5Etfw" class="twitter-mention-button" data-show-count="false">Tweet to @20_20_online</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
            </div>

<iframe src="https://www.facebook.com/plugins/share_button.php?href=Https%3A%2F%2F20-twenty.online&layout=button_count&size=small&mobile_iframe=true&width=69&height=20&appId" width="69" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>


<script src="//platform.linkedin.com/in.js" type="text/javascript"> lang: en_US</script>
<script type="IN/Share" data-url="Https://20-twenty.online"></script>

        </div>
    </div>
</div>
@endsection
