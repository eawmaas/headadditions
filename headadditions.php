<?php
    class headadditions extends Modules {

		public function end_head() {
			
		// fetch stylesheet
		echo "\r\n<link rel=\"stylesheet\" href=\"/test3/modules/headadditions/headadditions_styles.css\" media=\"all\">\r\n\r\n";
		
		// load scriptfile
		include "headadditions_scripts.php";

		// load SEO-file
		include "headadditions_seo.php";
        }

    }
