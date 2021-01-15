<?php
class SystemComponent {

    function getSettings() {
			
        // Database variables
		
        $settings["dbhost_wp"] = "localhost";
        $settings["dbname_wp"] = "";
        $settings["dbusername_wp"] = "";
        $settings["dbpassword_wp"] = '';
		
        $settings["dbhost"] = "localhost";
        $settings["dbname"] = "tagapp";
        $settings["dbusername"] = "root";
        $settings["dbpassword"] = "";
		
		$settings["upfolder"] = "http://localhost/tagapp/upload_images/items/";
		$settings["upfolderserver"] = "/tagapp/upload_images/items/images/";
		
		/*
		
        $settings["dbhost"] = "localhost";
        $settings["dbname"] = "";
        $settings["dbusername"] = "";
        $settings["dbpassword"] = "";
		$settings["upfolder"] = "";
		$settings["upfolderserver"] = "/home/lodkost/public_html/ssProjects/osiris/images/";
		
        $settings["dbname"] = "";
        $settings["dbusername"] = "";
        $settings["dbpassword"] = "";
		$settings["upfolder"] = "/osiris5/images/";
		$settings["upfolderserver"] = "/home/critterc/public_html/ssProjects/osiris/scripts/imgs/";
		
		*/
		
        return $settings;
    }
}
?>
