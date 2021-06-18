<?php

 /*
 Plugin Name: About Us Plugin
 Plugin URI: http://aboutus.com/plugin 
 Description: This is my first attempt on writing a custom Plugin.
 Version: 1.0.0
 Author: Mohammed Kabli
 Author URI: https://github.com/mohammedkabli
 License: GPLv2 or later
 Text Domain: about-us-plugin
 */


function ok(){
 return require "./index.php";

}
add_shortcode('slide', 'ok');
?>





