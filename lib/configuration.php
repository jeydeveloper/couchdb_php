<?php 

class Configuration {

  /*
  public $db_server = '127.0.0.1';
  public $db_port = '5984';
  public $db_database = 'verge';
  public $db_admin_user = 'admin';
  public $db_admin_password = 'rahasia';
  */
  
  public $db_server = 'http://jeydeveloper.cloudant.com/';
  public $db_port = '5984';
  public $db_database = 'api';
  public $db_admin_user = 'jeydeveloper';
  public $db_admin_password = 'okey19aja';
	
  public function __get($property) {
    if (getenv($property)) {
      return getenv($property);
    } else {
      return $this->$property;
    }
  }
  
}