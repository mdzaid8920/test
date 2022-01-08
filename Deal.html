<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Order Now</title>
    <link rel="shortcut icon" href="alm-removebg-preview.png" />
	
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ"crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    <link rel="stylesheet" href="style.css" />
</head>

<body>
    <header>
        <div class="header-1">
            <a href="" class="logo"><img src="alm-removebg-preview.png" alt="" /><b>
                    &nbsp; Alif Laam Meem Printing Press</b></a>
            </form>
        </div>
        <div class="header-2">
            <div id="menu-bar" class="fas fa-bars"></div>
            <nav class="navbar">
                <a href="final.php">Home</a>
                <a href="final.php #product1">Products</a>
                <a href="Deal.php" style="color: white; background-color: #27ae60;  border-radius: 5rem;">Calculations</a>
                <a href="contact.php">Contact</a>
				<a href="aboutus.php">About us</a>
            </nav>
            <div class="icons">
                <a href="" class="fas fa-shopping-cart"></a>
                <a href="" class="fas fa-heart"></a>
                <a href="" class="fas fa-user-circle"></a>
            </div>
        </div>
    </header>
    <section class="product" id="product">

        <h1 class="heading">Calculate your <span>products</span> total bill here.</h1>

        <div class="box-container">

            <div class="box">
            <?php 
session_start();
$connect = mysqli_connect("localhost", "root", "", "alm");

if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="deal.php"</script>';
			}
		}
	}
}

?>



		<br />
		<div class="container">
			<?php
				$query = "SELECT * FROM tbl_product ORDER BY id ASC";
				$result = mysqli_query($connect, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
				?>
			<div class="col-md-4">
				<form method="post" action="deal.php?action=add&id=<?php echo $row["id"]; ?>">
					<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
						<img src="images/<?php echo $row["image"]; ?>" class="img-responsive" /><br />

						<h4 class="text-info"><?php echo $row["name"]; ?></h4>

						<h4 class="text-danger">$ <?php echo $row["price"]; ?></h4>

						<input type="number" min="1" name="quantity" value="1" class="form-control" />

						<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />

						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add" />

					</div>
				</form>
			</div>
			<?php
					}
				}
			?>
			<div style="clear:both"></div>
			<br />
			<h3>Order Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th width="40%">Item Name</th>
						<th width="10%">Quantity</th>
						<th width="20%">Price</th>
						<th width="15%">Total</th>
						<th width="5%">Action</th>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>$ <?php echo $values["item_price"]; ?></td>
						<td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="deal.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right">Total</td>
						<td align="right">$ <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />


            </div>
        </div>
    </section>
        <section class="footer">
            <hr />

            <div class="box-container">
                <div class="box">
                    <a href="" class="logo"><img src="alm-removebg-preview.png" alt="" /><b>
                            &nbsp; Alif Laam Meem Printing Press</b></a>
                    <p>
                        If your are looking for premium quality online printing and business
                        printing services, then you are at right place.
                    </p>
                    <div class="share">
                        <a href="#" class="btn fab fa-facebook-f"></a>
                        <a href="#" class="btn fab fa-twitter"></a>
                        <a href="#" class="btn fab fa-instagram"></a>
                        <a href="#" class="btn fab fa-linkedin"></a>
                    </div>
                </div>
                <div class="vl"></div>
                <div class="box">
                    <h3>Our location</h3>
                    <div class="links">
                        <a href="#">Lahore</a>
                        <a href="#">Karachi</a>
                        <a href="#">Islamabad</a>
                        <a href="#">Multan</a>
                    </div>
                </div>
                <div class="vl"></div>
                <div class="box">
                    <h3>Quick links</h3>
                    <div class="links">
                        <a href="final.php">home</a>
                        <a href="final.php #product1">products</a>
                        <a href="deal.php">Calculations</a>
                        <a href="contact.php">contact</a>
                    </div>
                </div>
                <div class="vl"></div>
                <div class="box">
                    <h3>Download app</h3>
                    <div class="links">
                        <a href="#">google play</a>
                        <a href="#">window xp</a>
                        <a href="#">app store</a>
                    </div>
                </div>
            </div>

            <h1 class="credit">
                Created By:
                <span>
                    KAKI GANG ( A project of <i><b>Soft Solutions </b></i>)
                </span>
                | All rights reserved!
            </h1>
        </section>

        <script src="script.js"></script>
</body>

</html>