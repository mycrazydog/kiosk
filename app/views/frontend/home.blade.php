@extends('frontend/layouts/frontend')

{{-- Page title --}}
@section('title')
KEEPINGWATCH.ORG ::
@parent

@stop

{{-- Header section --}}
@section('header')

@stop


{{-- Page content --}}
@section('content')

            <div class="row">
              <div class="col-lg-12">
		            <h1 class="cover-heading">KEEPING WATCH on WATER: CITY OF CREEKS</h1>
		            <h3 class="cover-subtitle">Touch a video below to watch</h3>
              </div>
            </div>


            <div class="row">
                <a id="modal1" class="touch" data-id="Ben" data-type="mp4" href="#modal">
                <div class="col-lg-4">
                  <div class="thumbnail">
                    <img src="{{ asset('assets/images/ben.jpg') }}">
                      <div class="caption">
                        <h4>'ALMOST WORTHLESS IF IT'S POLLUTED'</h4>
                        <p>Film by the smARTlab</p>
                    </div>
                  </div>
                </div>
                </a>

                <a href="{{ URL::to('memory') }}" class="animsition-link">
                <div class="col-lg-4">
                  <div class="thumbnail">
                    <img src="{{ asset('assets/images/memory.jpg') }}">
                      <div class="caption">
                        <h4>ORAL HISTORIES: CREEKS IN MEMORY</h4>
                        <p>Films by Tenille Todd</p>
                    </div>
                  </div>
                </div>
                </a>


                <a href="{{ URL::to('pollution') }}" class="animsition-link">
                <div class="col-lg-4">
                  <div class="thumbnail">
                    <img src="{{ asset('assets/images/pollution.jpg') }}">
                      <div class="caption">
                        <h4>ORAL HISTORIES: POLLUTION PAST AND PRESENT</h4>
                        <p>Films by Tenille Todd</p>
                        <!--<button id="modal3" type="button" class="btn btn-primary" data-id="sparkler" href="#modal"> Makeway </button>-->
                    </div>
                  </div>
                </div>
                </a>
            </div><!--/row-->
@stop


{{-- Body Bottom --}}
@section('body_bottom')

@stop
