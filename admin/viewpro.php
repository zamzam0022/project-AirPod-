<?php
include('includes/header.php');
include('includes/sidebar.php');
include('includes/topbar.php');
include('config.php');

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
                    <th scope="col">product name</th>
                    <th scope="col">description</th>
                    <th scope="col">price</th>
                    <th scope="col">image</th>
                    <th scope="col">category</th>
                    <th scope="col">date & time</th>
                    <th scope="col">ACtion</th>
                   

                    </tr>
                </thead>
                <?php 
              
                $insert_data = "SELECT * from `products` AS p INNER JOIN `category` AS c ON c.catid = p.pcategory where `status` = '1'" ;
                            $result = mysqli_query($connection, $insert_data);
                            if($result){
                                if(mysqli_num_rows($result)> 0){
                                  
                          
                                  
                      while($row = mysqli_fetch_assoc($result)){
                        ?>
                <tbody>
                    <tr>
                    <td><?php echo $row['pid']?></td>
                    <td><?php echo $row['pname']?></td>
                    <td><?php echo $row['pdec']?></td>
                    <td><?php echo $row['pprice']?></td>
                    <td><img src="<?php echo 'upload/' . $row['pimage']?>" alt="" height="50px" width="50px"></td>
                    <td><?php echo $row['pcategory']?></td>
                    <td><?php echo $row['pdate']?></td>
                    <td><a href="pupdate.php?pid=<?php echo $row ['pid']?>" ><i class="fa-solid fa-pen-to-square"></i></a>
                    <a href="ptrash.php?pid=<?php echo $row ['pid']?>"><i class="fa-solid fa-trash" style="color: #e81717;"></i></a>
                
                </td>
             


                    
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