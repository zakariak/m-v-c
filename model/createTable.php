<?php
  class Table {
      public function createTable($res) {
          $view = '';
          $view .= "<table>";
          foreach($res as $row) {
              $view .= "<tr>";
                  foreach($row as $key => $val) {
                      if($key == 'id') {
                          $view.= "<td><a href='index.php?op=show&id=". $val . "'>" . $val . "</a></td>";
                      } else {
                          $view .= "<td>" . $val . "</td>";
                      }
                  }
              $view .= "</tr>";
          }
          $view .= "</table>";

          $view .= "<select>";
          foreach($res as $row) {
          $view .= "<option>";
          }
          
          $view .= "</select>";
          return($view);
      }
  }

    ?>
