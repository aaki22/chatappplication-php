<?php include_once "header.php";?>
<body>
	<div class="wrapper">
		<section class="form login">
			<header>Realtime chat app</header>
		<form action="#">
			<div class="error-txt">Error Massage !</div>
			
			<div class="field ELinput">
				<label>Email Address</label>
				<input type="text" name="email" placeholder="enter your Email address">
			</div>
			<div class="field PLinput">
				<label>password</label>
				<input type="password" name="password" placeholder="enter your new password">
				<i class="fa-solid fa-eye"></i>
				
			</div>
			
			<div class="field button">
				<input type="submit" value="continue to chat">
			</div>
		</form>

		<div class="link">Not yet signed up? <a href="main.php">signup now</a></div>
	</section>
</div>
<script src="javascript\pass-show.js"></script>
<script src="javascript\login.js"></script>
</body>
</html>