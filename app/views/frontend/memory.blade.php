@extends('frontend/layouts/frontend')

{{-- Page title --}}
@section('title')
MEMORY ::
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

        <a id="modal1" class="touch" data-id="DrWehnonah" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Wenonah Haire</h4>
                <p>The Catawba creation story of water</p>
            </div>
          </div>
        </div>
        </a>

        <a id="modal2" class="touch" data-id="Grady-Walker-bridges" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Grady Walker</h4>
                <p>Life in Revolution Park</p>
            </div>
          </div>
        </div>
        </a>


        <a id="modal3" class="touch" data-id="RankinCurlyHall-baptism" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Curley Hall & Laura Rankin</h4>
                <p>Baptisms in the creek</p>
                <!--<button id="modal3" type="button" class="btn btn-primary" data-id="sparkler" data-type="mp4" href="#modal"> Makeway </button>-->
            </div>
          </div>
        </div>
        </a>

        <a id="modal1" class="touch" data-id="RankinCurlyHall-spring" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Curley Hall & Laura Rankin</h4>
                <p>Water from the Reid Park spring</p>
            </div>
          </div>
        </div>
        </a>

        <a id="modal1" class="touch" data-id="RickHall3-spring" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Rickey Hall</h4>
                <p>The spring’s significance to Reid Park</p>
            </div>
          </div>
        </div>
        </a>

        <a id="modal1" class="touch" data-id="RickyHall1-playing" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Rickey Hall</h4>
                <p>Learning to swim in the creek </p>
            </div>
          </div>
        </div>
        </a>
  </div><!--/row1-->

  <!-- row2-->
  <div class="row">
        <a id="modal1" class="touch" data-id="RickHall2-changes" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Rickey Hall</h4>
                <p>Changes in Irwin Creek</p>
            </div>
          </div>
        </div>
        </a>

        <a id="modal2" class="touch" data-id="LesTodd" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Les Todd</h4>
                <p>A boy, a creek</p>
            </div>
          </div>
        </div>
        </a>


        <a id="modal3" class="touch" data-id="Cherry-snakes" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Richard Perry</h4>
                <p>Cherry neighbors: Snakes in the swimming hole</p>
                <!--<button id="modal3" type="button" class="btn btn-primary" data-id="sparkler" data-type="mp4" href="#modal"> Makeway </button>-->
            </div>
          </div>
        </div>
        </a>

        <a id="modal1" class="touch" data-id="GrierHeights2-bigboy" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Grier Heights memories</h4>
                <p>The Big Boy Hole at Briar Creek</p>
            </div>
          </div>
        </div>
        </a>

        <a id="modal1" class="touch" data-id="Cherry-bridge" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Cherry neighborhood residents</h4>
                <p>Crossing the creek bridge</p>
            </div>
          </div>
        </div>
        </a>

        <a id="modal1" class="touch" data-id="Cherry-CharlesPatton" data-type="mp4" href="#modal">
        <div class="col-lg-2">
          <div class="thumbnail">

              <div class="caption">
                <h4>Charles Patton</h4>
                <p>&nbsp;</p>
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
