@extends('frontend/layouts/frontend')

{{-- Page title --}}
@section('title')
POLLUTION ::
@parent
@stop

{{-- Header section --}}
@section('header')

@stop


{{-- Page content --}}
@section('content')

	    <div class="row">
	      <div class="col-lg-12">
			    <h1 class="cover-heading">ORAL HISTORIES: CREEKS IN MEMORY<br/>Films by Tenille Todd</h1>
			    <h3 class="cover-subtitle">Touch a video below to watch</h3>
	      </div>
	    </div>

      <!--row1-->
      <div class="row">

            <a id="modal1" class="touch" data-id="PatStith-LSC" data-type="mp4" data-type="mp4" href="#modal">
            <div class="col-lg-2 col-lg-offset-1">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Pat Stith</h4>
                    <p>Reporter investigated Little Sugar Creek pollution </p>
                </div>
              </div>
            </div>
            </a>

            <a id="modal2" class="touch" data-id="PatStith-sewage" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Pat Stith</h4>
                    <p>Sewage in Briar Creek </p>
                </div>
              </div>
            </div>
            </a>


            <a id="modal3" class="touch" data-id="JBelton" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Jonathon Belton</h4>
                    <p>Briar Creek ‘always had a smell to it’</p>
                    <!--<button id="modal3" type="button" class="btn btn-primary" data-id="sparkler" data-type="mp4" href="#modal"> Makeway </button>-->
                </div>
              </div>
            </div>
            </a>

            <a id="modal1" class="touch" data-id="PatStith-formaldehyde" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Pat Stith</h4>
                    <p>Pools of formaldehyde</p>
                </div>
              </div>
            </div>
            </a>

            <a id="modal1" class="touch" data-id="Menhinick-pollution" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Ed and Pozy Menhinick</h4>
                    <p>Uncovering a polluter</p>
                </div>
              </div>
            </div>
            </a>

      </div><!--/row1-->

      <!-- row2-->
      <div class="row">
            <a id="modal1" class="touch" data-id="BillStokes1-trash" data-type="mp4" href="#modal">
            <div class="col-lg-2 col-lg-offset-1">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Bill Stokes</h4>
                    <p>Trash in the Catawba</p>
                </div>
              </div>
            </div>
            </a>

            <a id="modal2" class="touch" data-id="BStokes-collection" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Bill Stokes</h4>
                    <p>Collecting Charlotte’s trash</p>
                </div>
              </div>
            </div>
            </a>


            <a id="modal3" class="touch" data-id="BStokes-1ball" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Bill Stokes</h4>
                    <p>The journey of one basketball</p>
                    <!--<button id="modal3" type="button" class="btn btn-primary" data-id="sparkler" data-type="mp4" href="#modal"> Makeway </button>-->
                </div>
              </div>
            </div>
            </a>

            <a id="modal1" class="touch" data-id="Rusty" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Rusty Rozzelle</h4>
                    <p>Runoff can kill a creek</p>
                </div>
              </div>
            </div>
            </a>

            <a id="modal1" class="touch" data-id="Menhinick-silt" data-type="mp4" href="#modal">
            <div class="col-lg-2">
              <div class="thumbnail">

                  <div class="caption">
                    <h4>Ed and Pozy Menhinick</h4>
                    <p>‘Silt is a very bad pollutant’</p>
                </div>
              </div>
            </div>
            </a>

      </div><!--/row2-->

      <div class="row">
        <div class="col-lg-12">
          <a type="button" class="btn btn-primary btn-lg animsition btn-back">BACK</a>
        </div>
      </div>
@stop

{{-- Body Bottom --}}
@section('body_bottom')
<script>
    $(function () {

      var delay = 600000; //Your delay in milliseconds

      setTimeout(function () {
        $( ".btn-back" ).trigger('click');
      }, delay);

    });
</script>
@stop
