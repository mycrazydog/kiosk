
    $(function () {

      var BV = new $.BigVideo({useFlashForFirefox:false, ambient:true,doLoop:true, preload:true});
      BV.init();
      BV.show('http://127.0.0.1/videos/background.mp4');

      var vPlayer = videojs('vplayer', { /* Options */ }, function() {
        //console.log('Good to go!');
        //this.play(); // if you don't trust autoplay for some reason
        // How about an event listener?
        this.on('error', function(event){
          var URL = "http://127.0.0.1"
          window.location = URL;
        });


        this.on('ended', function() {
          //console.log('awww...over so soon?');
          Custombox.close();

        });
      });

      $('.touch').on('click', function ( e ) {

        pauseVid();

        //alert($(this).data("id"));
        var vId = $(this).data("id");
        var vEType = $(this).data("type");
        var vFilePath = "/videos/" + vId + "." + vEType;


        var vType = vEType == "mp4" ? "video/mp4" : "video/flv";
        //console.log(vType + '----' + vFilePath);

        vPlayer.src({ src: vFilePath, type: vType });



          Custombox.open({
              target: '#modal',
              effect: 'fadein',
              width:1280,
              close: function() {
                vPlayer.pause();

                //This was maddening both videos stop, and could not be immediately restarted
                setTimeout(playVid, 500)
              }
          });

          vPlayer.play();
         
         //preset volume when load
         vPlayer.volume(.70);

          
          
         //change volume when clicked
          $(".volume-group .btn").click(function() {
              // whenever a button is clicked, set the hidden helper              
              var myVol = $(this).val();
              vPlayer.volume(myVol);
              
              $(".volume-group .btn").removeClass('active');
              $(this).addClass('active');
              //$(this).button("toggle");
          }); 
          

	    //This fullscreen works well, just uncomment to get back
        //  vPlayer.requestFullscreen();
          e.preventDefault();

      });



      function playVid(){
          ////$('#big-video-vid_html5_api.vjs-tech').get(0).play();
          //$('#big-video-vid_html5_api').play();
          BV.getPlayer().play();
      }

      function pauseVid() {
        $('video').each(function () {
            this.pause();
        });
      }
      


    /*
    $('.logo').on('click', function ( e ) {
        Custombox.open({
            target: '#modal-logo',
            effect: 'contentscale',
            width:1200,
            overlayOpacity: .9,
            position: 'center, center',
            close: function() {
              //This was maddening both videos stop, and could not be immediately restarted
              setTimeout(playVid, 500);
            },
            complete: function() {

              setInterval(function () {Custombox.close()}, 20000);
            }
        });
        e.preventDefault();
    });
    */

    $('.btn-back').on('click', function ( e ) {
      var URL = "http://127.0.0.1"
      window.location = URL;
    });




$(".animsition").animsition({

  inClass               :   'fade-in',
  outClass              :   'fade-out',
  inDuration            :    2500,
  outDuration           :    1800,
  linkElement           :   '.animsition-link',
  // e.g. linkElement   :   'a:not([target="_blank"]):not([href^=#])'
  loading               :    true,
  loadingParentElement  :   'body', //animsition wrapper element
  loadingClass          :   'animsition-loading',
  unSupportCss          : [ 'animation-duration',
                            '-webkit-animation-duration',
                            '-o-animation-duration'
                          ],
  //"unSupportCss" option allows you to disable the "animsition" in case the css property in the array is not supported by your browser.
  //The default setting is to disable the "animsition" in a browser that does not support "animation-duration".

  overlay               :   false,

  overlayClass          :   'animsition-overlay-slide',
  overlayParentElement  :   'body'
});



    });
