<?php
/**
name: Analytics
url: http://adampatterson.ca/
version: 1.0
description: Generates GA tracking code;
author:
   name: Adam Patterson
   url: http://adampatterson.ca/
 */

event::on('theme_header', 'analytics::tracking');
event::on('plugin_navigation', 'analytics::settings_nav', 8);

class analytics{

    static function settings_nav() {
        $nav[] = array(
            'title'     => 'Analytics',
            'route'      => 'analytic_settings',
            'uri'       => 'analytics/view'
        );

        return $nav;
    }


    static function tracking(){
echo "
<script type='text/javascript'>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', '".get::option('tracking_code', '')."']);
  _gaq.push(['_setDomainName', '".$_SERVER['SERVER_NAME'] ."']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>";
    }

}
