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

            You can search cellars by beer name, brewery, or user name.<br /><br />

          </div>
         

          <div class="row">
            {!! Form::open(array('route' => 'profile.store', 'class' => 'form-inline')) !!}
              <div class="form-group">
                {!! Form::label('name', 'Beer Name:') !!}<br />
                {!! Form::text('name', null, array('class' => 'form-control')) !!}
              </div>
              <div class="form-group">
                {!! Form::label('lastname', 'Last Name:') !!}<br />
                {!! Form::text('lastname', null, array('class' => 'form-control')) !!}
                <!--   Last Name
                  <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"> -->
              </div>
              <div class="form-group">
                {!! Form::label('firstname', 'First Name:') !!}<br />
                {!! Form::text('firstname', null, array('class' => 'form-control')) !!}
                <!--   Last Name
                  <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"> -->
              </div>
              <div class="form-group">
                {!! Form::label('lastname', 'Last Name:') !!}<br />
                {!! Form::text('lastname', null, array('class' => 'form-control')) !!}
                <!--   Last Name
                  <input id="lastname" type="text" class="form-control" name="lastname" value="{{ old('lastname') }}"> -->
              </div>
              <div>
                  {!! Form::submit('Submit Cellar Search', array('class' => 'btn btn-primary')) !!}
              </div>
                </div>
                {!! Form::close() !!}      
            </div>
          </div>



          <div class="row">            
              <div class="table-responsive">
                <table class="table table-bordered" id="main">
                  <!-- Header -->
                  <tr class="bgcolor">
                    <td class="beerColumn color">
                      <a class="beerSort color">Name</a> / <a class="brewerySort color">Brewery</a>
                    </td>
                    <td class="sizeColumn color">
                      Size
                    </td>
                     <td class="dateColumn color">
                      Bottle Date
                    </td>
                    <td class="cellarColumn color">
                      In Cellar
                    </td>
                    <td class="fridgeColumn color">
                      In Fridge
                    </td>
                  </tr>
                  <!-- Rows -->
                 
                  
                    <tr>
                      <td class="beerColumn">
                       
                      </td>
                      <td class="sizeColumn">
                       
                      </td>
                       <td class="dateColumn">
                     
                      </td>
                      <td class="cellarColumn">
                      
                      </td>
                      <td class="fridgeColumn">
                      
                      </td>
                    </tr>
               
                </table>
              </div> 
            </form>           
          </div>
        </div>
    </div>
</div>
@endsection
