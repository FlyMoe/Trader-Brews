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

          <!-- Flash messages, which are coming from the controller -->
          @if (session()->has('flash_notification.message'))
              <div class="alert alert-{{ session('flash_notification.level') }}">
                  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>

                  {!! session('flash_notification.message') !!}
              </div>
          @endif

          <!-- Show the validation errors -->
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif

          <div class="row">
              <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-2 col-md-2 col-sm-2">
                <img src="http://placehold.it/200x100">
              </div>
              {!! Form::open(array('route' => 'profile.store')) !!}
              <div class="col-lg-6 col-md-6 col-sm-6">
                  <div class="space">
                    {!! Form::label('firstname', 'First Name:') !!}<br />
                    {!! Form::text('firstname', null, array('class' => 'form-control')) !!}
                  </div>
                   <div class="space">
                    {!! Form::label('lastname', 'Last Name:') !!}<br />
                    {!! Form::text('lastname', null, array('class' => 'form-control')) !!}
                    <!--   Last Name
                      <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"> -->
                  </div>
                  <div class="space">
                    {!! Form::label('address', 'Address:') !!}<br />
                    {!! Form::text('address', null, array('class' => 'form-control')) !!}
                  </div>
                  <div class="space">
                    {!! Form::label('zipcode', 'Zip Code:') !!}<br />
                    {!! Form::text('zipcode', null, array('class' => 'form-control')) !!}
                  </div>
                  <div class="space">
                    {!! Form::label('phonenumber', 'Phone Number:') !!}<br />
                    {!! Form::text('phonenumber', null, array('class' => 'form-control')) !!}
                  </div>
                  <div>
                      {!! Form::submit('Submit Profile', array('class' => 'btn btn-primary')) !!}
                  </div>
              </div>
              {!! Form::close() !!}      
          </div>
        </div>
    </div>
</div>
@endsection