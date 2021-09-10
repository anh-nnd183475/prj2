<?php 
	include 'inc/header.php';
	// include 'inc/slider.php';
?>

<?php
   
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['submit'])) {
        
        $insertCustomers = $cs->insert_customers($_POST);
        
    }
?>
<?php
	if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {
        
        $login_Customers = $cs->login_customers($_POST);
        
    }
?>
 <div class="main">
    <div class="content">
    	 <div class="login_panel">
        	<h3>ĐĂNG NHẬP</h3>
        	<p>Nếu bạn đã có tài khoản</p>
        	<?php
			if(isset($login_Customers)){
    			echo $login_Customers;
    		}
        	?>
        	<form action="" method="post">
                	<input  type="text" name="email" class="field" placeholder="Email...">
                    <input  type="password" name="password" class="field"  placeholder="mật khẩu..." >
                 
                 <p class="note">Bạn <a href="contact.php">quên mật khẩu?</a></p>
                    <div class="buttons"><div><input type="submit" name="login" class="grey" value="Đăng nhập"></div></div>
             </form>
          </div>
         <?php

         ?> 
    	<div class="register_account">
    		<h3>ĐĂNG KÝ TÀI KHOẢN MỚI</h3>
    		<?php
    		if(isset($insertCustomers)){
    			echo $insertCustomers;
    		}
    		?>
    		<form action="" method="POST">
		   			 <table>
		   				<tbody>
						<tr>
						<td>
							<div>
							<input type="text" name="name" placeholder="Nhập tên..." >
							</div>
							
							<div>
							   <input type="text" name="city"  placeholder="Thành phố/tỉnh..."  >
							</div>
							
							<div>
								<input type="text" name="zipcode"  placeholder="Code ví điện tử..."  >
							</div>
							<div>
								<input type="text" name="email"  placeholder="Email..."  >
							</div>
		    			 </td>
		    			<td>
						<div>
							<input type="text" name="address"  placeholder="Địa chỉ..."  >
						</div>
		    		<div>
						<select id="country" name="country" onchange="change_country(this.value)" class="frm-field required">
							<option value="null">Chọn vùng miền</option>   

							<option value="hcm">TPHCM</option>
							<option value="na">Nghệ An</option>
							<option value="hn">Hà Nội</option>
							<option value="dn">Đà Nẳng</option>
							

		         </select>
				 </div>		        
	
		           <div>
		          <input type="text" name="phone"  placeholder="Số điện thoại..." >
		          </div>
				  
				  <div>
					<input type="text" name="password"  placeholder="Mật khẩu..." >
				</div>
		    	</td>
		    </tr> 
		    </tbody></table> 
		   <div class="search"><div><input type="submit" name="submit" class="grey" value="Đăng ký"></div></div>
		    <p class="terms">Khi chọn "Đăng ký", bạn đã đồng ý với điều khoản của chúng tôi: <a href="secu.php">Các điều khoản</a>.</p>
		    <div class="clear"></div>
		    </form>
    	</div>  	
       <div class="clear"></div>
    </div>
 </div>
<?php 
	include 'inc/footer.php';
	
 ?>
