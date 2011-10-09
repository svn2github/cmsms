<?php
# FileManager. A plugin for CMS - CMS Made Simple
# Copyright (c) 2006-08 by Morten Poulsen <morten@poulsen.org>
#
#CMS - CMS Made Simple
#(c)2004 by Ted Kulp (wishy@users.sf.net)
#This project's homepage is: http://www.cmsmadesimple.org
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

final class filemanager_utils
{
  protected function __construct() {} 

  public static function is_valid_filename($name)
  {
    if( $name == '' ) return FALSE;
    if( strpos($name,'/') !== false ) return FALSE;
    if( strpos($name,'\\') !== false ) return FALSE;
    if( strpos($name,'..') !== false ) return FALSE;
    if( $name[0] == '.' || $name[0] == ' ' ) return FALSE;
    if( preg_match('/[\n\r\t\[\]\&\?\<\>\!\@\#\$\%\*\(\)\{\}\|\"\'\:\;\+]/',$name) )
      {
	return FALSE;
      }
    return TRUE;
  }
}

#
# EOF
#
?>