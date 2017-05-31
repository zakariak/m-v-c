<?php

require_once 'model/ContactsService.php';

class ContactsController {

  private $contactsService = NULL;

  public function __construct() {
    $this->contactsService = new contactsService();
  }

  public function handleRequest() {
    $op = isset($_GET['op'])?$_GET['op']:NULL;
    try {

      if (!$op || $op == 'list') {
        $this->readAllData();
      } elseif ( $op == 'new') {
        $this->createData();
      } elseif ( $op == 'delete') {
        $this->deleteData();
      } elseif ( $op == 'show') {
        $this->readData();
      } else {
        $this-->showError("Page not found", "page for operation ".$op. " was not found!");
      }
    } catch ( Exception $e ) {
      $this->showError("Application error", $e->GetMessage());
    }
  }

  public function readAllData() {
    $orderby = isset($_GET['orderby'])?$_GET['orderby']:NULL;
    $contacts = $this->contactsService->readContacts($orderby);
    $box = $this->contactsService->readSelectBox();
    require_once 'view/contacts.php';
  }

  public function readData() {
    $id = isset($_GET['id'])?$_GET['id']:NULL;
    $result = $this->contactsService->readContact($id);
    require_once 'view/contacten.php';
  }
}
?>
