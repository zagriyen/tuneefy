<?php
  
  // Defines GA Tracker (http://analytics.google.com)
  const _GOOGLE_GA_TRACKER = "0"; 
  
  // Desactivates momentarily the trends access
  const _DESACTIVATE_TRENDS = true;
  
  // Desactivates playlists
  const _DESACTIVATE_PLAYLISTS = true;
  
  // Base for Id <-> GUID
  const _BASE_MULTIPLIER = 123456789;

  // Allow USERVOICE Feedback
  const _USERVOICE_ENABLED = true;
  
  // Social
  const _FB_ADMIN = "XXXXXXX"; 
  const _FB_APP_ID = "YYYYYYYYYY";
  const _FB_APP_SECRET = "ZZZZZZZZZZZ";
  const _FB_PAGE_ID = "UUUUUUUUUU";
  const _GPLUS_PUBLISHER_ID = "https://plus.google.com/TTTTTTTTTTT";

  // Site base url :
  const _SITE_BASE_URL = "";
  const _SITE_URL = "http://www.tuneefy-on-git.com";
  const _API_URL = "http://api.tuneefy-on-git.com";
  
  // Language
  $_LANG = "en";

  // Database info
  $user = "UUUUUUUUUU";
  $password = "XXXXXXXXXXXX";
  $database = "YYYYYYYYYYYY";
  
  // Platforms options
  $options['DEEZER']      = array("key" => null, "secret" => null, "default" => true, "search" => true, "album_search" => false, "lookup" => true, "order" => 1);
  $options['SPOTIFY']     = array("key" => null, "secret" => null, "default" => true, "search" => true, "album_search" => false, "lookup" => true, "order" => 2);
  $options['LASTFM']      = array("key" => null, "secret" => null, "default" => true, "search" => true, "album_search" => false, "lookup" => true, "order" => 4);
  $options['GROOVESHARK'] = array("key" => null, "secret" => null, "default" => true, "search" => true, "album_search" => false, "lookup" => true, "order" => 5);
  // DEPRECATED $options['JIWA'] = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => false);
  $options['SOUNDCLOUD']  = array("key" => null, "secret" => null, "default" => false, "search" => true, "album_search" => false, "lookup" => true, "order" => 8);
  
  $options['HYPEMACHINE'] = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => true, "order" => 9);
  $options['YOUTUBE']     = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => false, "order" => 6);
  $options['MIXCLOUD']    = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => false, "order" => 10);
  $options['MOG']         = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => false, "order" => 11);
  $options['RDIO']        = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => false, "order" => 7);
  $options['ITUNES']      = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => false, "order" => 12);
  $options['ECHONEST']    = array("key" => null, "secret" => null, "default" => false, "search" => false, "album_search" => false, "lookup" => false, "order" => 13);
  $options['QOBUZ']       = array("key" => null, "secret" => null, "default" => true, "search" => false, "album_search" => false, "lookup" => false, "order" => 3);
   
  /** Absolute path to the Tuneefy directory. */
  if ( !defined('_PATH') )
        define('_PATH', dirname(__FILE__) . '/');
        
  require(_PATH.'include/constants.php');