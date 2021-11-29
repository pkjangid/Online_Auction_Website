<?php 

include 'config.php';


session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Dancing+Script" rel="stylesheet">

</head>
<body class="container">
    <h1 class="text-center text-danger mb-5" 
    style="font-family: 'Abril Fatface', cursive;"> ONLINE AUCTION SITE</h1>

    <div class="row"></div>


    <?php echo "<h1>Welcome " . $_SESSION['username'] . "</h1>"; ?>
    <a href="logout.php">Logout</a>
   <?php 

    $sql="SELECT * FROM `items` ORDER BY `item_id` ASC ";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);

    if($num > 0){
        while($product = mysqli_fetch_array($result)){
            ?>
        <div class="col-lg-3 col-md-3 col-sm-12">
            
            <form>
                <div class="card">
                    <h6 class="card-title bg-info text-white p-2 text-uppercase"> <?php echo
                     $product['item_name'];  ?>   </h6>

                    <div class="card-body">
                         <img src="<?php echo
                     $product['item_icon'];  ?>" alt="add image in database" class="img-fluid mb-2" >

                     <h6> &#8377; RS. <?php echo $product['item_price'];  ?><span>  </h6> 

                     <h6 class="badge badge-success"> 4.4 <i class="fa fa-star"> </i> </h6>

                     <input type="text" name="" class="form-control" placeholder="Quantity">

                    </div>
                    <div class="btn-group d-flex">
                        <button class="btn btn-success flex-fill"> Add to cart </button> 
                         <!-- <button class="btn btn-warning flex-fill text-white" onclick="validate()"> buy now </button> 
                         <script type="text/javascript">
                             function validate(){
                                        alert("currently ! this process is ongoing..");}
                         </script>
 -->                    </div>


                </div>
            </form>
               <div class="btn-group d-flex"> <button class="btn btn-warning flex-fill text-white" onclick="validate();" > BUY Now </button></div>
                        <script type="text/javascript">
                            function validate(){
                                        // alert("currently ! this process is ongoing..");
                                    window.location = "http://localhost/check.html";
                            }

                        </script>

        </div> 

    <?php       
        }
    }
    ?>

  <!--   <?php

        //function BUY NOW() {
            echo "This is Button1 that is selected";
        //}

    ?>
 -->
</body>
</html>