<?php

class news_field
{
  private $_data = array();

  public function _get_data($key)
  {
    if( isset($this->_data[$key]) ) return $this->_data[$key];
  }

  public function __get($key)
  {
    switch( $key )
      {
      case 'alias':
	$alias = munge_string_to_url($this->name);
	return $alias;
	
      case 'id':
      case 'name':
      case 'type':
      case 'max_length':
      case 'create_date':
      case 'modified_date':
      case 'item_order':
      case 'public':
      case 'value':
	return $this->_data[$key];
      }
  }

  public function __isset($key)
  {
    switch( $key )
      {
      case 'alias':
      case 'id':
      case 'name':
      case 'type':
      case 'max_length':
      case 'create_date':
      case 'modified_date':
      case 'item_order':
      case 'public':
      case 'value':
	return TRUE;
      default:
	return FALSE;
      }
  }


  public function __set($key,$value)
  {
    switch( $key )
      {
      case 'id':
      case 'name':
      case 'type':
      case 'max_length':
      case 'item_order':
      case 'public':
      case 'value':
	$this->_data[$key] = $value;
	break;

      case 'alias':
      case 'create_date':
      case 'modified_date':
      default:
	throw new Exception('Attempt to set invalid data into field object: '.$key);
      }
  }

}


?>