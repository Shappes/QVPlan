@extends('layouts.app')

@section('content')

    <?php  
    if(!Auth::user()->admin) return redirect('home')->withErrors('Authentication Failed!');
    ?>

    <h1 class="col-md-offset-2" style="color:white">All Requests</h1>
    
    @foreach($vrequest as $vr)
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="form-control col-md-8 {{ $errors->has('vstart') ? ' has-error' : '' }}">
                        <label for="vstart" class="col-md-4 control-label">Firstname, Name:</label>
                        <label for="vstart" class="col-md-4 control-label"> {{ App\User::find($vr->user_id)->name }} </label>
                    </div>
                <br>
                    <div class="form-control col-md-8 {{ $errors->has('vstart') ? ' has-error' : '' }}">
                        <label for="vstart" class="col-md-4 control-label">Vacation Start:</label>
                        <label for="vstart" class="col-md-4 control-label">{{ $vr->vacation_start }}</label>
                    </div>
                <br>

                    <div class="form-control col-md-8 {{ $errors->has('vstart') ? ' has-error' : '' }}">
                        <label for="vstart" class="col-md-4 control-label">Vacation End:</label>
                        <label for="vstart" class="col-md-4 control-label">{{ $vr->vacation_end }}</label>
                    </div>
                <br>
                    <div class="form-control col-md-8 {{ $errors->has('vstart') ? ' has-error' : '' }}">
                        <label for="vstart" class="col-md-4 control-label">Status:
                        </label>

                        <label for="vstart" class="col-md-4 control-label">{{ App\Status::find($vr->status_id)->name }}
                        </label>

                            <label for="vstart" class="col-md-2  control-label">
                                    <button type="button" class="btn btn-success btn-sm">Approve</button>
                            </label>
                            <label for="vstart" class="col-md-2  control-label">
                                    <button type="button" class="btn btn-danger btn-sm">Decline</button>
                            </label>
                    </div>
                <br>
                    <div class="form-control col-md-8 {{ $errors->has('vstart') ? ' has-error' : '' }}">
                        <label for="vstart" class="col-md-8 control-label">Message:</label>
                    </div>
                <br>
                    <div class="form-group col-md-12 {{ $errors->has('vstart') ? ' has-error' : '' }}">
                        <textarea rows="4" for="vstart" class="col-md-12 form-control" readonly="readonl">{{ $vr->message }}</textarea>
                    </div>
                <br>
                     <div class="col-md-4">
                            <label for="vstart" class="col-md-6  control-label">
                            </label>
                            
                            <label for="vstart" class="col-md-9  control-label">
                            </label>

                            <label for="vstart" class="col-md-12  control-label">
                            </label>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
@endsection

