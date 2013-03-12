<!-- jQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js?v=1"></script>
	<script src="js/bootstrap-tooltip.js"></script>
	<script>
		
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34934318-1']);
      _gaq.push(['_trackPageview']);
      _gaq.push(['_trackPageLoadTime']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();



  $(document).ready(function(){
		$('.sponsor-tooltip').tooltip();
  });

   $(".scroll").click(function(event){  
    event.preventDefault();
    $('html,body').animate({scrollTop:$(this.hash).offset().top}, 500);
  });

  $(".toggleMenu").click(function(){
    $("#nav-primary").toggleClass('hover');
  });

	</script>

	<!--[if lt IE 7 ]>
		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
		<script type="text/javascript">window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
	<![endif]-->	