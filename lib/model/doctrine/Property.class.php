<?php

/**
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class Property extends BaseProperty
{
  /**
   * Overrides parent setter to return mixed vars from the JSON value
   *
   * @return mixed
   * @author Carlos
   **/
  public function getValue()
  {
    return json_decode($this->_get('value'), true);
  }
  
  public function getRawValue()
  {
    return $this->_get('value');
  }
  /**
   * Overrides parent setter to force JSON values
   *
   * @return mixed
   * @author Carlos
   **/
  public function setValue($v)
  {
    return $this->_set('value', json_encode($v));
  }
  /**
   * Allows straightforward setting a value
   *
   * @return mixed
   * @author JoeZ
   */
  public function setRawValue($v)
  {
    return $this->_set('value', $v);
  }
  
  public function postSave($event)
  {
    // TODO: here if changes the currency decimals, probably status of all invoices must be evaluated again
  }
}