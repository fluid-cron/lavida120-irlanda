    <!--jquery-->
    <!--script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/jquery-1.11.0.min.js"></script-->
    <!--script src="<?php echo get_template_directory_uri();?>/modal-120/js/jquery.js"></script-->
    <!--script src="<?php echo get_template_directory_uri();?>/modal-120/js/jquery-ui.js"></script-->
    <!--bootstrap js-->
    <!--script src="<?php echo get_template_directory_uri();?>/modal-120/js/bootstrap.js"></script-->
    <!--script src="<?php echo get_template_directory_uri();?>/modal-120/js/npm.js"></script-->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/fakeLoader/fakeLoader.min.js"></script>
	<script type="text/javascript">
		$(".fakeloader").fakeLoader({
			timeToHide:3000, //Time in milliseconds for fakeLoader disappear
			zIndex:"999",//Default zIndex
			spinner:"spinner2",//Options: 'spinner1', 'spinner2', 'spinner3', 'spinner4', 'spinner5', 'spinner6', 'spinner7'
			bgColor:"#BA0B36" //Hex, RGB or RGBA colors
		});	
		setTimeout(function(){
			$(".shadow-box").show();
		},500);
	</script>  
    
    </body>  
</html>