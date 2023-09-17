<?php include('_header.php')?>

<body>
    <?php include('_navbar.php')?>
    <?php include('config.php')?>
    
    




  <div class="text-center">
    <img src="/img/huup.jpg" class="rounded mt-2" alt="...">
  </div> 

    <table class="table table-hover container my-5">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Manufacturer</th>
            <th scope="col">Model</th>
            <th scope="col">Link</th>
          </tr>
        </thead>
        <?php foreach($planes as $ucak): ?>
          <tbody>
          <tr>
            <th scope="row"><?php echo $ucak['id'] ?></th>
            <td><?php echo $ucak['Manufacturer'] ?></td>
            <td><?php echo $ucak['Model'] ?></td>
            <td><a href='listproducts.php?cat=<?php echo $ucak['Manufacturer']?>'>Link</a></td>
          </tr>
      
        <?php endforeach;?>
        
        </tbody>
      </table>



<?php include('_footer.php')?>
<?php include('_scripts.php')?>
</body>
</html>