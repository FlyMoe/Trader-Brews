@extends('layouts.app')

@section('title')
    Update Profile
@endsection

@section('content')
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
          <div class="row title">
             <h1>Update Profile</h1>
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
              <!-- <div class="col-lg-offset-1 col-md-offset-1 col-sm-offset-1 col-lg-2 col-md-2 col-sm-2">
                <img width="200" height="100" class="img-border">
              </div> -->
              <div class="col-lg-6 col-md-6 col-sm-6">
                
              </div>
              @foreach($profiles as $pro) 
                <?php

                  // Set readonlys to nothing so the fields can be edited
                  $fn_readonly = "";
                  $ln_readonly = "";
                  $ad_readonly = "";
                  $zip_readonly = "";
                  $ph_readonly = "";

                  // Populating variable from profile database
                  $id = $pro->id;
                  $firstname = $pro->firstname;
                  $lastname = $pro->lastname;
                  $address = $pro->address;
                  $zipcode = $pro->zipcode;
                  $phonenumber = $pro->phonenumber;
                ?>
              @endforeach              
              {!! Form::open(array('method' => 'PATCH', 'route' => ['profile.update', $id])) !!}
              <div class="col-lg-6 col-lg-offset-3 col-md-6 col-md-offset-3 col-sm-6 cols-sm-offset-3"">
                   Red denotes a required field<br><br>
                  <div class="space">
                   <?php
                      if (empty($firstname)) {
                        $firstname = "";
                        $fn_readonly = "";
                      }
                       if (empty($lastname)) {
                        $lastname = "";
                        $ln_readonly = false;
                      }
                       if (empty($address)) {
                        $address = "";
                        $ad_readonly = false;
                      }
                       if (empty($zipcode)) {
                        $zipcode = "";
                        $zip_readonly = false;
                      }
                       if (empty($firstname)) {
                        $phonenumber = "";
                        $ph_readonly = false;
                      }
                  ?>
                    
                    {!! Form::label('firstname', 'First Name:', array('class' => 'required')) !!}<br />
                    {!! Form::text('firstname', $firstname, array('class' => 'form-control', $fn_readonly)) !!}
                  </div>
                   <div class="space">
                    {!! Form::label('lastname', 'Last Name:', array('class' => 'required')) !!}<br />
                    {!! Form::text('lastname', $lastname, array('class' => 'form-control', $ln_readonly)) !!}
                  </div>
                  <div class="space">
                    {!! Form::label('address', 'Address:', array('class' => 'required')) !!}<br />
                    {!! Form::text('address', $address, array('class' => 'form-control', $ad_readonly)) !!}
                  </div>
                  <div class="space">
                    {!! Form::label('zipcode', 'Zip Code:', array('class' => 'required')) !!}<br />
                    {!! Form::text('zipcode', $zipcode, array('class' => 'form-control', $zip_readonly)) !!}
                  </div>
                  <div class="space">
                    {!! Form::label('phonenumber', 'Phone Number:') !!}<br />
                    {!! Form::text('phonenumber', $phonenumber, array('class' => 'form-control', $ph_readonly)) !!}
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