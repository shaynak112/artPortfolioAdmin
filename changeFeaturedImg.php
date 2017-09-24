<?php

    include 'header.php';
    include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Change Featured Images</h1>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-lg-6'>
                <h2>Change Featured Canvas Images</h2>

        <h3>Add To Page</h3>

    <form name="addCanvasFeaturedForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addCanvasFeatureID">ID of Image to Add: </label>
      <input class="form-control" id="addCanvasFeatureID" style='width:40%;' type="text" name="addCanvasFeatureID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Add Canvas Image to Canvas Page" name="addCanvasFeatured" id="addCanvasFeatured" />

  </form>

<?php
  if(isset($_POST['addCanvasFeatured']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['addCanvasFeatureID'];

    $query = "UPDATE galCanvas SET featured='yes' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Canvas image added to canvas page";

    $conn=null;
  }
?>

<br/>
<br/>


<h3>Remove From Page</h3>

    <form name="removeCanvasFeaturedForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeCanvasFeatureID">ID of Image to Remove: </label>
      <input class="form-control" id="removeCanvasFeatureID" style='width:40%;' type="text" name="removeCanvasFeatureID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Canvas Image from Canvas Page" name="removeCanvasFeatured" id="removeCanvasFeatured" />

  </form>

<?php
  if(isset($_POST['removeCanvasFeatured']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeCanvasFeatureID'];

    $query = "UPDATE galCanvas SET featured='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Canvas image removed from canvas page";

    $conn=null;
  }
?>	


         		</div><!--end col-lg-6-->

			<div class='col-lg-6'>
            <h2>Change Featured Tattoo Images</h2>

        <h3>Add To Page</h3>

    <form name="addTattooFeaturedForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addTattooFeatureID">ID of Image to Add: </label>
      <input class="form-control" id="addTattooFeatureID" style='width:40%;' type="text" name="addTattooFeatureID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Add Tattoo Image to Tattoo Page" name="addTattooFeatured" id="addTattooFeatured" />

  </form>

<?php
  if(isset($_POST['addTattooFeatured']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['addTattooFeatureID'];

    $query = "UPDATE galTattoos SET featured='yes' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo image added to tattoo page";

    $conn=null;
  }
?>

<br/>
<br/>


<h3>Remove From Page</h3>

    <form name="removeTattooFeaturedForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeTattooFeatureID">ID of Image to Remove: </label>
      <input class="form-control" id="removeTattooFeatureID" style='width:40%;' type="text" name="removeTattooFeatureID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Tattoo Image from Tattoo Page" name="removeTattooFeatured" id="removeTattooFeatured" />

  </form>

<?php
  if(isset($_POST['removeTattooFeatured']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeTattooFeatureID'];

    $query = "UPDATE galTattoos SET featured='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo image removed from tattoo page";

    $conn=null;
  }
?>
			

			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>

         	


    </div> <!--end page wrapper-->
