</div>


   <div class="footer">
   	  <div class="wrapper">	
	     <div class="section group">
				<div class="col_1_of_4 span_1_of_4">
						<h4>MẠNG XÃ HỘI</h4>
						<ul>
						<li><a href="https://www.facebook.com/bale.gareth.3551380">Facebook</a></li>
						<li><a href="#"><span>Twitter</span></a></li>
						<li><a href="#"><span>Page</span></a></li>
						</ul>
					</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>VỀ CHÚNG TÔI</h4>
						<ul>
						<li><a href="faq.php">Giới thiệu</a></li>
						<li><a href="about.php">Chính sách ưu đãi</a></li>
						<li><a href="secu.php">Chính sách bảo mật</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>TÀI KHOẢN </h4>
						<ul>
							<li><a href="profile.php">Tài khoản</a></li>
							<li><a href="index.php">Giỏ hàng</a></li>
							<li><a href="qrcode.php">Mã thanh toán</a></li>
						</ul>
				</div>
				<div class="col_1_of_4 span_1_of_4">
					<h4>LIÊN HỆ</h4>
						<ul>
							<li><span>+84 392683826</span></li>
							<li><span>anh.nnd183475@sis.hust.edu.vn</span></li>
							
						</ul>
						
				</div>
			</div>
			
     </div>
    </div>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 
    <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	</script>
    <a href="#" id="toTop" style="display: block;"><span id="toTopHover" style="opacity: 1;"></span></a>
    <link href="css/flexslider.css" rel='stylesheet' type='text/css' />
	  <script defer src="js/jquery.flexslider.js"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
</body>
</html>
