<?php // -*- mode:php; tab-width:4; indent-tabs-mode:t; c-basic-offset:4; -*-
#CMS - CMS Made Simple
#(c)2004-2012 by Ted Kulp (ted@cmsmadesimple.org)
#This project's homepage is: http://cmsmadesimple.org
#
#This program is free software; you can redistribute it and/or modify
#it under the terms of the GNU General Public License as published by
#the Free Software Foundation; either version 2 of the License, or
#(at your option) any later version.
#
#This program is distributed in the hope that it will be useful,
#but WITHOUT ANY WARRANTY; without even the implied warranty of
#MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
#GNU General Public License for more details.
#You should have received a copy of the GNU General Public License
#along with this program; if not, write to the Free Software
#Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
#
#$Id$

/**
 * @package CMS
 */

/**
 * A static class for interacting with the session.
 * This class should be used instead of using $_SESSION dirctly.
 *
 * Note: if the session is not already running, it will be created which could 
 * result in a cookie being placed on the client machine.
 *
 * @since 1.11
 * @package CMS
 * @author Robert Campbell (calguy1000@cmsmadesimple.org)
 */
final class cms_session
{
  private function __construct() {}
  private static $_name;

  /**
   * Set the session name.
   * Note, this method can only be called once.  If a session key already exists, this method will do nothing.
   *
   * @param string Key the session key.  Should be relatively unique to this installation.
   * @return void
   */
  public static function set_name($key)
  {
    if( !$key ) return;
    if( self::$_name != '' ) return;
    self::$_name = $key;
  }

  public static function name()
  {
    if( !self::$_name ) {
      return 'CMSSESSID'.substr(md5(dirname(__FILE__)), 0, 8);
    }
    else {
      return self::$_name;
    }
  }

  /**
   * Test to see if the session has already been started.
   *
   * @return boolean
   */
  public static function is_initialized()
  {
    return @session_id() != '';
  }

  /**
   * Initialize the session (if it has not been started already).
   *
   * @return void
   */
  public static function start()
  {
    if( !self::is_initialized() ) {
      @session_name(self::name());
      if( !@session_id() ) @session_start();

      if(get_magic_quotes_gpc()) {
	stripslashes_deep($_SESSION);
      }
    }
  }

  /**
   * Test if a session variable exists.
   * This method will not initialize the session.
   *
   * @param string The session variable name.
   * @return boolean
   */
  public static function exists($key)
  {
    if( !$key ) return;
    //self::start();
    return isset($_SESSION[$key]);
  }

  /**
   * Create, or overwrite a session varialbe.
   * This method will initialize the session if necessary.
   *
   * @param string The session variable name
   * @param mixed  The variable value.
   * @return void
   */
  public static function set($key,$val)
  {
    if( !$key ) return;
    self::start();
    $_SESSION[$key] = $val;
  }

  /**
   * Retrieve the value of a session variable.
   * This method will initialize the session if necessary.
   *
   * @param string The session variable name
   * @return mixed The variable value, if it exists.  or null.
   */
  public static function get($key)
  {
    if( !$key ) return;
    self::start();
    if( isset($_SESSION[$key]) )
      return $_SESSION[$key];
  }

  /**
   * Unset a session variable.
   * This method will initialize the session if necessary.
   *
   * @param string The session variable name
   * @return void
   */
  public static function erase($key)
  {
    if( !$key ) return;
    self::start();
    if( isset($_SESSION[$key])  )
      unset( $_SESSION[$key] );
  }
}

#
# EOF
#
?>