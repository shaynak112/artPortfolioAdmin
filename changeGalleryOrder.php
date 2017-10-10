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
         		<div class='col-sm-3'>
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

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order" name="canvasGalOrder" id="canvasGalOrder" />

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

			<div class='col-sm-3'>
                <h2>Tattoos</h2>

<form name="changeTattoosOrderForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="tattoosGalOrderID">ID: </label>
      <input class="form-control" id="tattoosGalOrderID" style='width:60%;' type="text" name="tattoosGalOrderID"/>
      </div>

      <div>
        <label class="control-label" for="tattoosGalOrderNew">New Gallery Order: </label>
      <input class="form-control" id="tattoosGalOrderNew" style='width:60%;' type="text" name="tattoosGalOrderNew"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order" name="tattoosGalOrder" id="tattoosGalOrder" />

  </form>

<?php
  if(isset($_POST['tattoosGalOrder']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['tattoosGalOrderID'];
    $galleryOrder = $_POST['tattoosGalOrderNew'];

    $query = "UPDATE galTattoos SET galleryOrder=$galleryOrder WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo gallery order adjusted.";

    $conn=null;
  }
?>                


			</div><!--end col-sm-3-->


      <div class='col-sm-3'>
                <h2>Tattoo Sketch</h2>

<form name="changeTattooSketchOrderForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="tattooSketchGalOrderID">ID: </label>
      <input class="form-control" id="tattooSketchGalOrderID" style='width:60%;' type="text" name="tattooSketchGalOrderID"/>
      </div>

      <div>
        <label class="control-label" for="tattooSketchGalOrderNew">New Gallery Order: </label>
      <input class="form-control" id="tattooSketchGalOrderNew" style='width:60%;' type="text" name="tattooSketchGalOrderNew"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order" name="tattooSketchGalOrder" id="tattooSketchGalOrder" />

  </form>

<?php
  if(isset($_POST['tattooSketchGalOrder']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['tattooSketchGalOrderID'];
    $galleryOrder = $_POST['tattooSketchGalOrderNew'];

    $query = "UPDATE galTattooSketch SET galleryOrder=$galleryOrder WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo Sketch gallery order adjusted.";

    $conn=null;
  }
?>                


      </div><!--end col-sm-3-->

      <div class='col-sm-3'>
                <h2>Sketch</h2>

<form name="changeSketchOrderForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="sketchGalOrderID">ID: </label>
      <input class="form-control" id="sketchGalOrderID" style='width:60%;' type="text" name="sketchGalOrderID"/>
      </div>

      <div>
        <label class="control-label" for="sketchGalOrderNew">New Gallery Order: </label>
      <input class="form-control" id="sketchGalOrderNew" style='width:60%;' type="text" name="sketchGalOrderNew"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order" name="sketchGalOrder" id="sketchGalOrder" />

  </form>

<?php
  if(isset($_POST['sketchGalOrder']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['sketchGalOrderID'];
    $galleryOrder = $_POST['sketchGalOrderNew'];

    $query = "UPDATE galSketch SET galleryOrder=$galleryOrder WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);
    $statement->execute();

    echo "Sketch gallery order adjusted.";

    $conn=null;
  }
?>                


      </div><!--end col-sm-3-->


         	</div><!--end row-->


          <div class='row'>
            <div class='col-sm-3'>
                <h2>Web Art</h2>

<form name="changeWebOrderForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="webGalOrderID">ID: </label>
      <input class="form-control" id="webGalOrderID" style='width:60%;' type="text" name="webGalOrderID"/>
      </div>

      <div>
        <label class="control-label" for="webGalOrderNew">New Gallery Order: </label>
      <input class="form-control" id="webGalOrderNew" style='width:60%;' type="text" name="webGalOrderNew"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order" name="webGalOrder" id="webGalOrder" />

  </form>

<?php
  if(isset($_POST['webGalOrder']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['webGalOrderID'];
    $galleryOrder = $_POST['webGalOrderNew'];

    $query = "UPDATE galWeb SET galleryOrder=$galleryOrder WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);
    $statement->execute();

    echo "Web gallery order adjusted.";

    $conn=null;
  }
?>                

  


            </div><!--end col-lg-6-->

      <div class='col-sm-3'>
                <h2>New Way Web Art</h2>

<form name="changeNewWayWebOrderForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newWayWebGalOrderID">ID: </label>
      <input class="form-control" id="newWayWebGalOrderID" style='width:60%;' type="text" name="newWayWebGalOrderID"/>
      </div>

      <div>
        <label class="control-label" for="newWayWebGalOrderNew">New Gallery Order: </label>
      <input class="form-control" id="newWayWebGalOrderNew" style='width:60%;' type="text" name="newWayWebGalOrderNew"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order" name="newWayWebGalOrder" id="newWayWebGalOrder" />

  </form>

<?php
  if(isset($_POST['newWayWebGalOrder']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['newWayWebGalOrderID'];
    $galleryOrder = $_POST['newWayWebGalOrderNew'];

    $query = "UPDATE galNewWayWeb SET galleryOrder=$galleryOrder WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);
    $statement->execute();

    echo "New Way Web gallery order adjusted.";

    $conn=null;
  }
?>                


      </div><!--end col-sm-3-->


      <div class='col-sm-3'>
                <h2>iPad Drawing</h2>

<form name="changeIPadOrderForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="iPadGalOrderID">ID: </label>
      <input class="form-control" id="iPadGalOrderID" style='width:60%;' type="text" name="iPadGalOrderID"/>
      </div>

      <div>
        <label class="control-label" for="iPadGalOrderNew">New Gallery Order: </label>
      <input class="form-control" id="iPadGalOrderNew" style='width:60%;' type="text" name="iPadGalOrderNew"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Adjust Gallery Order" name="iPadGalOrder" id="iPadGalOrder" />

  </form>

<?php
  if(isset($_POST['iPadGalOrder']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['iPadGalOrderID'];
    $galleryOrder = $_POST['iPadGalOrderNew'];

    $query = "UPDATE galIPad SET galleryOrder=$galleryOrder WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);
    $statement->execute();

    echo "iPad Drawing gallery order adjusted.";

    $conn=null;
  }
?>                


      </div><!--end col-sm-3-->

      <div class='col-sm-3'>
               


      </div><!--end col-sm-3-->


          </div><!--end row-->

<br/>
<br/>

         	


    </div> <!--end page wrapper-->
