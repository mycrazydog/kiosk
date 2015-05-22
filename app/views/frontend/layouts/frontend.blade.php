<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Basic Page Needs
        ================================================== -->
        <meta charset="utf-8" />
        <title>
            @section('title')
            @lang('general.site_name')
            @show
        </title>
        <meta name="keywords" content="" />
        <meta name="author" content="" />
        <meta name="description" content="" />

        <!-- Mobile Specific Metas
        ================================================== -->
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- CSS
        ================================================== -->
        <link href="{{ asset('assets/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/video-js.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/custombox.min.css') }}" rel="stylesheet" >
        <link href="{{ asset('assets/css/bigvideo.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/animsition.min.css') }}" rel="stylesheet">
        <link href="{{ asset('assets/css/cover.css') }}" rel="stylesheet">

        <!-- Favicons
        ================================================== -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('assets/ico/apple-touch-icon-144-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('assets/ico/apple-touch-icon-114-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('assets/ico/apple-touch-icon-72-precomposed.png') }}">
        <link rel="apple-touch-icon-precomposed" href="{{ asset('assets/ico/apple-touch-icon-57-precomposed.png') }}">
        <link rel="shortcut icon" href="{{ asset('assets/ico/favicon.png') }}">
    </head>

    @yield('header')
</head>

<body>

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

        <div class="inner cover animsition" >

					@yield('content')

        </div><!--/inner cover-->

        <div class="mastfoot cd-section">

          <div class="row">
                <div class="col-lg-8 mastfoot-left">
                  EXPLORE OUR CREEKS AT KEEPINGWATCH.ORG
                </div><!-- /col mastfoot-left-->

                <div class="col-lg-4 mastfoot-right">

                  <!-- row (inner)-->
                  <div class="row">
                    <div class="col-lg-4">
                    </div><!-- /col-->
                    <div class="col-lg-4">
                      <img src="{{ asset('assets/images/uncc_coaa.png') }}" class="logo img-responsive"/>
                    </div><!-- /col-->
                    <div class="col-lg-4">
                      <img src="{{ asset('assets/images/uncc_ui.png') }}" class="logo img-responsive"/>
                    </div><!-- /col-->
                  </div><!-- /row (inner)-->

                </div><!-- /col mastfoot-right-->
          </div>

        </div><!--/mastfoot-->

      </div><!--/cover-container-->

    </div><!--/site-wrapper-inner-->

  </div><!--/site-wrapper-->


  <!-- Modal -->
  <div id="modal" class="modal-video">
      <video id="vplayer" class="video-js vjs-default-skin" width="1280" height="720" autoplay controls>
      <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a web browser
      that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a>
      </p>
      </video>
      
		<div class="my-video-controls">
			
			<div class="vid-left">    
				<button type="button" class="btn btn-primary btn-lg" onclick="Custombox.close();">
				<span>&times;</span>Close
				</button>
			</div>
			
			<div class="vid-right">
				Volume Level
				<div class="btn-group volume-group" data-toggle-name="is_private" data-toggle="buttons-radio">		   	
				<button type="button" class="btn btn-primary btn-lg" id="volLow" value=".40">Low</button>
				<button type="button" class="btn btn-primary btn-lg active" id="volMed" value=".70">Med</button>
				<button type="button" class="btn btn-primary btn-lg" id="volHi"  value=".95">Hi</button>
				</div>
			</div>
		</div><!-- /my-video-controls-->  
      
  </div>

  <!-- Modal -->
  <div id="modal-logo" class="modal-info">
      <h3>Information</h3>
      <div>
        <p>To view this video please enable JavaScript, and consider upgrading to a web browser
        that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
        <button type="button" class="btn btn-primary" onclick="Custombox.close();"> CLOSE ME! </button>
      </div>
  </div>


        <!-- Javascripts
        ================================================== -->
        <script src="{{ asset('assets/js/jquery-2.1.3.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/video.js') }}"></script>
        <script src="{{ asset('assets/js/custombox.min.js') }}"></script>
        <script src="{{ asset('assets/js/bigvideo.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.animsition.min.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>

        @yield('body_bottom')


    </body>
</html>
