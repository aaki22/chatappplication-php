
<?php
session_start();
if(!isset($_SESSION['unique_id'])){
	header("location: login.php");
}
?>


<?php include_once "header.php";?>	
<body>
	<div class="wrapper">
		<section class="users">
			<header>
				<?php
				include_once "php/config.php";
				$sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id={$_SESSION['unique_id']}");
				if(mysqli_num_rows($sql)>0){
					$row=mysqli_fetch_assoc($sql);
				}
				?>

				<div class="content">
					<img src="php/images/<?php echo $row["img"]?>" alt="">
					<div class="details">
						<span><?php echo $row["fname"]." ".$row["lname"]?></span>
						<p><?php echo $row['status'] ?></p>
					</div>
				</div>
				<a href="#" class="logout">logout</a>
			</header>
			<div class="search">
				<span class="text">select an user to start chat</span>
				<input type="text" placeholder="enter name to search...">
				<button><i class="fa fa-search" aria-hidden="true"></i></button>
			</div>
			<div class="user-list">
				
			</div>
		</section>
	</div>
	<script src="javascript\users.js"></script>
</body>
</html>