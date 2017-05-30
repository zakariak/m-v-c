<?php
require_once 'model/dbhandler.php';
require_once 'model/createTable.php';

class contactsService {

  private $database;

  public function __construct() {
    $this->database = new DBhandler('localhost', 'mvcdb', 'root', '');
}

public function readContacts($id) {
  $sql = "SELECT * FROM contacten";
  $info = $this->database->ReadData($sql);

$table = new Table();
$tables = $table->createTable($info);

return  $tables;
  }
?>
