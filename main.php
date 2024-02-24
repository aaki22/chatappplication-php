

<?php include_once "header.php";?>

<body>
	<div class="wrapper">
		<section class="form signup">
			<header>Realtime chat app</header>
		<form action="#" enctype="multipart/form-data">
			<div class="error-txt">Error Massage !</div>
			<div class="name-details">
				<div class="field input">
					<label>First Name</label>
					<input type="text" name="fname" placeholder="First Name" required>
				</div>
				<div class="field input">
					<label>Last Name</label>
					<input type="text" name="lname" placeholder="Last Name" required>
				</div>
			</div>
			<div class="field input">
				<label>Email Address</label>
				<input type="text" name="email" placeholder="enter your Email address" required>
			</div>
			<div class="field input">
				<label>password</label>
				<input type="password" name="password" placeholder="enter your new password" required>
				<i class="fa-solid fa-eye"></i>
			</div>
			<div class="field image">
				<label>select profile image</label>
				<input type="file" name="img" required>
			</div>
			<div class="field button">
				<input type="submit" value="continue to chat">
			</div>
		</form>

		<div class="link">Already signed up? <a href="login.php">login now</a></div>
	</section>
</div>

<script src="javascript\pass-show.js"></script>
<script type="text/javascript" src="javascript\signup.js"></script>


</body>
</html>