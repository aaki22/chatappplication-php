<?php
session_start();
if(!isset($_SESSION['unique_id'])){
	header("location: login.php");
}

?>


<?php include_once "header.php";?>

<body>
	<div class="wrapper">
		<header>
			<?php
			include_once "php/config.php";
			$user_id=mysqli_real_escape_string($conn,$_GET['user_id']);
			$sql=mysqli_query($conn,"SELECT * FROM users WHERE unique_id={$user_id}");
			if(mysqli_num_rows($sql)>0){
				$row=mysqli_fetch_assoc($sql);
			}

			?>
			<a  href="user.php" class="back-icon"><i class='fa fa-arrow-left'></i></a>
				<img src="php/images/<?php echo $row["img"]?>" alt="">
				<div class="details">
					<span><?php echo $row["fname"]." ".$row["lname"]?></span>
					<p><?php echo $row['status'] ?></p>
				</div>
		</header>
		<section class="chat-area">
			
			<div class="chat-box">
				<div class="chat outgoing">
					<div class="details">
						<p>rjfn wjkfonnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnbfbfoijf jkffjfgfioo tnlfkmnklgn ermkkljg kl rjklngblernio g rbhmkghfgwuio </p>
					</div>
				</div>
				<div class="chat incoming">
					
					<div class="details">
						<p>rjfn wejkfo bfbfoijf jkffjfgfioo tnlfkmnklgn ermkkljg kl rjklngblernio g rbhmkghfgwuio </p>
					</div>
					<img src="img18.jpg">
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>rjfn wjkfonnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnbfbfoijf jkffjfgfioo tnlfkmnklgn ermkkljg kl rjklngblernio g rbhmkghfgwuio </p>
					</div>
				</div>
				<div class="chat incoming">
					
					<div class="details">
						<p>rjfn wejkfo bfbfoijf jkffjfgfioo tnlfkmnklgn ermkkljg kl rjklngblernio g rbhmkghfgwuio </p>
					</div>
					<img src="img18.jpg">
				</div>
				<div class="chat outgoing">
					<div class="details">
						<p>rjfn wjkfonnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnnbfbfoijf jkffjfgfioo tnlfkmnklgn ermkkljg kl rjklngblernio g rbhmkghfgwuio </p>
					</div>
				</div>
			</div>
			<form action="#" class="typing-area" autocomplete="off">
				
				<input type="text" name="outgoing_id"  value="<?php echo $_SESSION['unique_id']?>" hidden >
				<input type="text" name="incoming_id" value="<?php echo $user_id?>" hidden >
				<input type="text"  class="input-field" name="message" placeholder="type a message">
				<button>
				<i class="fa-solid fa-paper-plane"></i>

				</button>
			</form>
		</section>
	</div>
	<script  src="javascript/chat.js"></script>
</body>
</html>