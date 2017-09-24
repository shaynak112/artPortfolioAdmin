<?php

    include 'header.php';
    include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Change Homepage Images</h1>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-lg-4'>
            <h3>Add Tattoo</h3>

	<form name="addTattooHomeForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addTatooHomeID">ID of Image to Add: </label>
      <input class="form-control" id="addTatooHomeID" style='width:40%;' type="text" name="addTatooHomeID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Add Tattoo Image to Homepage" name="addTattooHome" id="addTattooHome" />

  </form>

<?php
  if(isset($_POST['addTattooHome']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['addTatooHomeID'];

    $query = "UPDATE galTattoos SET homepage='yes' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo image added to homepage";

    $conn=null;
  }
?>





         		</div><!--end col-lg-4-->

			<div class='col-lg-4'>
      <h3>Add Canvas</h3>

  <form name="addCanvasHomeForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addCanvasHomeID">ID of Image to Add: </label>
      <input class="form-control" id="addCanvasHomeID" style='width:40%;' type="text" name="addCanvasHomeID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Add Canvas Image to Homepage" name="addCanvasHome" id="addCanvasHome" />

  </form>

<?php
  if(isset($_POST['addCanvasHome']))
  {
    $conn1 = new Dbconnect;
    $db1 = $conn1->getDb();

    $id = $_POST['addCanvasHomeID'];

    $query1 = "UPDATE galCanvas SET homepage='yes' WHERE id=$id";
    $statement1 = $db1->prepare($query1);

    $statement1->bindValue(':id', $id, PDO::PARAM_INT);
    $statement1->execute();

    echo "Canvas image added to homepage";

    $conn1=null;
  }
?>
			

			</div><!--end col-lg-4-->

      <div class='col-lg-4'>
      <h3>Add Web</h3>

  <form name="addWebHomeForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="addWebHomeID">ID of Image to Add: </label>
      <input class="form-control" id="addWebHomeID" style='width:40%;' type="text" name="addWebHomeID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Add Web Image to Homepage" name="addWebHome" id="addWebHome" />

  </form>

<?php
  if(isset($_POST['addWebHome']))
  {
    $conn2 = new Dbconnect;
    $db2 = $conn2->getDb();

    $id = $_POST['addWebHomeID'];

    $query2 = "UPDATE galWeb SET homepage='yes' WHERE id=$id";
    $statement2 = $db2->prepare($query2);

    $statement2->bindValue(':id', $id, PDO::PARAM_INT);
    $statement2->execute();

    echo "Web image added to homepage";

    $conn2=null;
  }
?>
      

      </div><!--end col-lg-4-->

         	</div><!--end row-->

<br/>
<br/>

<div class='row'>
            <div class='col-lg-4'>
            <h3>Remove Tattoo</h3>

<form name="removeTattooHomeForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeTatooHomeID">ID of Image to Remove: </label>
      <input class="form-control" id="removeTatooHomeID" style='width:40%;' type="text" name="removeTatooHomeID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Tattoo Image from Homepage" name="removeTattooHome" id="removeTattooHome" />

  </form>

<?php
  if(isset($_POST['removeTattooHome']))
  {
    $conn = new Dbconnect;
    $db = $conn->getDb();

    $id = $_POST['removeTatooHomeID'];

    $query = "UPDATE galTattoos SET homepage='no' WHERE id=$id";
    $statement = $db->prepare($query);

    $statement->bindValue(':id', $id, PDO::PARAM_INT);
    $statement->execute();

    echo "Tattoo image removed from homepage";

    $conn=null;
  }
?>  


            </div><!--end col-lg-4-->

      <div class='col-lg-4'>
      <h3>Remove Canvas</h3>


  <form name="removeCanvasHomeForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeCanvasHomeID">ID of Image to Remove: </label>
      <input class="form-control" id="removeCanvasHomeID" style='width:40%;' type="text" name="removeCanvasHomeID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Canvas Image from Homepage" name="removeCanvasHome" id="removeCanvasHome" />

  </form>

<?php
  if(isset($_POST['removeCanvasHome']))
  {
    $conn1 = new Dbconnect;
    $db1 = $conn1->getDb();

    $id = $_POST['removeCanvasHomeID'];

    $query1 = "UPDATE galCanvas SET homepage='no' WHERE id=$id";
    $statement1 = $db1->prepare($query1);

    $statement1->bindValue(':id', $id, PDO::PARAM_INT);
    $statement1->execute();

    echo "Canvas image removed from homepage";

    $conn1=null;
  }
?>


      </div><!--end col-lg-4-->

      <div class='col-lg-4'>
      <h3>Remove Web</h3>

   <form name="removeWebHomeForm" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="removeWebHomeID">ID of Image to Remove: </label>
      <input class="form-control" id="removeWebHomeID" style='width:40%;' type="text" name="removeWebHomeID"/>
      </div>

<br/>

      <input class="btn btn-primary" type="submit" value="Remove Web Image from Homepage" name="removeWebHome" id="removeWebHome" />

  </form>

<?php
  if(isset($_POST['removeWebHome']))
  {
    $conn2 = new Dbconnect;
    $db2 = $conn2->getDb();

    $id = $_POST['removeWebHomeID'];

    $query2 = "UPDATE galWeb SET homepage='no' WHERE id=$id";
    $statement2 = $db2->prepare($query2);

    $statement2->bindValue(':id', $id, PDO::PARAM_INT);
    $statement2->execute();

    echo "Web image removed from homepage";

    $conn2=null;
  }
?>
           

      </div><!--end col-lg-4-->

          </div><!--end row-->         	


    </div> <!--end page wrapper-->
