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

            If a user's name isn't a clickable link that means they haven't created a cellar yet. Click on the user's name to view their cellar.<br /><br />

          </div>
          <div class="row">            
              <div class="table-responsive">
                <table class="table table-bordered" id="main">
                  <!-- Header -->
                  <tr class="bgcolor">
                    <td class="breweryColumn color">
                      User's Name
                    </td>
                    <td class="breweryColumn color">
                      Brewery
                    </td>
                     <td class="breweryColumn color">
                      Beer name
                    </td>
                    <td class="breweryColumn color">
                      Email
                    </td>
                  </tr>
                  <!-- Rows -->
                 
                  @foreach($cellars as $cellar)
                    <tr>
                      <td class="breweryColumn">
                        <?php echo $cellar->name; ?>
                      </td>
                      <td class="breweryColumn">
                        <?php echo $cellar->brewery; ?>
                      </td>
                      <td class="breweryColumns">
                        <?php echo $cellar->brewery; ?>
                      </td>
                      <td class="breweryColumns">
                        <?php echo $cellar->email; ?>
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
