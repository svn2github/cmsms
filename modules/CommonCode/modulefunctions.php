<?php
#CommonCode. A plugin for CMS - CMS Made Simple
#Copyright (c) 2004 by Rob Allen <rob@akrabat.com>
#This project's homepage is: http://www.akrabat.com
#
#CMS- CMS Made Simple is Copyright (c) Ted Kulp (wishy@users.sf.net)
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


/**
* @return void
* @param string $url
* @desc Redirect to $url regardless of whether headers
* 		have been sent or not.
*/
function RedirectTo($url)
{
	while (@ob_end_clean()); // clear any output buffers

	if(headers_sent())
	{
		echo '<script type="text/javascript">
					<!--
						location.replace("'.$url.'");
					// -->
					</script>
					<noscript>
						<meta http-equiv="Refresh" content="0;URL='.$url.'">
					</noscript>';
	}
	else
	{
		header("Location: $url");
	}
	exit;
}

/**
* @return string
* @param mixed $var
* @param string $title (optional)
* @param boolean $echo_to_screen (optional)
* @desc Debug function to display $var in an easy to
*		read way.
*/
function DB($var, $title="", $echo_to_screen = true)
{
	$titleText = "Debug: ";
	if($title)
	{
		$titleText = "Debug display of '$title':";
	}

	ob_start();
	echo "<p><b>$titleText</b><pre>\n";
	if(is_array($var))
	{
		echo "Number of elements: " . count($var) . "\n";
		print_r($var);
	}
	elseif(is_object($var))
	{
		print_r($var);
	}
	elseif(is_string($var))
	{
		print_r(htmlentities(str_replace("\t", '  ', $var)));
	}
	elseif(is_bool($var))
	{
		echo $var === true ? 'true' : 'false';
	}
	else
	{
		print_r($var);
	}

	echo "</pre></p>\n";
	$output = ob_get_contents();
	ob_end_clean();

	if($echo_to_screen)
	{
		echo $output;
	}

	return $output;
}

/**
* @return mixed
* @param string $value
* @param mixed $default_value (optional)
* @param string $session_key (optional)
* @desc Retrieve value from $_REQUEST. Returns $default_value if
*		value is not in $_REQUEST or is not the same basic type as
*		$default_value.
*		If $session_key is set, then will return session value in preference
*		to $default_value if $_REQUEST[$value] is not set.
*/
function getRequestValue($value, $default_value = '', $session_key = '')
{
	if($session_key != '')
	{
		if(isset($_SESSION['request_values'][$session_key][$value]))
		{
			$default_value = $_SESSION['request_values'][$session_key][$value];
		}
	}
	if(isset($_REQUEST[$value]))
	{
		$result = getValueWithDefault($_REQUEST[$value], $default_value);
	}
	else
	{
		$result = $default_value;
	}

	if($session_key != '')
	{
		$_SESSION['request_values'][$session_key][$value] = $result;
	}

	return $result;
}

/**
* @return mixed
* @param string $value
* @param mixed $default_value
* @desc Return $value if it's set and same basic type as $default_value,
*			otherwise return $default_value. Note. Also will trim($value)
*			if $value is not numeric.
*/
function getValueWithDefault($value, $default_value = '')
{
	// is $default_value a number?
	$is_number = false;
	if(is_numeric($default_value))
	{
		$is_number = true;
	}

	// set our return value to the default initially and overwrite with $value if we like it.
	$return_value = $default_value;
	if(is_array($value))
	{
		// $value is an array - validate each element.
		$return_value = array();
		foreach($value as $element)
		{
			$return_value[] = getValueWithDefault($element, $default_value);
		}
	}
	else
	{
		if($is_number)
		{
			if(is_numeric($value))
			{
				$return_value = $value;
			}
		}
		else
		{
			$return_value = trim($value);
		}
	}
	return $return_value;
}

function getParamValue($value, $params, $default = '')
{
	$return_value = $default;
	
	if(is_bool($default))
	{
		// want a boolean return_value
		if(isset($params[$id.$value]))
		{
			$return_value = settype($params[$id.$value], 'boolean');
		}
		else if(isset($params[$value]))
		{
			$return_value = settype($params["display_approved"], 'boolean');
		}
	}
	else
	{
		if(isset($params[$id.$value]))
		{
			$return_value = $params[$id.$value];
		}
		else if(isset($params[$value]))
		{
			$return_value = $params[$value];
		}
	}	
	return $return_value;
}

# vim:ts=4 sw=4 noet
?>
