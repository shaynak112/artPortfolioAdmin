<?php

    include 'header.php';
    include 'navMenu.php';
    include 'dbConnect.php';

?>


	<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1>View All Images</h1>
                </div>
            </div>


         	<div class='row'>
         		<div class='col-lg-12'>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galCanvas ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $canvasImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h2>Canvas</h2>

</div>

<div class='row'>

<?php

$increment=3;

foreach($canvasImgs as $c)
{
	if($increment%3==0)
	{
		$increment++;
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Size: " . $c->size . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Homepage? " . $c->homepage . "</div>";
		echo "<div>Featured? " . $c->featuredPage . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Size: " . $c->size . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Homepage? " . $c->homepage . "</div>";
		echo "<div>Featured? " . $c->featuredPage . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>


         	<div class='row'>
         		<div class='col-lg-12'>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galTattoos ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $tattooImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h2>Tattoos</h2>

</div>

<div class='row'>

<?php

$increment=3;

foreach($tattooImgs as $c)
{
	if($increment%3==0)
	{
		$increment++;
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Homepage? " . $c->homepage . "</div>";
		echo "<div>Featured? " . $c->featuredPage . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Homepage? " . $c->homepage . "</div>";
		echo "<div>Featured? " . $c->featuredPage . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>


         	<div class='row'>
         		<div class='col-lg-12'>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galTattooSketch ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $tattooSketchImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h2>Tattoo Sketch</h2>

</div>

<div class='row'>

<?php

$increment=3;

foreach($tattooSketchImgs as $c)
{
	if($increment%3==0)
	{
		$increment++;
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>


         	<div class='row'>
         		<div class='col-lg-12'>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galSketch ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $sketchImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h2>Sketch</h2>

</div>

<div class='row'>

<?php

$increment=3;

foreach($sketchImgs as $c)
{
	if($increment%3==0)
	{
		$increment++;
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>



<div class='row'>
         		<div class='col-lg-12'>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galWeb ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $webImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h2>Web Art</h2>

</div>

<div class='row'>

<?php

$increment=3;

foreach($webImgs as $c)
{
	if($increment%3==0)
	{
		$increment++;
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Homepage? " . $c->homepage . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Homepage? " . $c->homepage . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>



<div class='row'>
         		<div class='col-lg-12'>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galNewWayWeb ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $newWayWebImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h2>New Way Web Art</h2>

</div>

<div class='row'>

<?php

$increment=3;

foreach($newWayWebImgs as $c)
{
	if($increment%3==0)
	{
		$increment++;
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>



         	<div class='row'>
         		<div class='col-lg-12'>


<?php

            $dbconn = new Dbconnect;
            $db = $dbconn->getDb();
            $query = "SELECT * FROM galIPad ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $iPadImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h2>iPad Drawings</h2>

</div>

<div class='row'>

<?php

$increment=3;

foreach($iPadImgs as $c)
{
	if($increment%3==0)
	{
		$increment++;
		echo "</div>";
		echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:5%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' style='width:50%;margin-left:5%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "<div>Active: " . $c->active . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>



    </div>
