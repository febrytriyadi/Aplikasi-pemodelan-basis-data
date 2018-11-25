<!DOCTYPE html>
<html lang="en">
<head>
	<title>Input Diskusi</title>
	<meta charset='utf-8'/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="css/jquery-3.3.1.min.js"></script>
	<script src="css/bootstrap.js"></script>
</head>
<style type="text/css">
    * {box-sizing: border-box}
    body {font-family: Verdana, sans-serif; margin:0}
    .mySlides {display: none}
    img {vertical-align: middle;}
	.sidenav {
    	height: 100%;
    	width: 20%;
    	position: fixed;
    	z-index: 1;
    	top: 0;
    	left: 0;
    	background-color: #fff;
    	overflow-x: hidden;
	}
    /* Slideshow container */
    .slideshow-container {
      max-width: 100%;
      position: relative;
      margin: auto;
    }

    /* Next & previous buttons */
    .prev, .next {
      cursor: pointer;
      position: absolute;
      top: 50%;
      width: auto;
      padding: 16px;
      margin-top: -22px;
      color: #ccc;
      font-weight: bold;
      font-size: 18px;
      transition: 0.6s ease;
      border-radius: 0 3px 3px 0;
    }

    /* Position the "next button" to the right */
    .next {
      right: 0;
      border-radius: 3px 0 0 3px;
    }

    /* On hover, add a black background color with a little bit see-through */
    .prev:hover, .next:hover {
      background-color: rgba(0,0,0,0.8);
    }

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }
    .numbertext {
      color: #111;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }
    /* The dots/bullets/indicators */
    .dot {
      cursor: pointer;
      height: 15px;
      width: 15px;
      margin: 0 2px;
      background-color: #ccc;
      border-radius: 50%;
      display: inline-block;
      transition: background-color 0.6s ease;
    }

    .active, .dot:hover {
      background-color: #717171;
    }

    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    @keyframes fade {
      from {opacity: .4} 
      to {opacity: 1}
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {
      .prev, .next,.text {font-size: 11px}
    }
    .main{
        height: 90%;
        width: 80%;
        float: right;
        margin-top: 5%;
        margin-left: 20%;
        position: absolute;
    }
    .dropdown-container {
    	display: none;
    	background-color: #fff;
    	padding-left: 8px;
	}

	.fa-caret-down {
    	float: right;
    	padding-right: 8px;
	}

	.active {
    	background-color: green;
    	color: white;
	}

	.sidenav a, .dropdown-btn {
    	padding: 6px 8px 6px 16px;
    	text-decoration: none;
    	font-size: 20px;
    	color: black;
    	display: block;
    	border: none;
    	background: none;
    	width: 100%;
    	text-align: left;
    	cursor: pointer;
    	outline: none;
	}
	.sidenav a:hover, .dropdown-btn:hover {
    	color: #f1f1f1;
	}
	@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 8px;}
}
</style>
<body>
	<!-- Navbar -->
        <nav class="navbar navbar-default clear-mbottom navbar-fixed-top atas" style="background-color: lightgrey;">
            <div class="container-fluid">
            	<div class="navbar-header">
                    <a class="navbar-brand froz-font" style="font-size: 2em; color: black;font-family: Bradley Hand ITC; font-weight: bold;" href="index.php" title="Home">Aplikasi Pemodelan Basis Data</a>
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#x">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse" id="x">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a class="froz-font borbot" href="index.php" style="font-size: 18px; margin-right: 30px;"><i class="fa fa-home"></i> Home</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="sidenav" style="top: 8.8%">
        	<div>
        		<button class="dropdown-btn" style="background-color: lightgray; font-size: 1.5vw;">List Diskusi 
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <a href="pagediskusi.php?kategori=subquery" style="font-size: 1.3vw;">SubQuery</a>
                <a href="pagediskusi1.php?kategori=aggregate" style="font-size: 1.3vw;">Aggregate</a>
            </div>
  				  <a class="dropdown-btn" href="#" style="background-color: lightgray; font-size: 1.5vw;margin-top: 0.5px">Input Diskusi </a>
  			</div>	
        </div>
            <div class="main">
                <div style="width: 99%; height: 99%; border: 2px solid #ccc;margin-left: 1%; overflow: auto; padding: 2%;">
                  <h1><bold>Input Pertanyaan</bold></h1><br>
                    <form method="POST" action="pagediskusi.php">
                      <div class="input-group w3_w3layouts" style="margin-top: 5%;">
                        <span class="input-group-addon" id="gambar">Kategori</span>
                        <select name="kategori" style="float: right; width: 100%;padding: 5px;">
                          <option value="subquery">-----------------------------------SubQuery------------------------------------</option>
                          <option value="aggregate">-----------------------------------Aggregate---------------------------------</option>
                        </select>
                      </div>
                      <div class="input-group w3_w3layouts" style="margin-top: 5%;">
                        <span class="input-group-addon" id="nama" style="padding-left:20px; padding-right: 20px;">Nama</span>
                        <input type="text" class="form-control" name="nama" placeholder="Nama" aria-describedby="basic-addon1">
                      </div>
                      <div class="input-group w3_w3layouts" style="margin-top: 5%;">
                        <span class="input-group-addon" id="question">Question</span>
                        <input type="text" class="form-control" name="pertanyaan" placeholder="Masukkan Pertanyaan" aria-describedby="basic-addon1">
                      </div>
                      <input type="submit" name="submit" class="btn btn-primary btn-block" style="margin-top: 5%;">
                    </form>
                </div>
            </div>
</body>
<script>
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</html>