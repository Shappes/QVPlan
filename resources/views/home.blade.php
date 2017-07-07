@extends('layouts.app')

@section('content')

        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">Dashboard</div>

                        <div class="panel-body">
                            Welcome to your dashboard!
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @if($errors->any())
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            {{$errors->first()}}
                        </div>

                        <div class="panel-body">
                            You do not have the needed permissions!
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endif  
@endsection