	</div> <!-- /.container -->    
    <footer class="footer">
    	<div class="container">
    		<div class="row">
		    	<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/icon-enerd2.png" alt="Logo footer">
		    	<div class="col-12 col-md-6">
			    	<?php wp_nav_menu(array('theme_location' => 'footer-menu')); ?>
			    </div>
		    	
		    	<div class="address col-6 col-md-3">
		    		<div class="row">
			    		<i class="fas fa-map-marker-alt col-1"></i>
			    		<p class="col-10"><span class="first">Lorem</span><br>
						00 rue xxx<br>
						67000 Strasbourg</p>
					</div>
		    	</div>
		    	<div class="bouton col-6 col-md-3">
		    		<a href="/contact">Contact</a>
		    	</div>
		    </div>

	    </div>

    	<div class="sub-footer">
    		<div class="container">
    			<div class="row">
		    		<p class="col-12 col-md-4"><a href="#">Mentions légales</a></p>
		    		<p class="col-12 col-md-4">Conception Agence digitale Adeliom</p>
		    		<p class="col-12 col-md-4">Tous droits réservés Lorem 2018.</p>
		    	</div>
	    	</div>
    	</div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <?php wp_footer(); ?> 
  </body>
</html>