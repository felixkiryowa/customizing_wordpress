<?php

    function awesome_script_enqueue(){
	    wp_enqueue_style('customstyle',get_template_directory_url . 'css/awesome.css',array(),'1.0.0','all');
	}

	
?>