<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- build:css css/main.css -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css" />
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css" />
    <link rel="stylesheet" href="node_modules/bootstrap-social/bootstrap-social.css" />
    <link rel="stylesheet" href="css/styles.css" />
    <!--endbuild-->
</head>

<body>
    <header class="jumbotron jumbotron-fluid mx-auto">
        <div class="container">
            <div class="row">
                <div class="col-3 align-center">
                    <img src="img/ciseLogo.png">
                </div>
                <div class="d-none d-sm-flex col-sm-9 text-nowrap text-sm-right">
                    <h1>
                        Call it Something Else
                    </h1>
                </div>
            </div>
        </div>
    </header>

    <div class="container mx-auto">
        <div class="row">
            <div class="col-sm-3 pl-4">
                <div class="media overlay-image-gradient">
                </div>
            </div>
            <div>
                <ul>
                <?php
		$dirname = "images/";
		$images = scandir($dirname);
		shuffle($images);
		$ignore = array(".", "..");
		foreach($images as $curimg){
			if(!in_array($curimg, $ignore)) {
				echo "<li><a href=\"$dirname$curimg\"><img src='img.php?src=$dirname$curimg&w=300&zc=1' alt='' /></a></li>\n ";
			}
		} 				
	?>
                </ul>
                
            </div>
               
            </div>
        </div>
    </div>
    <footer>

    </footer>
</body>

</html>