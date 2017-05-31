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

public function readContact($id) {
  $sql = "SELECT * FROM contacten WHERE id = $id";
  $info = $this->database->readData($sql);

  $table = new Table();
  $tables = $table->createTable($info);

  return $tables;
}

public function readSelectBox() {
  $sql = "SELECT * FROM contacten";
  $info = $this->database->readData($sql);
  $columnId = "id";
  $columnName = "name";

  $box = new table();
  $box = $box->selectBox($info, $columnId, $columnName);
  return $box;
}

public function nameSelectBox() {
  $sql = "SELECT email FROM contacten";
  $info = $this->database->readData($sql);
  $columnEmail = "email";

}
}
?>
