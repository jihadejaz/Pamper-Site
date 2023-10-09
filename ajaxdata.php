<?php
include 'connection.php';
if (isset($_POST['value'])) {
    $input =  $_POST['value'];
    $searchQuery = "select * from womensproduct where name Like '%$input%'";
    $result = mysqli_query($conn, $searchQuery);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <div class="col-md-3">

                <div class="card" style='background-color: #e9eef2;'>
                    <a href="" style='color: red; font-size: 30px; '><i class='fa fa-heart' style='position: absolute ; left: 20px; top: 20px;'></i></a>
                    <a href="viewproduct.php?wview=<?php echo $row['id']; ?>"><img class="card-img-top" src="<?php echo $row['img']; ?>" alt="Card image" width=""></a>
                    <div class="card-body">
                        <h4 class="card-title" style='font-weight: 200;'><?php echo $row['name']; ?></h4>
                        <p class="card-text"><?php echo $row['description']; ?></p>


                        <!-- <a class="btn btn-danger" href="delete.php?id=<?php echo $id ?>">Delete</a> -->

                        <span class='fa fa-star'></span>
                        <span class='fa fa-star'></span>
                        <span class='fa fa-star'></span>
                        <span class='fa fa-star'></span>
                        <span class='fa fa-star'></span>
                        <h5 style='font-weight: 350;'>Rs<?php echo $row['price'] ?><del style='font-size: 15px;'> <?php echo $row['deletedprice'] ?></del></h5>


                        <button class='btn btn-primary' id='cart' style='border-radius:0px;  border: transparent; background-color: indigo; font-weight: 350;'>Add to Cart <i class='fa fa-shopping-cart'></i> </button>
                    </div>
                </div>
            </div>
<?php  }
    }
} ?>