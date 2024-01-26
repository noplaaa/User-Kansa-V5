<?php
error_reporting(0);
session_start();
?>

<html>

<head>
	<!-- RECAPTCHA -->
	<?php include "../../../components/utilities/reCAPTCHA.php"; ?>
	<!-- RESOURCE -->
	<?php include "../../../components/utilities/resources.html" ?>

	<title>Login | Kansa</title>
</head>

<body class="bg-yellow-200">
	<div class="container mx-auto flex items-center justify-center sm:w-[350px] lg:w-full h-screen">
		<!-- Card -->
		<div class="w-full max-w-md bg-white p-8 rounded-[30px] shadow-2xl">
			<img src="../../../components/IMG_Web/LOGO - Negative.png"
				class="sm:w-[70px] sm:h-[70px] md:w-[80px] md:h-[80px] lg:w-[90px] lg:h-[90px] mx-auto mb-4">

			<form action="../../../config/controllers/login/Proses_Login.php" method="POST" id="login">
				<!-- Welcome Message -->
				<div class="justify-center item-center mb-5">
					<p class="font-bold text-gray-700 sm:text-sm md:text-md lg:text-lg">Welcome back!</p>
					<p class="sm:text-xs lg:text-sm">please Log In to continue with us</p>
				</div>

				<!-- Username -->
				<div class="mb-4">
					<label class="block text-gray-700 sm:text-xs lg:text-sm mb-2" for="username">
						Username
					</label>
					<div class="relative flex items-center">
						<?php include "../../../components/icons/username.svg"?>
						<input type="text" name="username" id="username" placeholder="example : user"
							class="input input-bordered w-full pl-12 sm:input-sm lg:input-md" autocomplete="off"
							required>
					</div>
				</div>

				<!-- Password -->
				<div class="mb-4">
					<label class="block text-gray-700 sm:text-xs lg:text-sm mb-2" for="password">
						Password
					</label>
					<div class="relative flex items-center">
						<!-- call icons -->
						<?php include "../../../components/icons/password.svg"?>
						<input type="password" name="pass" id="password" placeholder="example : 123"
							class="input input-bordered w-full pl-12 sm:input-sm lg:input-md" required>
					</div>
				</div>

				<!-- Submit -->
				<div class="flex flex-col">
					<button class="btn btn-warning sm:btn-sm lg:btn-md w-full g-recaptcha"
						data-sitekey="6LcIEVooAAAAANWXcerxsKOuRAjo1sIVQfldVdQx" data-callback='onSubmit'
						data-action='submit'>
						Log In
					</button>
				</div>

				<div class="divider text-xs">or with</div>

				<!-- Social Icons -->
				<div class="flex justify-center sm:space-x-5 lg:space-x-10 mb-5">
					<a href="#" class="text-blue-500" title="Google">
						<?php include "../../../components/icons/google.svg" ?>
					</a>
					<a href="#" class="text-blue-500" title="Twitter">
						<?php include "../../../components/icons/twitter.svg" ?>
					</a>
					<a href="#" class="text-blue-500" title="Facebook">
						<?php include "../../../components/icons/facebook.svg" ?>
					</a>
				</div>
				<div class="flex justify-center text-sm text-gray-700 sm:text-xs lg:text-md">Copyright © 2023 - All
					right reserved</div>
			</form>
		</div>
	</div>
</body>

</html>