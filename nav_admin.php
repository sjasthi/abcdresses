<?php?>

<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="styles/main_style.css" type="text/css">
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- jQuery library -->
        <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="styles/custom_nav.css" type="text/css">
        <title>ABC Dresses</title>
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/datatables/1.10.12/css/dataTables.bootstrap.min.css" rel="stylesheet"/>
        <!-- Custom styles for this template -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.5.2/css/buttons.dataTables.min.css">
        <!-- Main style sheet -->
        <link rel="stylesheet" href="./mainStyleSheet.css">
      
    </head>

<body class="body_background">
  <div id="wrap_admin">
    <table>
        <th>ADMIN FUNCTIONS</th>
        <tr>
          <td><?php //if($nav_selected == "FIX_NAMES"){ echo 'class="current-page"'; } ?>
            <a href="fix_names.php">
              <img src="./images/icons/image33.png" height="60px" width="60px">
              Fix Image Names
            </a> 
          </td>
        </tr>
        <tr>
          <td><?php //if($nav_selected == "USER_LIST"){ echo 'class="current-page"'; } ?>
            <a href="user_list.php">  
              <img src="./images/icons/admin_users.png" height="60px" width="60px">
              User Management  
            </a>
          </td>
        </tr>
        <tr>
          <td><?php //if($nav_selected == "IMPORT"){ echo 'class="current-page"'; } ?>
            <a href="admin_import.php">  
              <img src="./images/icons/admin_import.png" height="60px" width="60px">
              Import (CSV format) 
            </a>
          </td>
        </tr>        
        <tr> 
          <td><?php //if($nav_selected == "EXPORT"){ echo 'class="current-page"'; } ?>
            <a href="admin_export.php">
              <img src="./images/icons/admin_export.png" height="60px" width="60px">
              Export (CSV format)      
            </a>
          </td>
        </tr>
    </table>  
  </div>
</body>
</html>