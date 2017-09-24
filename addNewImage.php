<?php

    include 'header.php';
    include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>Add New Image</h1>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-lg-6'>


	<h3>Add New Canvas</h3>

<form name="newCanvas" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newCanvasTitle">English Title: </label>
      <input class="form-control" id="newCanvasTitle" type="text" name="newCanvasTitle"/>
      </div>

      <div>
      <label class="control-label" for="newCanvasTitle2">Russian Title: </label>
      <input class="form-control" id="newCanvasTitle2" type="text" name="newCanvasTitle2"/>
      </div>

      <div>
      <label class="control-label" for="newCanvasURL">URL: </label>
      <input class="form-control" id="newCanvasURL" placeholder="must be format canvas/imagename.jpg" type="text" name="newCanvasURL"/>
      </div>

      <div>
      <label class="control-label" for="newCanvasOrder">Gallery Order: </label>
      <input class="form-control" id="newCanvasOrder" type="text" name="newCanvasOrder"/>
      </div>

      <div>
      <label class="control-label" for="newCanvasDescription">Description: </label>
      <input class="form-control" id="newCanvasDescription" type="text" name="newCanvasDescription"/>
      </div>

      <div>
      <label class="control-label" for="newCanvasSize">Size: </label>
      <input class="form-control" id="newCanvasSize" type="text" name="newCanvasSize"/>
      </div>

      <div>
      <label class="control-label" for="newCanvasKeywords">Keywords: </label>
      <input class="form-control" id="newCanvasKeywords" type="text" name="newCanvasKeywords"/>
      </div>

      <br/>

      <div class="form-group">
 	  <label for="newCanvasHomepage" style='margin-left:5%;'>On Homepage?</label>
 		 <select class="form-control" style='width:50%;margin-left:5%;' id="newCanvasHomepage" name='newCanvasHomepage'>
		    <option>no</option>
		    <option>yes</option>
  		</select>
		</div>      


      <br/>

      <div class="form-group">
 	  <label for="newCanvasFeatured" style='margin-left:5%;'>Featured on Canvas Page?</label>
 		 <select class="form-control" style='width:50%;margin-left:5%;' id="newCanvasFeatured" name='newCanvasFeatured'>
		    <option>no</option>
		    <option>yes</option>
  		</select>
		</div> 

      <br/>


      <input class="btn btn-primary" type="submit" value="Add New Canvas Image" name="newCanvasImageSubmit" id="newCanvasImageSubmit" />

    </form>
  
<?php
	if(isset($_POST['newCanvasImageSubmit']))
	{
		$conn = new Dbconnect;
        $db = $conn->getDb();

        $title1 = $_POST['newCanvasTitle'];
        $title2 = $_POST['newCanvasTitle2'];
        $url = $_POST['newCanvasURL'];
        $galleryOrder = $_POST['newCanvasOrder'];
        $description = $_POST['newCanvasDescription'];
        $size = $_POST['newCanvasSize'];
        $keywords = $_POST['newCanvasKeywords'];
        $homepage = $_POST['newCanvasHomepage'];
        $featured = $_POST['newCanvasFeatured'];


        $query = "INSERT INTO galCanvas (url, title, title2, size, galleryOrder, description, keywords, homepage, featured) VALUES (:url, :title, :title2, :size, :galleryOrder, :description, :keywords, :homepage, :featured)";

        $statement = $db->prepare($query);

      	$statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);

     	 $statement->bindValue(':url', $url, PDO::PARAM_STR);
     	 $statement->bindValue(':title', $title, PDO::PARAM_STR);
     	 $statement->bindValue(':title2', $title2, PDO::PARAM_STR);
     	 $statement->bindValue(':size', $size, PDO::PARAM_STR);
     	 $statement->bindValue(':description', $description, PDO::PARAM_STR);
     	 $statement->bindValue(':keywords', $keywords, PDO::PARAM_STR);
     	 $statement->bindValue(':homepage', $homepage, PDO::PARAM_STR);
     	 $statement->bindValue(':featured', $featured, PDO::PARAM_STR);

     	 $statement->execute();

     	 echo "Canvas Image added";

     	$conn=null;

    }
?>


         		</div><!--end col-lg-6-->

			<div class='col-lg-6'>

			<h3>Add New Tattoo</h3>




<form name="newTattoo" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newTattooTitle">English Title: </label>
      <input class="form-control" id="newTattooTitle" type="text" name="newTattooTitle"/>
      </div>

      <div>
      <label class="control-label" for="newTattooTitle2">Russian Title: </label>
      <input class="form-control" id="newTattooTitle2" type="text" name="newTattooTitle2"/>
      </div>

      <div>
      <label class="control-label" for="newTattooURL">URL: </label>
      <input class="form-control" placeholder="must be format tattoos/imagename.jpg" id="newTattooURL" type="text" name="newTattooURL"/>
      </div>

      <div>
      <label class="control-label" for="newTattooOrder">Gallery Order: </label>
      <input class="form-control" id="newTattooOrder" type="text" name="newTattooOrder"/>
      </div>

      <div>
      <label class="control-label" for="newTattooDescription">Description: </label>
      <input class="form-control" id="newTattooDescription" type="text" name="newTattooDescription"/>
      </div>

      <div>
      <label class="control-label" for="newTattooKeywords">Keywords: </label>
      <input class="form-control" id="newTattooKeywords" type="text" name="newTattooKeywords"/>
      </div>

            <br/>

      <div class="form-group">
 	  <label for="newTattoosHomepage" style='margin-left:5%;'>On Homepage?</label>
 		 <select class="form-control" style='width:50%;margin-left:5%;' id="newTattoosHomepage" name='newTattoosHomepage'>
		    <option>no</option>
		    <option>yes</option>
  		</select>
		</div>      


      <br/>

      <div class="form-group">
 	  <label for="newTattoosFeatured" style='margin-left:5%;'>Featured on Tattoos Page?</label>
 		 <select class="form-control" style='width:50%;margin-left:5%;' id="newTattoosFeatured" name='newTattoosFeatured'>
		    <option>no</option>
		    <option>yes</option>
  		</select>
		</div>       


      <br/>


      <input class="btn btn-primary" type="submit" value="Add New Tattoo Image" name="newTattooImageSubmit" id="newTattooImageSubmit" />

    </form>
  
<?php
	if(isset($_POST['newTattooImageSubmit']))
	{
		$conn = new Dbconnect;
        $db = $conn->getDb();

        $title1 = $_POST['newTattooTitle'];
        $title2 = $_POST['newTattooTitle2'];
        $url = $_POST['newTattooURL'];
        $galleryOrder = $_POST['newTattooOrder'];
        $description = $_POST['newTattooDescription'];
        $keywords = $_POST['newTattooKeywords'];
        $homepage = $_POST['newTattoosHomepage'];
        $featured = $_POST['newTattoosFeatured'];


        $query = "INSERT INTO galTattoos (url, title, title2, galleryOrder, description, keywords, homepage, featured) VALUES (:url, :title, :title2, :galleryOrder, :description, :keywords, :homepage, :featured)";

        $statement = $db->prepare($query);

      	$statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);

     	 $statement->bindValue(':url', $url, PDO::PARAM_STR);
     	 $statement->bindValue(':title', $title, PDO::PARAM_STR);
     	 $statement->bindValue(':title2', $title2, PDO::PARAM_STR);
     	 $statement->bindValue(':description', $description, PDO::PARAM_STR);
     	 $statement->bindValue(':keywords', $keywords, PDO::PARAM_STR);
     	 $statement->bindValue(':homepage', $homepage, PDO::PARAM_STR);
     	 $statement->bindValue(':featured', $featured, PDO::PARAM_STR);

     	 $statement->execute();

     	 echo "Tattoo Image added";

     	$conn=null;

    }
?>

			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>

         	<div class='row'>
         		<div class='col-lg-6'>


	<h3>Add New Tattoo Sketch</h3>

<form name="newTattooSketch" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newTatooSketchTitle">English Title: </label>
      <input class="form-control" id="newTatooSketchTitle" type="text" name="newTatooSketchTitle"/>
      </div>

      <div>
      <label class="control-label" for="newTatooSketchTitle2">Russian Title: </label>
      <input class="form-control" id="newTatooSketchTitle2" type="text" name="newTatooSketchTitle2"/>
      </div>

      <div>
      <label class="control-label" for="newTatooSketchURL">URL: </label>
      <input class="form-control" id="newTatooSketchURL" placeholder="must be format tattooSketch/imagename.jpg" type="text" name="newTatooSketchURL"/>
      </div>

      <div>
      <label class="control-label" for="newTatooSketchOrder">Gallery Order: </label>
      <input class="form-control" id="newTatooSketchOrder" type="text" name="newTatooSketchOrder"/>
      </div>

      <div>
      <label class="control-label" for="newTatooSketchDescription">Description: </label>
      <input class="form-control" id="newTatooSketchDescription" type="text" name="newTatooSketchDescription"/>
      </div>

      <div>
      <label class="control-label" for="newTatooSketchKeywords">Keywords: </label>
      <input class="form-control" id="newTatooSketchKeywords" type="text" name="newTatooSketchKeywords"/>
      </div>      


      <br/>


      <input class="btn btn-primary" type="submit" value="Add New Tattoo Sketch" name="newTattooSketchImageSubmit" id="newTattooSketchImageSubmit" />

    </form>
  
<?php
	if(isset($_POST['newTattooSketchImageSubmit']))
	{
		$conn = new Dbconnect;
        $db = $conn->getDb();

        $title1 = $_POST['newTatooSketchTitle'];
        $title2 = $_POST['newTatooSketchTitle2'];
        $url = $_POST['newTatooSketchURL'];
        $galleryOrder = $_POST['newTatooSketchOrder'];
        $description = $_POST['newTatooSketchDescription'];
        $keywords = $_POST['newTatooSketchKeywords'];


        $query = "INSERT INTO galTattooSketch (url, title, title2, galleryOrder, description, keywords) VALUES (:url, :title, :title2, :galleryOrder, :description, :keywords)";

        $statement = $db->prepare($query);

      	$statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);

     	 $statement->bindValue(':url', $url, PDO::PARAM_STR);
     	 $statement->bindValue(':title', $title, PDO::PARAM_STR);
     	 $statement->bindValue(':title2', $title2, PDO::PARAM_STR);
     	 $statement->bindValue(':description', $description, PDO::PARAM_STR);
     	 $statement->bindValue(':keywords', $keywords, PDO::PARAM_STR);

     	 $statement->execute();

     	 echo "Tattoo Sketch Image added";

     	$conn=null;

    }
?>


         		</div><!--end col-lg-6-->

			<div class='col-lg-6'>

			<h3>Add New Sketch</h3>




<form name="newSketch" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newSketchTitle">English Title: </label>
      <input class="form-control" id="newSketchTitle" type="text" name="newSketchTitle"/>
      </div>

      <div>
      <label class="control-label" for="newSketchTitle2">Russian Title: </label>
      <input class="form-control" id="newSketchTitle2" type="text" name="newSketchTitle2"/>
      </div>

      <div>
      <label class="control-label" for="newSketchURL">URL: </label>
      <input class="form-control" placeholder="must be format sketch/imagename.jpg" id="newSketchURL" type="text" name="newSketchURL"/>
      </div>

      <div>
      <label class="control-label" for="newSketchOrder">Gallery Order: </label>
      <input class="form-control" id="newSketchOrder" type="text" name="newSketchOrder"/>
      </div>

      <div>
      <label class="control-label" for="newSketchDescription">Description: </label>
      <input class="form-control" id="newSketchDescription" type="text" name="newSketchDescription"/>
      </div>

      <div>
      <label class="control-label" for="newSketchKeywords">Keywords: </label>
      <input class="form-control" id="newSketchKeywords" type="text" name="newSketchKeywords"/>
      </div>      


      <br/>


      <input class="btn btn-primary" type="submit" value="Add New Sketch Image" name="newSketchImageSubmit" id="newSketchImageSubmit" />

    </form>
  
<?php
	if(isset($_POST['newSketchImageSubmit']))
	{
		$conn = new Dbconnect;
        $db = $conn->getDb();

        $title1 = $_POST['newSketchTitle'];
        $title2 = $_POST['newSketchTitle2'];
        $url = $_POST['newSketchURL'];
        $galleryOrder = $_POST['newSketchOrder'];
        $description = $_POST['newSketchDescription'];
        $keywords = $_POST['newSketchKeywords'];


        $query = "INSERT INTO galSketch (url, title, title2, galleryOrder, description, keywords) VALUES (:url, :title, :title2, :galleryOrder, :description, :keywords)";

        $statement = $db->prepare($query);

      	$statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);

     	 $statement->bindValue(':url', $url, PDO::PARAM_STR);
     	 $statement->bindValue(':title', $title, PDO::PARAM_STR);
     	 $statement->bindValue(':title2', $title2, PDO::PARAM_STR);
     	 $statement->bindValue(':description', $description, PDO::PARAM_STR);
     	 $statement->bindValue(':keywords', $keywords, PDO::PARAM_STR);

     	 $statement->execute();

     	 echo "Sketch Image added";

     	$conn=null;

    }
?>

			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>

<div class='row'>
         		<div class='col-lg-6'>


	<h3>Add New Web Art</h3>

<form name="newWeb" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newWebTitle">English Title: </label>
      <input class="form-control" id="newWebTitle" type="text" name="newWebTitle"/>
      </div>

      <div>
      <label class="control-label" for="newWebTitle2">Russian Title: </label>
      <input class="form-control" id="newWebTitle2" type="text" name="newWebTitle2"/>
      </div>

      <div>
      <label class="control-label" for="newWebURL">URL: </label>
      <input class="form-control" id="newWebURL" placeholder="must be format web/imagename.jpg" type="text" name="newWebURL"/>
      </div>

      <div>
      <label class="control-label" for="newWebOrder">Gallery Order: </label>
      <input class="form-control" id="newWebOrder" type="text" name="newWebOrder"/>
      </div>

      <div>
      <label class="control-label" for="newWebDescription">Description: </label>
      <input class="form-control" id="newWebDescription" type="text" name="newWebDescription"/>
      </div>

      <div>
      <label class="control-label" for="newWebKeywords">Keywords: </label>
      <input class="form-control" id="newWebKeywords" type="text" name="newWebKeywords"/>
      </div>      

                  <br/>

      <div class="form-group">
 	  <label for="newWebHomepage" style='margin-left:5%;'>On Homepage?</label>
 		 <select class="form-control" style='width:50%;margin-left:5%;' id="newWebHomepage" name='newWebHomepage'>
		    <option>no</option>
		    <option>yes</option>
  		</select>
		</div>      


      <br/>


      <input class="btn btn-primary" type="submit" value="Add New Web Image" name="newWebImageSubmit" id="newWebImageSubmit" />

    </form>
  
<?php
	if(isset($_POST['newWebImageSubmit']))
	{
		$conn = new Dbconnect;
        $db = $conn->getDb();

        $title1 = $_POST['newWebTitle'];
        $title2 = $_POST['newWebTitle2'];
        $url = $_POST['newWebURL'];
        $galleryOrder = $_POST['newWebOrder'];
        $description = $_POST['newWebDescription'];
        $keywords = $_POST['newWebKeywords'];
        $homepage = $_POST['newWebHomepage'];


        $query = "INSERT INTO galWeb (url, title, title2, galleryOrder, description, keywords, homepage) VALUES (:url, :title, :title2, :galleryOrder, :description, :keywords, :homepage)";

        $statement = $db->prepare($query);

      	$statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);

     	 $statement->bindValue(':url', $url, PDO::PARAM_STR);
     	 $statement->bindValue(':title', $title, PDO::PARAM_STR);
     	 $statement->bindValue(':title2', $title2, PDO::PARAM_STR);
     	 $statement->bindValue(':description', $description, PDO::PARAM_STR);
     	 $statement->bindValue(':keywords', $keywords, PDO::PARAM_STR);
     	 $statement->bindValue(':homepage', $homepage, PDO::PARAM_STR);

     	 $statement->execute();

     	 echo "Web Image added";

     	$conn=null;

    }
?>


         		</div><!--end col-lg-6-->

			<div class='col-lg-6'>

			<h3>Add New Way Web Art</h3>




<form name="newNewWayWeb" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newNewWayWebTitle">English Title: </label>
      <input class="form-control" id="newNewWayWebTitle" type="text" name="newNewWayWebTitle"/>
      </div>

      <div>
      <label class="control-label" for="newNewWayWebTitle2">Russian Title: </label>
      <input class="form-control" id="newNewWayWebTitle2" type="text" name="newNewWayWebTitle2"/>
      </div>

      <div>
      <label class="control-label" for="newNewWayWebURL">URL: </label>
      <input class="form-control" placeholder="must be format newWayWeb/imagename.jpg" id="newNewWayWebURL" type="text" name="newNewWayWebURL"/>
      </div>

      <div>
      <label class="control-label" for="newNewWayWebOrder">Gallery Order: </label>
      <input class="form-control" id="newNewWayWebOrder" type="text" name="newNewWayWebOrder"/>
      </div>

      <div>
      <label class="control-label" for="newNewWayWebDescription">Description: </label>
      <input class="form-control" id="newNewWayWebDescription" type="text" name="newNewWayWebDescription"/>
      </div>

      <div>
      <label class="control-label" for="newNewWayWebKeywords">Keywords: </label>
      <input class="form-control" id="newNewWayWebKeywords" type="text" name="newNewWayWebKeywords"/>
      </div>      


      <br/>


      <input class="btn btn-primary" type="submit" value="Add New New Way Web Art Image" name="newNewWayWebImageSubmit" id="newNewWayWebImageSubmit" />

    </form>
  
<?php
	if(isset($_POST['newNewWayWebImageSubmit']))
	{
		$conn = new Dbconnect;
        $db = $conn->getDb();

        $title1 = $_POST['newNewWayWebTitle'];
        $title2 = $_POST['newNewWayWebTitle2'];
        $url = $_POST['newNewWayWebURL'];
        $galleryOrder = $_POST['newNewWayWebOrder'];
        $description = $_POST['newNewWayWebDescription'];
        $keywords = $_POST['newNewWayWebKeywords'];


        $query = "INSERT INTO galNewWayWeb (url, title, title2, galleryOrder, description, keywords) VALUES (:url, :title, :title2, :galleryOrder, :description, :keywords)";

        $statement = $db->prepare($query);

      	$statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);

     	 $statement->bindValue(':url', $url, PDO::PARAM_STR);
     	 $statement->bindValue(':title', $title, PDO::PARAM_STR);
     	 $statement->bindValue(':title2', $title2, PDO::PARAM_STR);
     	 $statement->bindValue(':description', $description, PDO::PARAM_STR);
     	 $statement->bindValue(':keywords', $keywords, PDO::PARAM_STR);

     	 $statement->execute();

     	 echo "New Way Web Art Image added";

     	$conn=null;

    }
?>

			</div><!--end col-lg-6-->

         	</div><!--end row-->

<br/>
<br/>


<div class='row'>
         		<div class='col-lg-6'>


	<h3>Add New IPad Drawing</h3>

<form name="newIPad" class="form-horizontal" enctype="multipart/form-data" method="post" action="">

      <div>
      <label class="control-label" for="newIPadTitle">English Title: </label>
      <input class="form-control" id="newIPadTitle" type="text" name="newIPadTitle"/>
      </div>

      <div>
      <label class="control-label" for="newIPadTitle2">Russian Title: </label>
      <input class="form-control" id="newIPadTitle2" type="text" name="newIPadTitle2"/>
      </div>

      <div>
      <label class="control-label" for="newIPadURL">URL: </label>
      <input class="form-control" id="newIPadURL" placeholder="must be format ipadDraw/imagename.jpg" type="text" name="newIPadURL"/>
      </div>

      <div>
      <label class="control-label" for="newIPadOrder">Gallery Order: </label>
      <input class="form-control" id="newIPadOrder" type="text" name="newIPadOrder"/>
      </div>

      <div>
      <label class="control-label" for="newIPadDescription">Description: </label>
      <input class="form-control" id="newIPadDescription" type="text" name="newIPadDescription"/>
      </div>

      <div>
      <label class="control-label" for="newIPadKeywords">Keywords: </label>
      <input class="form-control" id="newIPadKeywords" type="text" name="newIPadKeywords"/>
      </div>      


      <br/>


      <input class="btn btn-primary" type="submit" value="Add New IPad Image" name="newIPadImageSubmit" id="newIPadImageSubmit" />

    </form>
  
<?php
	if(isset($_POST['newIPadImageSubmit']))
	{
		$conn = new Dbconnect;
        $db = $conn->getDb();

        $title1 = $_POST['newIPadTitle'];
        $title2 = $_POST['newIPadTitle2'];
        $url = $_POST['newIPadURL'];
        $galleryOrder = $_POST['newIPadOrder'];
        $description = $_POST['newIPadDescription'];
        $keywords = $_POST['newIPadKeywords'];


        $query = "INSERT INTO galIPad (url, title, title2, galleryOrder, description, keywords) VALUES (:url, :title, :title2, :galleryOrder, :description, :keywords)";

        $statement = $db->prepare($query);

      	$statement->bindValue(':galleryOrder', $galleryOrder, PDO::PARAM_INT);

     	 $statement->bindValue(':url', $url, PDO::PARAM_STR);
     	 $statement->bindValue(':title', $title, PDO::PARAM_STR);
     	 $statement->bindValue(':title2', $title2, PDO::PARAM_STR);
     	 $statement->bindValue(':description', $description, PDO::PARAM_STR);
     	 $statement->bindValue(':keywords', $keywords, PDO::PARAM_STR);

     	 $statement->execute();

     	 echo "IPad Image added";

     	$conn=null;

    }
?>


         		</div><!--end col-lg-6-->



         	</div><!--end row-->


    </div> <!--end page wrapper-->
