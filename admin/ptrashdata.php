<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');

?>
<?php 
$insert_data = "SELECT * from `products` where `status` = 0" ;
            $result = mysqli_query($connection, $insert_data);
            if($result){
                if(mysqli_num_rows($result)> 0){
                  
          
                    ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>trash products</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">products name</th>
                    <th scope="col">Description</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">date & time</th>
                    <th>

                    </th>
                    </tr>
                </thead>
                <?php 
                      while($row = mysqli_fetch_assoc($result)){
                    ?>
                <tbody>
                    <tr>
                    <th><?php echo $row['pid']?></th>
                    <td><?php echo $row['pname']?></td>
                    <td><?php echo $row['pdec']?></td>
                    <td><?php echo $row['pprice']?></td>
                    <td><img src="<?php echo 'upload/' . $row['pimage']?>" alt="" height="50px" width="50px"></td>
                    <td><?php echo $row['pdate']?></td>

                    <td ><a href="pdelete.php?pid=<?php echo $row ['pid']?>" class="btn btn-success">delete</a></td>
                    <td ><a href="prestore.php?pid=<?php echo $row ['pid']?>" class="btn btn-danger">restore</a></td>

                    
                </tr>
                <?php 
                      }
                    }
                }
                ?>
                
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
            <ul class="pagination">
                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                <li class="page-item"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">Next</a></li>
            </ul>
            </nav>

            </div>

        </div>

    </div>


</body>

</html>










<?php
include('includes/footer.php');


?>