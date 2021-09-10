<?php 
	include 'inc/header.php';

	// include 'inc/slider.php';
?>
<?php
	if(isset($_GET['cartid'])){
        $cartid = $_GET['cartid']; 
        $delcart = $ct->del_product_cart($cartid);
    }
 	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
 		$cartId = $_POST['cartId'];
        $quantity = $_POST['quantity'];
        $update_quantity_cart = $ct->update_quantity_cart($quantity, $cartId);
        if($quantity<=0){
        	$delcart = $ct->del_product_cart($cartId);
        }
    }
?>
<?php
	if(!isset($_GET['id'])){
		echo "<meta http-equiv='refresh' content='0;URL=?id=live'>";
	}
?>
 <div class="main">
    <div class="content">
    	<div class="cartoption">		
			<div class="cartpage">
			    	<h2>Giỏ hàng của bạn</h2>
			    	<?php
			    	 if(isset($update_quantity_cart)){
			    	 	echo $update_quantity_cart;
			    	 }
			    	?>
			    	<?php
			    	 if(isset($delcart)){
			    	 	echo $delcart;
			    	 }
			    	?>
						<table class="tblone">
							<tr>

								<th width="20%">Tên sản phẩm</th>
								<th width="10%">Hình ảnh</th>
								<th width="15%">Giá</th>
								<th width="25%">Số lượng</th>
								<th width="20%">Tổng tiền</th>
								<th width="10%">Lựa chọn</th>
							</tr>
							<?php
							$get_product_cart = $ct->get_product_cart();
							if($get_product_cart){
								$subtotal = 0;
								$qty = 0;
								while($result = $get_product_cart->fetch_assoc()){
							?>
							<tr>
								<td><?php echo $result['productName'] ?></td>
								<td><img src="admin/uploads/<?php echo $result['image'] ?>" alt=""/></td>
								<td><?php echo $fm->format_currency($result['price'])." "."VNĐ" ?></td>
								<td>
									<form action="" method="post">
										<input type="hidden" name="cartId" value="<?php echo $result['cartId'] ?>"/>
										<input type="number" name="quantity" min="0"  value="<?php echo $result['quantity'] ?>"/>
										<input type="submit" name="submit" value="Update"/>
									</form>
								</td>
								<td><?php
								$total = $result['price'] * $result['quantity'];
								echo $fm->format_currency($total)." "."VNĐ";
								 ?></td>
								<td><a onclick="return confirm('Bạn có muốn xóa không?');" href="?cartid=<?php echo $result['cartId'] ?>">Xóa</a></td>
							</tr>
						<?php
							$subtotal += $total;
							$qty = $qty + $result['quantity'];
							}
						}
						?>
							
						</table>
						<?php
							$check_cart = $ct->check_cart();
								if($check_cart){
								?>
						<table style="float:right;text-align:left;" width="40%">
							<tr>
								<th>Tạm tính : </th>
								<td><?php 

									echo $fm->format_currency($subtotal)." "."VNĐ";
									Session::set('sum',$subtotal);
									Session::set('qty',$qty);
								?></td>
							</tr>
							<tr>
								<th>VAT : </th>
								<td>10%</td>
							</tr>
							<tr>
								<th>Tổng thanh toán :</th>
								<td><?php 

								$vat = $subtotal * 0.1;
								$gtotal = $subtotal + $vat;
								echo $fm->format_currency($gtotal)." "."VNĐ";
								?></td>
							</tr>
					   </table>
					  <?php
					}else{
						echo 'Chưa có gì trong giỏ của bạn, vui lòng chọn sản phẩm';
					}
					  ?>
					
					
					</div>
					<?php
					$check_cart = $ct->check_cart();
					if(Session::get('customer_id')==true && $check_cart){ 
					?>
						<a href="payment.php"><div style=" width: 180px; height: 30px ;
						margin: 10px auto; font-size: 20px; color:#000099 ">THANH TOÁN</div> </a>
					
					</div>
					<?php
					}else{ 
					?>
						<a class="muahang" style="text-align: right;" href="login.php"> Mua hàng</a>
					<?php
					} 
					?>
    	</div>  	<style type="text/css">
						a.muahang {
						    float: right;
						    padding: 10px 20px;
						    border: 1px solid #ddd;
						    background: #414045;
						    color: #fff;
						    cursor: pointer;
						}
					</style>
       <div class="clear"></div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>