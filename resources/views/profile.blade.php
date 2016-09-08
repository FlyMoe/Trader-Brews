@extends('layouts.app')

@section('title')
    Profile
@endsection

@section('content')
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
          <div class="row title">
             <h1>Profile</h1>
          </div>
          <div class="row">            
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile_submit') }}">
              <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-2 col-md-2 col-sm-2">
                <img src="http://placehold.it/200x100">
              </div>
              {!! Form::open(array('url' => 'profile')) !!}
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="space">
                    {!! Form::label('firstname', 'First Name') !!}<br />
                    {!! Form::text('firstname') !!}
                      First Name
                      <input id="firstname" type="text" class="form-control" name="firstname" value="{{ old('firstname') }}">
                  }
                  }
                  </div>
                   <div class="space">
                      Last Name
                      <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}">
                  </div>
                  <div class="space">
                      Address
                      <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}">
                  </div>
                  <div class="space">
                      Zip
                      <input id="zip" type="text" class="form-control" name="zip" value="{{ old('zip') }}">
                  </div>
                  <div class="space">
                      Phone
                      <input id="phone" type="text" class="form-control" name="phone" value="{{ old('phone') }}">
                  </div>
                  <div>
                      <button type="submit" class="btn btn-primary">
                          <i class="fa fa-btn fa-sign-in"></i> Submit Profile
                      </button>
                  </div>
              </div>
              {!! Form::close() !!}
            </form>           
          </div>
        </div>
    </div>
</div>
@endsection