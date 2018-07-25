@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Authorization Request
                    </div>
                    <div class="card-body">
                        <!-- Introduction -->
                        <p><strong>5</strong> is requesting permission to access your account.</p>

                  {{--       <!-- Scope List -->
                        @if (count($scopes) > 0)
                            <div class="scopes">
                                    <p><strong>This application will be able to:</strong></p>

                                    <ul>
                                        @foreach ($scopes as $scope)
                                            <li>{{ $scope->description }}</li>
                                        @endforeach
                                    </ul>
                            </div>
                        @endif --}}

                        <div class="buttons">
                            <!-- Authorize Button -->
                            <form method="post" action="/oauth/authorize">
                                {{ csrf_field() }}

                                <input type="hidden" name="state" value="oIdvdNw5mYDzgK2ZwmVDNwdvBIf6Sakoue8UbI6w">
                                <input type="hidden" name="client_id" value="5">
                                <button type="submit" class="btn btn-success btn-approve">Authorize</button>
                            </form>

                            <!-- Cancel Button -->
                            <form method="post" action="/oauth/authorize">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}

                                <input type="hidden" name="state" value="oIdvdNw5mYDzgK2ZwmVDNwdvBIf6Sakoue8UbI6w">
                                <input type="hidden" name="client_id" value="5">
                                <button class="btn btn-danger">Cancel</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>


            <div class="col-md-6">
                <div class="card card-default">
                    <div class="card-header">
                        Authorization Request
                    </div>
                    <div class="card-body">
                        <!-- Introduction -->
                    <h3>current Tokens and keys</h3>

                        <input type="text" name="apitoken" value="oIdvdNw5mYDzgK2ZwmVDNwdvBIf6Sakoue8UbI6w" placeholder="" readonly="true">

                          <input type="text" name="client_id" value="5" placeholder="" readonly="true">
                    </div>
                </div>
            </div>















        </div>
    </div>
@endsection
