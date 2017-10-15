<?php

    include 'header.php';
    include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Change Title</h1>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-sm-6'>


<form name="changeTitleForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="imageID">ID of Image: </label>
      <input class="form-control" id="imageID" style='width:40%;' type="text" name="imageID"/>
      </div>

      <div>
      <label class="control-label" for="englishTitle">English Title: </label>
      <input class="form-control" id="englishTitle" style='width:40%;' type="text" name="englishTitle"/>
      </div>


      <div>
      <label class="control-label" for="russianTitle">Russian Title: </label>
      <input class="form-control" id="russianTitle" style='width:40%;' type="text" name="russianTitle"/>
      </div>

      <br/>
      <br/>
      <input class="btn btn-primary" type="submit" value="Add Canvas Title" name="addCanvasTitle" id="addCanvasTitle" />

      <br/>
      <br/>
      <input class="btn btn-primary" type="submit" value="Add Tattoo Title" name="addTattooTitle" id="addTattooTitle" />

      <br/>
      <br/>
      <input class="btn btn-primary" type="submit" value="Add Tattoo Sketch Title" name="addTattoSketchTitle" id="addTattoSketchTitle" />

      <br/>
      <br/>
      <input class="btn btn-primary" type="submit" value="Add Sketch Title" name="addSketchTitle" id="addSketchTitle" />

      <br/>
      <br/>
      <input class="btn btn-primary" type="submit" value="Add Web Art Title" name="addWebArtTitle" id="addWebArtTitle" />

      <br/>
      <br/>
      <input class="btn btn-primary" type="submit" value="Add New Way Web Art Title" name="addNewWayWebTitle" id="addNewWayWebTitle" />

      <br/>
      <br/>
      <input class="btn btn-primary" type="submit" value="Add iPad Drawing Title" name="addiPadDrawTitle" id="addiPadDrawTitle" />

  </form>


<?php
  if(isset($_POST['addCanvasTitle']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['imageID'];
    $englishTitle = $_POST['englishTitle'];
    $russianTitle = $_POST['russianTitle'];

    $query = "UPDATE galCanvas SET title='$englishTitle' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':englishTitle', $englishTitle, PDO::PARAM_STR);
    $statement->bindValue(':russianTitle', $russianTitle, PDO::PARAM_STR);
    $statement->execute();

    echo "Canvas title updated";

    $conn=null;
  }
?>


<?php
  if(isset($_POST['addTattooTitle']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['imageID'];
    $englishTitle = $_POST['englishTitle'];
    $russianTitle = $_POST['russianTitle'];

    $query = "UPDATE galTattoos SET title='$englishTitle' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':englishTitle', $englishTitle, PDO::PARAM_STR);
    $statement->bindValue(':russianTitle', $russianTitle, PDO::PARAM_STR);
    $statement->execute();

    echo "Tattoo title updated";

    $conn=null;
  }
?>

<?php
  if(isset($_POST['addTattoSketchTitle']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['imageID'];
    $englishTitle = $_POST['englishTitle'];
    $russianTitle = $_POST['russianTitle'];

    $query = "UPDATE galTattooSketch SET title='$englishTitle' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':englishTitle', $englishTitle, PDO::PARAM_STR);
    $statement->bindValue(':russianTitle', $russianTitle, PDO::PARAM_STR);
    $statement->execute();

    echo "Tattoo Sketch title updated";

    $conn=null;
  }
?>

<?php
  if(isset($_POST['addSketchTitle']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['imageID'];
    $englishTitle = $_POST['englishTitle'];
    $russianTitle = $_POST['russianTitle'];

    $query = "UPDATE galSketch SET title='$englishTitle' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':englishTitle', $englishTitle, PDO::PARAM_STR);
    $statement->bindValue(':russianTitle', $russianTitle, PDO::PARAM_STR);
    $statement->execute();

    echo "Sketch title updated";

    $conn=null;
  }
?>

<?php
  if(isset($_POST['addWebArtTitle']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['imageID'];
    $englishTitle = $_POST['englishTitle'];
    $russianTitle = $_POST['russianTitle'];

    $query = "UPDATE galWeb SET title='$englishTitle' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':englishTitle', $englishTitle, PDO::PARAM_STR);
    $statement->bindValue(':russianTitle', $russianTitle, PDO::PARAM_STR);
    $statement->execute();

    echo "Web Art title updated";

    $conn=null;
  }
?>

<?php
  if(isset($_POST['addNewWayWebTitle']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['imageID'];
    $englishTitle = $_POST['englishTitle'];
    $russianTitle = $_POST['russianTitle'];

    $query = "UPDATE galNewWayWeb SET title='$englishTitle' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':englishTitle', $englishTitle, PDO::PARAM_STR);
    $statement->bindValue(':russianTitle', $russianTitle, PDO::PARAM_STR);
    $statement->execute();

    echo "New Way Web Art title updated";

    $conn=null;
  }
?>

<?php
  if(isset($_POST['addiPadDrawTitle']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['imageID'];
    $englishTitle = $_POST['englishTitle'];
    $russianTitle = $_POST['russianTitle'];

    $query = "UPDATE galIPad SET title='$englishTitle' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':englishTitle', $englishTitle, PDO::PARAM_STR);
    $statement->bindValue(':russianTitle', $russianTitle, PDO::PARAM_STR);
    $statement->execute();

    echo "iPad Drawing title updated";

    $conn=null;
  }
?>
	


         		</div><!--end col-lg-6-->

			<div class='col-sm-6'>

			

			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>

         	


    </div> <!--end page wrapper-->
