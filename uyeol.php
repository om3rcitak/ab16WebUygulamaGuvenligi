<?php require "header.php"; ?>

		<div class="container well">
			<h2 class="text-center">BAUN Bilgisayar ve İnternet Topluluğu Üye Yönetim Sistemi</h2>
			<h4 class="text-center">Merhaba hoşgeldiniz. Lütfen üye iseniz giriş yapınız değil ise üye olunuz</h4>
			
			<?php
			if(isset($_POST["username"])){
				$user = $_POST["username"];
				$pass = md5($_POST["password"]);
				
				$db->query("INSERT INTO users VALUES (NULL, '$user', '$pass')");
				
				header("Location: index.php");

				// echo '<div class="alert alert-success" style="margin-top:50px;"><strong>Başarılı!</strong> Başarıyla kayıt oldunuz. <a href="girisyap.php">Giriş Yapmak İçin Buraya Tıklayın</a></div>';
				
			}
			?>
			
			<form method="post" role="form" style="margin-top:50px;" enctype="multipart/form-data">
				<div class="form-group">
					<label for="email">Kullanıcı Adı:</label>
					<input type="text" name="username" class="form-control" id="u" placeholder="Kullanıcı Adınızı Giriniz">
				</div>
				<div class="form-group">
					<label for="pwd">Şifre:</label>
					<input type="password" name="password" class="form-control" id="pwd" placeholder="Şifrenizi Giriniz">
				</div>
				<button type="submit" class="btn btn-default">Kayıt Ol</button>
			</form>
		</div>
		
<?php require "footer.php"; ?>