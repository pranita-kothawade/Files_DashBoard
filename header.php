<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="http://localhost/Demo_CURL/bootstrap-5.0.2-dist/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/style1.css"> 
        <link href="http://localhost/Demo_CURL/bootstrap-5.0.2-dist/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
        <script src="http://localhost/Demo_CURL/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        <!--Ajax cdn  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <title>Demo DashBoard</title>
    </head>
    <style type="text/css">
  	
    </style>
    <body>
  	    <div id="page-container" class="main-admin">
	  	    <nav class="navbar navbar-expand-lg navbar-light bg-light position-fixed w-100">
                <a class="navbar-brand" href="#"></a>
                <div id="open-menu" class="menu-bar">
                    <div class="bars"></div>
                </div>
            
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown ets-right-0">
                        <form class="d-flex">
                            <button class="btn btn-secondary" type="button" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                Upload
                            </button>
                        </form>
                    </li>
                </ul>
		    </nav>
            <div class="side-bar">
                <div class="side-bar-links">
                    <div class="side-bar-logo text-center py-3">
                        <img src="" class="img-fluid rounded-circle border bg-secoundry mb-3">
                        <h5>Demo DashBoard</h5>
                    </div>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="upload.php" name="option" value="Video" class="nav-links d-block button"><i class='fa fa-play-circle'> Video Files</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-links d-block"><i class='fa fa-headphones'> Audio Files</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-links d-block"><i class="fa fa-sticky-note-o"> Text Files</i></a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-links d-block"><i class="fa fa-file-text">  PDF's</i></a>
                        </li>
                    </ul>
                </div>
                <div class="side-bar-icons">
                        <!-- <div class="side-bar-logo text-center py-3">
                        <img src="" class="img-fluid rounded-circle border bg-secoundry mb-3">
                        <h5>Company Name</h5>
                    </div> -->
                    <div class="icons d-flex flex-column align-items-center">
                    <a href="Demo_1.php" name="option" value="Video" class="set-width text-center display-inline-block my-1"><i class="fa fa-home"></i></a>

                    <button onclick="fetch()" class="mesage set-width text-center display-inline-block my-1"><i class='fa fa-file-video'></i></button>
                        <a href="audio.php" class="set-width text-center display-inline-block my-1"><i class='fa fa-file-audio'></i></a>
                        <a href="pdf.php" class="set-width text-center display-inline-block my-1"><i class="fa fa-file-pdf"></i></a>
                        <a href="text.php" class="set-width text-center display-inline-block my-1"><i class="fa fa-file-text"></i></a>
                    </div>
                </div>
            </div>
            
        <script>
            function fetch(){
                $.ajax({
                    url:"http://localhost/Demo_CURL/video.php", type:"GET", datatype:"JSON",
                    data:JSON.stringify({ }),
                    sucess:function(data){
                        $(JSON.stringify(data))
                    }
                });
            }
        </script>
