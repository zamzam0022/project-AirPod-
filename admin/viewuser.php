<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');

?>
<?php 
$insert_data = "SELECT * from `reguser`" ;
            $result = mysqli_query($connection, $insert_data);
            if($result){
                if(mysqli_num_rows($result)> 0){
                  
          
                    ?>

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">
                <h2>Registerd users</h2>
                <hr>
            <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                    <tr>
                    <th scope="col">id</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Last Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Action</th>
              

                    </tr>
                </thead>
                <?php 
                      while($row = mysqli_fetch_assoc($result)){
                    ?>
                <tbody>
                    <tr>
                    <th scope="row"><?php echo $row['id']?></th>
                    <td><?php echo $row['fname']?></td>
                    <td><?php echo $row['lname']?></td>
                    <td><?php echo $row['email']?></td>
                    <td><?php echo $row['pass']?></td>

                    <td ><a href="update.php?id=<?php echo $row ['id']?>" class="btn btn-success">Update</a></td>
                    <td ><a href="delete.php?id=<?php echo $row ['id']?>" class="btn btn-danger">delete</a></td>

                    
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