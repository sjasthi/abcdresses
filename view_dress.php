<?php $page_title = 'View Dress'; ?>
<?php $page_title = 'ABC Dresses > View Dress'; ?>
<?php 
    require 'bin/functions.php';
    require 'db_configuration.php';
    $left_buttons = "NO";
    include('nav.php');
    //$page="dresses_list.php";

    //verifyLogin($page);
?>

<!-- Code for implementing and styling the tabs is from :
https://www.w3schools.com/howto/howto_js_tabs.asp
 -->
<style>
body {font-family: Arial;}

/* Style the tab */
.tab {
  overflow: hidden;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
}

/* Style the buttons inside the tab */
.tab button {
  background-color: inherit;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current tablink class */
.tab button.active {
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent {
  display: none;
  padding: 6px 12px;
  border: 1px solid #ccc;
  border-top: none;
}
</style>

</head>

<?php
include_once 'db_configuration.php';

if (isset($_GET['id'])){

    $id = $_GET['id'];
    
    $sql = "SELECT * FROM dresses
            WHERE id = '$id'";

    if (!$result = $db->query($sql)) {
        die ('There was an error running query[' . $connection->error . ']');
    }//end if
    
}//end if

// Sets the default tab to open in 'form' view if no url param is specified
$tab_mode = 'form';
// If the 'mode' url parameter is used, the default tab is set
if (isset($_GET['mode'])){

  $tab_mode = $_GET['mode'];
  
}//end if
?>

<body>

<div class="tab">
	<button class="tablinks" onclick="openTab(event, 'Form')" id="form_mode">Form</button>
  <button class="tablinks" onclick="openTab(event, 'DesignImage')"id="image_mode">Design Image</button>
  <button class="tablinks" onclick="openTab(event, 'FinalDesign')"id="final_design">Final Design</button>
</div>

<div id="Form" class="tabcontent">
  <?php
  if ($result->num_rows > 0) {

    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo '<form action="view_the_dress.php" method="POST">
        
    <div>
      <label for="id">Id</label>
      <input type="text" class="form-control" name="id" value="'.$row["id"].'"  maxlength="5" readonly>
    </div>
    
    <div>
      <label for="name">name</label>
      <input type="text" class="form-control" name="name" value="'.$row["name"].'"  maxlength="255" readonly>
    </div>
    
    <div>
      <label for="category">description</label>
      <input type="text" class="form-control" name="description" value="'.$row["description"].'"  maxlength="255" readonly>
    </div>
        
    <div>
      <label for="level">did_you_know</label>
      <input type="text" class="form-control" name="did_you_know" value="'.$row["did_you_know"].'"  maxlength="255" readonly>
    </div>
        
    <div>
      <label for="facilitator">category</label>
      <input type="text" class="form-control" name="category" value="'.$row["category"].'"  maxlength="255" readonly>
    </div>
    
    <div>
      <label for="description">type</label>
      <input type="text" class="form-control" name="type" value="'.$row["type"].'"  maxlength="255" readonly>
    </div>
    
    <div>
      <label for="required">state_name</label>
      <input type="text" class="form-control" name="state_name" value="'.$row["state_name"].'"  maxlength="255" readonly>
    </div>
    
    <div>
      <label for="optional">key_words</label>
      <input type="text" class="form-control" name="key_words" value="'.$row["key_words"].'"  maxlength="255" readonly>
    </div>

    
    
    </div>

    <div id="DesignImage" class="tabcontent">
      <label for="cadence"></label>
      <img width = "400"  src="' . "./images/dress_images/" .$row["dress_image"]. '" alt="'.$row["dress_image"]. '"></td>
    </div>
    
    <div id="FinalDesign" class="tabcontent">
      <label for="final_design"></label>
      <img width = "400"  src="' . "./images/final_designs/" .$row["final_design"]. '" alt="'.$row["final_design"]. '"></td>
    </div>
    
    </form>'
    ;
    
    }//end while
    }//end if
    ?>
<button><a class="btn btn-sm" href="dresses_list.php">Back to Dress List</a></button>

<script>
var tab_mode = "<?php echo $tab_mode ?>";
if (tab_mode == "image"){
  document.getElementById("image_mode").click();
} else if (tab_mode == "form") {
  document.getElementById("form_mode").click();
} else if (tab_mode == "final_design") {
  document.getElementById("final_design").click();
}
// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
function openTab(evt, tabName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(tabName).style.display = "block";
  evt.currentTarget.className += " active";
}
</script>
   
</body>
</html> 
