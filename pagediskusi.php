<?php 
    include('conn.php');
    if( (isset($_POST['kategori'])) && (isset($_POST['nama'])) && (isset($_POST['pertanyaan'])) ){
        $cond=0;
        $kategori=addslashes($_POST['kategori']);
        $nama=addslashes($_POST['nama']);
        $pertanyaan=addslashes($_POST['pertanyaan']);
        $check=mysqli_query($conn,"select id from $kategori where nama = '$nama' and pertanyaan = '$pertanyaan'");
        foreach ($check as $key) {
            $cond=$key['id'];
        }
        if($cond) {
            
        }else{
            mysqli_query($conn,"insert into $kategori(nama, pertanyaan) values ('$nama','$pertanyaan')");
        }
        $data=mysqli_query($conn,"select id,nama,pertanyaan from $kategori");
    }else{
        $kategori=addslashes($_GET['kategori']);
        $data=mysqli_query($conn,"select id,nama,pertanyaan from $kategori");
    }

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Latihan</title>
    <meta charset='utf-8'/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="css/jquery-3.3.1.min.js"></script>
    <script src="css/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">
    * {box-sizing: border-box}
    body {font-family: Verdana, sans-serif; margin:0;
        width: 100%; height: 100%; position: fixed;
    }
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
    .container {border: 2px solid #dedede; background-color: #f1f1f1; border-radius: 5px; padding: 10px; margin: 10px 0; max-width: 100%;}
    .gelap {border-color: #ccc; background-color: #ddd;}
    .container::after {content: ""; clear: both; display: table;}
    .container img {float: left; max-width: 60px; width: 100%; height: 50%; max-height: 60px; margin-right: 20px; border-radius: 50%;}
    .container img.m_right {float: right; margin-left: 20px; margin-right:0;}
    .right {float: right; color: #575252;}
    .left {float: left; color: #3b3939;}
    .main{
        height: 100%;
        max-width: 80%;
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
        <nav class="navbar navbar-default clear-mbottom navbar-transparent navbar-fixed-top atas" style="background-color: lightgrey;">
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
        <div class="sidenav" style="top: 8.8%;position: absolute;">
                <button class="dropdown-btn" style="background-color: lightgray; font-size: 1.5vw;">List Diskusi 
                    <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-container" style="display: block;">
                    <a href="pagediskusi.php?kategori=subquery" style="font-size: 1.3vw;">SubQuery</a>
                    <a href="pagediskusi1.php?kategori=aggregate" style="font-size: 1.3vw;">Aggregate</a>
                </div>
                <a class="dropdown-btn" style="background-color: lightgray; font-size: 1.5vw;margin-top: 0.5px" href="pageinputdiskusi.php">Input Diskusi 
                </a>  
        </div>
        
            <div class="main">
                <div style="width: 99%; height: 90%; border: 2px solid #ccc;margin-left: 1%; overflow: auto; padding: 2%;">
                <?php
                    $ids=array();
                    $idkoment=array();
                    foreach ($data as $key):
                      $id=$key['id'];
                      array_push($ids, $id);

                 ?>
                    <div id="<?php echo $id; ?>" class="container">
                      <img class="w3-circle" src="css/avatar.jpg">
                      <label>
                          <?php 
                            echo $key['nama'];
                           ?>
                      </label>
                      <p style="max-width: 100%;"><?php 
                           echo $key['pertanyaan'];
                       ?></p>
                      <button class="btn btn-default right" style="box-shadow: 5px 5px #ccc;" data-toggle="modal" data-target="#modal<?php echo $id;?>">Comment</button>
                    </div>
                    
                    <?php 
                        $koment=mysqli_query($conn,"select id_coment, nama, coment from coment$kategori where id='$id'");
                        foreach ($koment as $isi):
                            array_push($idkoment, $isi);
                     ?>
                    <div class="container gelap">
                        <button type="button" class="close m_right" data-toggle="modal" data-target="#delete<?php echo $isi['id_coment'];?>">&times;</button>
                      <img src="css/avatar.jpg" class="m_right">
                      <label>
                            <?php
                                echo $isi['nama'];
                            ?>
                      </label>
                        <div>
                            <p><?php 
                                echo $isi['coment'];
                            ?></p>
                        </div>
                    </div>
                    <?php 
                        endforeach;
                     ?>
                <?php 
                    endforeach;
                
                 ?>
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

<?php 
    foreach ($ids as $key ):
 ?>

<div id="modal<?php echo $key; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Balas Komentar</h4>
            </div>
            <form method="POST" action="comentsubquery.php">
            <div class="modal-body">
                <input type="hidden" name="id" value="<?php echo $key; ?>">
                    <label style="margin-top: -20px;"><h3>Masukkan Komentar</h3></label>
                  <div class="input-group w3_w3layouts" style="margin-top: 2%;">
                    <span class="input-group-addon" id="nama" style="padding-left:20px; padding-right: 20px;">Nama</span>
                    <input type="text" class="form-control" name="nama" placeholder="Nama" aria-describedby="basic-addon1" required>
                  </div>
                  <div class="input-group w3_w3layouts" style="margin-top: 2%;">
                    <span class="input-group-addon" id="balas" style="padding-right: 22px; padding-left: 22px;">Balas</span>
                    <input type="text" class="form-control" name="balas" placeholder="Masukkan Pertanyaan" aria-describedby="basic-addon1" required>
                  </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-default">Submit</button>
            </div>
            </form>
        </div>
    </div>
</div>
<?php 
    endforeach;
 ?>
  <?php 
    foreach ($idkoment as $isi):
  ?>
<div id="delete<?php echo $isi['id_coment']; ?>" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"></button>
                <h4 class="modal-title">Anda Ingin Menghapus?</h4>
            </div>
            <div class="modal-footer">
                <form method="POST" action="delete_coment.php">
                <input type="hidden" name="id" class="form-control" value="<?php echo $isi['id_coment']; ?>">
                <button type="button" data-dismiss="modal" class="btn btn-danger">Cancel</button>
                <button type="submit" class="btn btn-primary">Delete</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php 
    endforeach;
 ?>


