@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Request</div>

                <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('vrequests') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('vstart') ? ' has-error' : '' }}">
                            <label for="vstart" class="col-md-4 control-label">Vacation Start</label>

                            <div class="col-md-6">
                                <input id="vstart" type="date" class="form-control" name="vstart" required autofocus>

                                @if ($errors->has('vstart'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vstart') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('vend') ? ' has-error' : '' }}">
                            <label for="vend" class="col-md-4 control-label">Vacation End</label>

                            <div class="col-md-6">
                                <input id="vend" type="date" class="form-control" name="vend" required>

                                @if ($errors->has('vend'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('vend') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('message') ? ' has-error' : '' }}">
                            <label for="message" class="col-md-4 control-label">Message</label>

                            <div class="col-md-6">
                                <textarea id="message" placeholder="-Type you'r mesage here-" class="form-control" name="message"></textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Create Request
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
