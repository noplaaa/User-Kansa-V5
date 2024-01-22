<?php
error_reporting(0);
session_start();
?>

<html>

<head>
	<!-- RECAPTCHA -->
	<?php include "reCAPTCHA.php"; ?>
	<!-- RESOURCE -->
	<?php include "Components/utilities/resources.html" ?>

	<title>Login | Kansa</title>
</head>

<body>
	<div class="container mx-auto flex items-center justify-center h-screen">
		<div class="w-full max-w-xs">
			<img src="Components/IMG_Web/LOGO.png" class="mx-auto">

			<form action="Proses_Login.php" method="POST" id="login">
				<!-- Welcome Message -->
				<p class="font-bold text-gray-300 text-2xl mb-4">Welcome back!</p>

				<!-- Username -->
				<div class="mb-4">
					<label class="block text-gray-300 text-sm mb-2" for="username">
						Username
					</label>
					<div class="relative flex items-center">
						<span class="absolute inset-y-0 left-0 pl-3 flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round"
									d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
							</svg>
						</span>
						<input type="text" name="username" id="username" placeholder="example : user"
							class="input input-bordered w-full pl-12" autocomplete="off" required>
					</div>
				</div>

				<!-- Password -->
				<div class="mb-4">
					<label class="block text-gray-300 text-sm mb-2" for="password">
						Password
					</label>
					<div class="relative flex items-center">
						<span class="absolute inset-y-0 left-0 pl-3 flex items-center">
							<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
								stroke="currentColor" class="w-6 h-6">
								<path stroke-linecap="round" stroke-linejoin="round"
									d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
							</svg>
						</span>
						<input type="password" name="pass" id="password" placeholder="example : 123"
							class="input input-bordered w-full pl-12" required>
					</div>
				</div>

				<!-- Submit -->
				<div class="flex flex-col">
					<button class="btn btn-outline btn-warning w-full g-recaptcha"
						data-sitekey="6LcIEVooAAAAANWXcerxsKOuRAjo1sIVQfldVdQx" data-callback='onSubmit'
						data-action='submit'>
						Login
					</button>
				</div>
			</form>
		</div>
	</div>
</body>

</html>