<footer>
    <div class="grid-100 bg-gris-footer">
      <div class="logo-footer">
        <?php if ( is_active_sidebar( 'logo-footer' ) ) : dynamic_sidebar( 'logo-footer' ); endif; ?>
      </div>
    </div>
  </footer>


  <link href="<?php echo get_template_directory_uri();?>/assets/css/font-awesome.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri();?>/assets/css/swipebox.min.css" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery-1.11.0.min.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script src="<?php echo get_template_directory_uri();?>/assets/js/jquery.swipebox.min.js"></script>
  <link href="<?php echo get_template_directory_uri();?>/assets/css/swiper.min.css" rel="stylesheet">
  <script src="<?php echo get_template_directory_uri();?>/assets/js/swiper.min.js"></script>
  <!-- Add venobox -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/assets/venobox/venobox.css" type="text/css" media="screen" />
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/venobox/venobox.min.js"></script>
  <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/fakeLoader/fakeLoader.min.js"></script>

  <script src="<?php echo get_template_directory_uri();?>/assets/js/utils.js"></script>

  <script>
    function openNav() {
      document.getElementById("mySidenav").style.width ="100%";
    }
    function closeNav() {
      document.getElementById("mySidenav").style.width ="0";
    }
  </script>
  <script type="text/javascript">
    ;( function( $ ) {

        $("#mySidenav a").click(function(){ closeNav(); })

        //$( '.swipebox' ).swipebox({ autoplayVideos: true });

        var height = $(window).height();
        var width = $(window).width();

        $('.venobox_custom').venobox({
          //framewidth: '1000px',        // default: ''
          frameheight: height-100,       // default: ''
          border: 0,             // default: '0'
          bgcolor: '#BA0B36',         // default: '#fff'
          titleattr: '',    // default: 'title'
          numeratio: false,            // default: false
          infinigall: false            // default: false
        });

       $('.swipebox').swipebox({ autoplayVideos: true });

    })( jQuery );
  </script>
  <script>

    var swiper = new Swiper('.swiper-container1', {
      pagination: '.swiper-container1 .swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-container1 .swiper-button-next',
      prevButton: '.swiper-container1 .swiper-button-prev',
    });

    var swiper = new Swiper('.swiper-container2', {
      pagination: '.swiper-container2 .swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-container2 .swiper-button-next',
      prevButton: '.swiper-container2 .swiper-button-prev',
    });

    var swiper = new Swiper('.swiper-container-tab1', {
      pagination: '.swiper-container-tab1 .swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-container-tab1 .swiper-button-next',
      prevButton: '.swiper-container-tab1 .swiper-button-prev',
      slidesPerView : 2
    });    

    var swiper = new Swiper('.swiper-container-tab2', {
      pagination: '.swiper-container-tab2 .swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-container-tab2 .swiper-button-next',
      prevButton: '.swiper-container-tab2 .swiper-button-prev',
      slidesPerView : 2
    });    

    var swiper = new Swiper('.swiper-container-tab3', {
      pagination: '.swiper-container-tab3 .swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-container-tab3 .swiper-button-next',
      prevButton: '.swiper-container-tab3 .swiper-button-prev',
      slidesPerView : 2
    });     

    var swiper = new Swiper('.swiper-container-videos-home', {
      pagination: '.swiper-container-videos-home .swiper-pagination',
      paginationClickable: true,
      nextButton: '.swiper-container-videos-home .swiper-button-next',
      prevButton: '.swiper-container-videos-home .swiper-button-prev',
      slidesPerView : 1
    });                    

  </script>
  <script>
    $( function() {
      $( "#tabs" ).tabs();
    } );
  </script>
</body>