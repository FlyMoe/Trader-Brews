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
             <h4 class="cellarName">
                @foreach( $users as $user)
                  <?php 
                    $name = explode(" ",$user->name);
                    echo $name[0]."'s";
                  ?> 
                @endforeach
               Cellar

               <span class="total">Total Beers:  | Unique Beers:  | Breweries:</span>
             </h4>
             
          </div>
         
          <div class="row">            
            <form class="form-horizontal" role="form" method="POST" action="{{ url('/profile_submit') }}">
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
                 
                  @foreach( $cellars as $cell)
                    <tr>
                      <td class="beerColumn">
                        <?php echo $cell->name ?><br \>
                        <?php echo $cell->brewery ?>
                      </td>
                      <td class="sizeColumn">
                        <?php echo $cell->size ?>
                      </td>
                       <td class="dateColumn">
                        <?php echo $cell->bottle_date ?>
                      </td>
                      <td class="cellarColumn">
                        <?php echo $cell->in_cellar ?>
                      </td>
                      <td class="fridgeColumn">
                        <?php echo $cell->in_fridge ?>
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