@extends('layouts.app')

@section('title')
    Cellar
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

             <h4 class="cellarName">
                @foreach( $users as $user)
                  <?php 
                    $name = explode(" ",$user->name);
                    echo $name[0]."'s";
                  ?> 
                @endforeach
               Cellar

               <span class="total">Total Beers: {{$total_beers}} | Unique Beers: {{$unique_beers}}  | Breweries: {{$brewery}}</span>
             </h4>
              {!! Form::submit('Add To Cellar', array('class' => 'btn btn-success cellarName', 'data-target' => '#favoritesModal', 'data-toggle' => 'modal')) !!}
            <!--   <button 
   type="button" 
   class="btn btn-primary btn-lg" 
   data-toggle="modal" 
   data-target="#favoritesModal">
  Add to Favorites
</button> -->


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
                    <td class="fridgeColumn color">
                      
                    </td>
                  </tr>
                  <!-- Rows -->
                 
                  @foreach( $cellars as $cellar)
                    <tr>
                      <td class="beerColumn">
                        <?php echo $cellar->name ?><br \>
                        <?php echo $cellar->brewery ?>
                      </td>
                      <td class="sizeColumn">
                        <?php echo $cellar->size ?>
                      </td>
                       <td class="dateColumn">
                        <?php echo $cellar->bottle_date ?>
                      </td>
                      <td class="cellarColumn">
                        <?php echo $cellar->in_cellar ?>
                      </td>
                      <td class="fridgeColumn">
                        <?php echo $cellar->in_fridge ?>
                      </td>
                      <td class="deleteColumn">
                        {!! Form::open(['method' => 'DELETE','route' => ['cellar.destroy', $cellar->id]]) !!}
                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                      </td>
                    </tr>
                  @endforeach
                </table>
              </div> 
            </form>           
          </div>
        </div>
    </div>
</div>
@endsection

@section('modal')
<div class="modal fade" id="favoritesModal" 
     tabindex="-1" role="dialog" 
     aria-labelledby="favoritesModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header color">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <h4 class="modal-title modal_bgcolor" id="favoritesModalLabel">New Cellar Entry</h4>
      </div>
      {!! Form::open(array('route' => 'cellar.store', 'class' => 'form-inline')) !!}
      <div class="modal-body">
        * Denotes a required field
      </div>
      <div class="modal-body">
        * {!! Form::label('brewery', 'Brewery:') !!}<br />
        {!! Form::text('brewery', null, array('class' => 'form-control')) !!}
      </div>
      <div class="modal-body">
        * {!! Form::label('name', 'Beer:') !!}<br />
        {!! Form::text('name', null, array('class' => 'form-control')) !!}
      </div>
       <div class="modal-body form-group">
        * {!! Form::label('size', 'Size:') !!}<br />
        {!! Form::select('size', 
          array(
            '' => ['' => ''],
            'American/Imperial' => 
              array('7oz' => '7oz', '12oz' => '12oz', '16oz' => '16oz', '22oz' => '22oz', '24oz' => '24oz', '25oz' => '25oz', '32oz' => '32oz', '40oz' => '40oz', '64oz' => '64oz'), 
            'Metric' => 
               array ('187ml' => '187 ml', '250 ml' => '250 ml', '275 ml' => '275 ml', '330 ml' => '330 ml', '341 ml' => '341 ml', '350 ml' => '350 ml', '355 ml' => '355 ml', '375 ml' => '375 ml', '500 ml' => '500 ml', '550' => '550 ml', '650' => '650 ml', '750' => '750 ml', '1 L' => '1 L', '1.5 L' => '1.5 L', '3 L' => '3 L'),
            'Other' => 
              array ('Other')
          )) !!}
      </div>
      <div class="modal-body form-group">
        {!! Form::label('bottle_date', 'Bottle Date:') !!}<br />
        {!! Form::text('bottle_date', null, array('class' => 'form-control', 'placeholder' => 'YYYY-MM-DD')) !!}
      </div>
       <div class="modal-body form-group">
        {!! Form::label('in_cellar', 'Number in Cellar:') !!}<br />
        {!! Form::text('in_cellar', null, array('class' => 'form-control', 'placeholder' => 'Enter A Number')) !!}
      </div>
       <div class="modal-body form-group">
        {!! Form::label('in_fridge', 'Number in Fridge:') !!}<br />
        {!! Form::text('in_fridge', null, array('class' => 'form-control', 'placeholder' => 'Enter A Number')) !!}
      </div>
      <div class="modal-footer">


        {!! Form::submit('Close', array('class' => 'btn btn-danger', 'data-dismiss' => 'modal')) !!}

        {!! Form::submit('Submit Cellar Entry', array('class' => 'btn btn-primary')) !!}
      </div>
      {!! Form::close() !!}      
    </div>
  </div>
  <script>
      $('div.alert').not('.alert-important').delay(3000).fadeOut(350);
  </script>
@endsection