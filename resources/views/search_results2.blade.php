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
            {!! Form::submit('Send Email To Set Up a Trade', array('class' => 'btn btn-success cellarName', 'data-target' => '#favoritesModal', 'data-toggle' => 'modal')) !!}
       
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
        <h4 class="modal-title modal_bgcolor" id="favoritesModalLabel">Email</h4>
      </div>
      @foreach( $users as $user)
      {!! Form::open(array('url' => '/sendEmail', 'method' => 'POST')) !!}
      <div class="modal-body">
        * Denotes a required field
      </div>
      <div class="modal-body">
        * {!! Form::label('subject', 'Subject:') !!}<br />
        {!! Form::text('subject', null, array('class' => 'form-control')) !!}
      </div>
      <div class="modal-body form-group">
       * {!! Form::label('message', 'Message:') !!}
       {!! Form::textarea('message', null, array('class' => 'form-control')) !!}
      </div>
      
      <div class="modal-footer">
        {!! Form::submit('Close', array('class' => 'btn btn-danger', 'data-dismiss' => 'modal')) !!}
        {!! Form::hidden('id', $user->id) !!}
        {!! Form::hidden('email', $user->email) !!}
        {!! Form::hidden('_method', 'POST') !!}
        {!! Form::submit('Send Email', array('class' => 'btn btn-primary')) !!}
      </div>
      @endforeach
      {!! Form::close() !!}      
    </div>
  </div>
  <script>
      $('div.alert').not('.alert-important').delay(5000).fadeOut(350);
  </script>
@endsection
