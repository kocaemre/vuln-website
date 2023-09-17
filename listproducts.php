<?php require_once('config.php') ?>


<?php include('_header.php')?>

<body>

    <?php include('_navbar.php')?>

    <?php

    if(!isset($_GET["cat"])) {
       header("Location: index.php");
    }   

    $cat = $_GET["cat"];

    $result_plane= mysqli_query($baglanti, "SELECT Manufacturer,Description,Model from airplanes WHERE Manufacturer='$cat'");

    
    $plane = mysqli_fetch_all($result_plane, MYSQLI_ASSOC);
    
    
    ?>






    <?php foreach($plane as $ucak): ?>
        <div class="card container-sm my-5" style="width: 30rem;">
                <img src="/img/<?php echo $ucak['Model']?>.jpg" class="card-img-top" alt="...">
                
                <div class="card-body">
                <h5 class="card-title"><?php echo $ucak['Manufacturer'].' '.$ucak['Model']?></h5>
                    <p class="card-text"><?php echo $ucak['Description']?></p>
                </div>
        </div>
    <?php endforeach;?>





<?php include('_footer.php')?>
<?php include('_scripts.php')?>
</body>
</html>