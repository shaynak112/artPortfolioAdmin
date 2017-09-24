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
            $query = "SELECT * FROM galIPad ORDER BY galleryOrder ASC";
            $statement = $db->prepare($query);
            $statement->execute();
            $iPadImgs = $statement->fetchAll(PDO::FETCH_OBJ);
?>

<div class='row'>

<h3>iPad Drawings</h3>

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
		//echo "<br/><br/><br/>";
		echo "<div class='row'>";
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:15%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' class='allImgsView' style='width:70%;margin-left:15%;'></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "</div>";
		
	}
	else
	{	
		$increment++;
		echo "<div class='col-lg-4'>";
		echo "<div style='margin-left:15%;font-size:1.3em;'>" . $c->title . "</div>";
		//echo "<div class='iPadGalTitle' style='margin-left:30%;font-size:1.3em;'>" . $c->title2 . "</div>";
		echo "<div><img src='../images/gallery/" . $c->url . "' class='allImgsView' style='width:70%;margin-left:15%;></div>";
		echo "<div>ID: " . $c->id . "</div>";
		echo "<div>Gallery Order: " . $c->galleryOrder . "</div>";
		echo "<div>Description: " . $c->description . "</div>";
		echo "<div>Keywords: " . $c->keywords . "</div>";
		echo "</div>";

	}
}

?>

</div><!--end row-->



         		</div>
         	</div>



    </div>
