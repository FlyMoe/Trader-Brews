@extends('layouts.app')

@section('title')
    Search
@endsection

@section('content')
<div id="content">
    <!--==============================row5=================================-->
    <div class="row_5">
        <div class="container">
         
          <div class="row">

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

            You can search cellars by beer name, brewery, or user's first or lastname.<br /><br />
          </div>

          <!-- Form --> 
          <div class="row">
            {!! Form::open(array('url' => 'cellarSearch', 'class' => 'form-inline')) !!}
              <div class="form-group">
                {!! Form::label('name', 'Beer Name:') !!}<br />
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
              </div>
              <div class="form-group">
                {!! Form::label('brewery', 'Brewery:') !!}<br />
                {!! Form::text('brewery', null, array('class' => 'form-control')) !!}
              </div>
              <div class="form-group">
                {!! Form::label('firstname', 'First Name:') !!}<br />
                {!! Form::text('firstname', null, array('class' => 'form-control')) !!}
              </div>
              <div class="form-group">
                {!! Form::label('lastname', 'Last Name:') !!}<br />
                {!! Form::text('lastname', null, array('class' => 'form-control')) !!}
              </div>
              <div>
                  {!! Form::submit('Submit Cellar Search', array('class' => 'btn btn-primary btn-margin-top')) !!}
              </div>
            {!! Form::close() !!}      
          </div>
         <!--  End Form -->

      </div>
    </div>
</div>
@endsection
