<!DOCTYPE html>
<html>
<head>
	<title>Tubes IMK</title>
	<meta charset='utf-8'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<script src="css/jquery-3.3.1.min.js"></script>
	<script src="css/bootstrap.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
	body{
		background-image: url(css/bg1.jpg);
		background-size: 100%;
		width: 100%;
		height: 100%;
		position: fixed;
	}
	.tab {
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
	}
	.tab button {
	    background-color: inherit;
	    float: left;
	    border: none;
	    outline: none;
	    cursor: pointer;
	    padding: 14px 16px;
	    transition: 0.3s;
	    font-size: 17px;
	}
	.tab button:hover {
	    background-color: #ddd;
	}

	/* Create an active/current tablink class */
	.tab button.active {
	    background-color: slateblue;
	}

	/* Style the tab content */
	.tabcontent {
	    display: none;
	    padding: 6px 12px;
	    border: 1px solid #ccc;
	    border-top: none;
	}

	/* Style the close button */
	.topright {
	    float: right;
	    cursor: pointer;
	    font-size: 28px;
	}

	.topright:hover {color: red;}
	.navbar-transparent {
  background-color: transparent;
  border: none;
  transition-duration: .5s; }
  .navbar-transparent a {
    color: aliceblue !important; }
  .navbar-transparent .navbar-brand {
    font-size: 2.5em; }
</style>
<body>
	<!-- Navbar -->
        <nav class="navbar navbar-default clear-mbottom navbar-transparent navbar-fixed-top atas">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand froz-font" style="font-size: 2em; color: black;font-family: Bradley Hand ITC; font-weight: bold;" href="#" title="Home">Aplikasi Pemodelan Basis Data</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#x">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
            </div>
        </nav>
	<div class="container-fluid" style="margin-top: 10%;">
		<div class="col-md-12">
			<h1 style="font-family: Comic Sans MS, cursive, sans-serif; font-size: 3em; font-weight: bold; margin-left: 15%;">Belajar Apa Hari Ini?</h1>
		<div class="col-md-8" style="margin-top: 5%;">	
			<div class="col-md-3">
				<a class="button" title="Latihan Soal" href="pagelatihan1.php"><i class="fa fa-book" style="font-size: 50px; padding-top: 15px; color: white"><p style="font-size: 12px; padding-top: 8px;">Latihan</p></i></a>
			</div>
			<div class="col-md-3">
				<a class="button" title="Materi" href="pagemateri1.php"><i class="fa fa-book-open" style="font-size: 50px; padding-top: 15px; color: white"><p style="font-size: 12px; padding-top: 8px;">Materi</p></i></a>
			</div>
			<div class="col-md-3">
				<a class="button" title="Quiz" href="pagequiz1.php"><i class="glyphicon glyphicon-pencil" style="font-size: 50px; padding-top: 15px; color: white"><p style="font-size: 12px; padding-top: 8px;">Quiz</p></i></a>
			</div>
			<div class="col-md-3">
				<a class="button" title="Diskusi" href="pagediskusi.php?kategori=subquery"><i class="far fa-comment" style="font-size: 50px; padding-top: 15px; color: white"><p style="font-size: 12px; padding-top: 8px;">Diskusi</p></i></a>
			</div>
		</div>
		</div>
	</div>
	<div class="container-fluid">
		<div style="margin-top: 26%;margin-left: 1%">
			<button title="Help?" style="background:transparent; border:none;" data-toggle="modal" data-target="#myModal"><i class="far fa-question-circle" style="font-size: 45px; color: black;"></i></button>
		</div>
	</div>
</body>
	<!-- Modal -->
	<div id="myModal" class="modal fade" role="dialog">
	  	<div class="modal-dialog">
	    	<!-- Modal content-->
	    	<div class="modal-content">
	      		<div class="modal-header">
	        		<button type="button" class="close" data-dismiss="modal">&times;</button>
	        		<h4 class="modal-title">Help</h4>
	      		</div>
	      	<div class="modal-body">
	      		<div class="tab">
	      			<div class="col-md-4">
				  		<button class="tablinks" style="width: 100%;" onclick="openCity(event, 'Materi')" id="defaultOpen">Materi</button>
					</div>
					<div class="col-md-4">
				  		<button class="tablinks" style="width: 100%;" onclick="openCity(event, 'Latihan')">Latihan</button>
				  	</div>
				  	<div class="col-md-4">
				  		<button class="tablinks" style="width: 100%;" onclick="openCity(event, 'Quiz')">Quiz</button>
				  	</div>
				</div>

				<div id="Materi" class="tabcontent">
				  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
				  <h3>Materi</h3>
				  <p>Pada halaman materi. Kamu akan menemukan semua materi pada PBD. Disini juga telah disediakan slide yang akan membantu Anda memahami materi Pembelajaran PBD</p>
				</div>

				<div id="Latihan" class="tabcontent">
				  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
				  <h3>Paris</h3>
				  <p>Paris is the capital of France.</p> 
				</div>

				<div id="Quiz" class="tabcontent">
				  <span onclick="this.parentElement.style.display='none'" class="topright">&times</span>
				  <h3>Tokyo</h3>
				  <p>Tokyo is the capital of Japan.</p>
				</div>
	      	</div>
	      	<div class="modal-footer">
	        	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      	</div>
	    </div>
	  </div>
	</div>
	<script>
	function openCity(evt, cityName) {
	    var i, tabcontent, tablinks;
	    tabcontent = document.getElementsByClassName("tabcontent");
	    for (i = 0; i < tabcontent.length; i++) {
	        tabcontent[i].style.display = "none";
	    }
	    tablinks = document.getElementsByClassName("tablinks");
	    for (i = 0; i < tablinks.length; i++) {
	        tablinks[i].className = tablinks[i].className.replace(" active", "");
	    }
	    document.getElementById(cityName).style.display = "block";
	    evt.currentTarget.className += " active";
	}

	// Get the element with id="defaultOpen" and click on it
	document.getElementById("defaultOpen").click();
	</script>
</html>