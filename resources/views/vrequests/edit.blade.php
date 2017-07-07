@extends('layouts.app')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">My Request ID: {{ $vr->id }} </div>
                    <div class="panel-body">
                    <form class="form-horizontal" method="POST" action="{{ route('update', $vr->id) }}">
                    {{ csrf_field() }}
                        
                        <div class="form-group{{ $errors->has('vstart') ? ' has-error' : '' }}">
                            <label for="vstart" class="col-md-4 control-label">Vacation Start</label>
                        
                            <div class="col-md-6">
                                <input id="vstart" type="date" value="{{ $vr->vacation_start }}"  class="form-control" name="vstart" required autofocus>

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
                                <input id="vend" type="date" value="{{ $vr->vacation_end }}" class="form-control" name="vend" required>

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
                                <textarea id="message" class="form-control" name="message">{{ $vr->message }}</textarea>

                                @if ($errors->has('message'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('message') }}</strong>
                                    </span>
                                @endif
                            </div>
                            
                        </div>

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-4">
                                <button type="submit" class="btn btn-success">Save Changes</button>
                                {{ method_field('POST') }}

                            <a href="{{ route('myrequests') }}" class="btn btn-danger">Cancel Changes</a>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection
