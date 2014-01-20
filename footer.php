			</section>
			<footer>
    	<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>		
		<div id="copyright">&copy; Ample Technologies <?php echo date("Y");?></div>
	</footer>


	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> 
	<script src="<?php bloginfo('template_url');?>/js/jquery.magnific-popup.js"></script> 
	<script type='text/javascript' src='<?php bloginfo('template_url');?>/js/responsiveslides.min.js'></script>

		<script type="text/javascript">
      $(document).ready(function() {

        $('.popup').magnificPopup({
          type: 'ajax',
          alignTop: true,
          overflowY: 'scroll' // as we know that popup content is tall we set scroll overflow by default to avoid jump
        });
        $('.rslides, .menu-popup').each(function() 
        	{ // the containers for all your galleries
		    $(this).find('a').magnificPopup({
		        type: 'ajax',
		        gallery: {
		          enabled:false
		        	}
		    	});
		});       
      });
    </script>
	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
	<script type="text/javascript">
	var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-23533479-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

</body>

</html>
