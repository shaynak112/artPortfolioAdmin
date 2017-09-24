<?php

    include 'header.php';
    include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Change Gallery Order</h1>
                    <p>Change the order of the images in the gallery.</p>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-lg-3'>
                <h2>Canvas</h2>

<form name="changeCanvasOrderForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="canvasGalOrderID">ID: </label>
      <input class="form-control" id="canvasGalOrderID" style='width:60%;' type="text" name="canvasGalOrderID"/>
      </div>

      <div>
        <label class="control-label" for="canvasGalOrderNew">New Gallery Order: </label>
      <input class="form-control" id="canvasGalOrderNew" style='width:60%;' type="text" name="canvasGalOrderNew"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order for Canvas" name="canvasGalOrder" id="canvasGalOrder" />

  </form>

<?php
  if(isset($_POST['canvasGalOrder']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['canvasGalOrderID'];
    $galleryOrder = $_POST['canvasGalOrderNew'];

    $query = "UPDATE galCanvas SET galleryOrder=$galleryOrder WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);
    $statement->execute();

    echo "Canvas gallery order adjusted.";

    $conn=null;
  }
?>                

	


         		</div><!--end col-lg-6-->

			<div class='col-lg-3'>

			

			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>

         	


    </div> <!--end page wrapper-->
