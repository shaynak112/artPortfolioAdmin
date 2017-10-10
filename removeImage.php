<?php

    include 'header.php';
    include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-sm-12">
                    <h1>Remove Image</h1>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-sm-3'>

                    <h2>Remove Image From Canvas</h2>
	
    <form name="removeImgCanvas" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeCanvasID">ID of Image to Remove: </label>
      <input class="form-control" id="removeCanvasID" style='width:60%;' type="text" name="removeCanvasID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Image" name="removeCanvasSubmit" id="removeCanvasSubmit" />

  </form>

<?php
  if(isset($_POST['removeCanvasSubmit']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeCanvasID'];

    $query = "UPDATE galCanvas SET active='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Canvas image removed";

    $conn=null;
  }
?>

         		</div><!--end col-lg-6-->

			<div class='col-sm-3'>
                <h2>Remove Image From Tattoos</h2>

			    <form name="removeImgTattoos" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeTattoosID">ID of Image to Remove: </label>
      <input class="form-control" id="removeTattoosID" style='width:60%;' type="text" name="removeTattoosID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Image" name="removeTattoosSubmit" id="removeTattoosSubmit" />

  </form>

<?php
  if(isset($_POST['removeTattoosSubmit']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeTattoosID'];

    $query = "UPDATE galTattoos SET active='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo image removed";

    $conn=null;
  }
?>

			</div><!--end col-sm-3-->

            <div class='col-sm-3'>
                <h2>Remove Image From Tattoo Sketch</h2>

                <form name="removeImgTattooSketch" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeTattooSketchID">ID of Image to Remove: </label>
      <input class="form-control" id="removeTattooSketchID" style='width:60%;' type="text" name="removeTattooSketchID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Image" name="removeTattooSketchSubmit" id="removeTattooSketchSubmit" />

  </form>

<?php
  if(isset($_POST['removeTattooSketchSubmit']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeTattooSketchID'];

    $query = "UPDATE galTattooSketch SET active='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo Sketch image removed";

    $conn=null;
  }
?>
            

            </div><!--end col-sm-3-->



            <div class='col-sm-3'>
                <h2>Remove Image From Sketch</h2>

                <form name="removeImgSketch" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeSketchID">ID of Image to Remove: </label>
      <input class="form-control" id="removeSketchID" style='width:60%;' type="text" name="removeSketchID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Image" name="removeSketchSubmit" id="removeSketchSubmit" />

  </form>

<?php
  if(isset($_POST['removeSketchSubmit']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeSketchID'];

    $query = "UPDATE galSketch SET active='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Sketch image removed";

    $conn=null;
  }
?>            

            </div><!--end col-sm-3-->

         	</div><!--end row-->



                        <div class='row'>
                <div class='col-sm-3'>

                    <h2>Remove Image From Web Art</h2>
    
    <form name="removeImgWebArt" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeWebArtID">ID of Image to Remove: </label>
      <input class="form-control" id="removeWebArtID" style='width:60%;' type="text" name="removeWebArtID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Image" name="removeWebArtSubmit" id="removeWebArtSubmit" />

  </form>

<?php
  if(isset($_POST['removeWebArtSubmit']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeWebArtID'];

    $query = "UPDATE galWeb SET active='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Web Art image removed";

    $conn=null;
  }
?> 

                </div><!--end col-lg-6-->

            <div class='col-sm-3'>
                <h2>Remove Image From New Way Web Art</h2>

    <form name="removeImgNewWebArt" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeNewWebArtID">ID of Image to Remove: </label>
      <input class="form-control" id="removeNewWebArtID" style='width:60%;' type="text" name="removeNewWebArtID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Image" name="removeNewWebArtSubmit" id="removeNewWebArtSubmit" />

  </form>

<?php
  if(isset($_POST['removeNewWebArtSubmit']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeNewWebArtID'];

    $query = "UPDATE galNewWayWeb SET active='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "New Way Web Art image removed";

    $conn=null;
  }
?> 


            </div><!--end col-sm-3-->

            <div class='col-sm-3'>
                <h2>Remove Image From iPad Drawing</h2>

    <form name="removeImgIPad" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeIPadID">ID of Image to Remove: </label>
      <input class="form-control" id="removeIPadID" style='width:60%;' type="text" name="removeIPadID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Image" name="removeIPadSubmit" id="removeIPadSubmit" />

  </form>

<?php
  if(isset($_POST['removeIPadSubmit']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeIPadID'];

    $query = "UPDATE galIPad SET active='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "iPad Drawing image removed";

    $conn=null;
  }
?> 
            

            </div><!--end col-sm-3-->



            <div class='col-sm-3'>
                <h2></h2>

            

            </div><!--end col-sm-3-->

            </div><!--end row-->

<br/>
<br/>

         	


    </div> <!--end page wrapper-->
