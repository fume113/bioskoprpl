<?php


?>

<!DOCTYPE html>
<html>
<title> Form Login </title>
<meta name="viewport" content="width=device-width, initial scale=1">
<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


<style>
	* {
		font-family: 'Quicksand', sans-serif;
	}

	body {
		background: -webkit-linear-gradient(to right, #082A3A, #1f6cab);
		background: linear-gradient(to right, #082A3A, #1f6cab);
		height: 100vh;
	}

	.global-container {
		height: 100%;
		display: flex;
		align-items: center;
		justify-content: center;
		color: #DFF6FF !important;
	}

	.card-title {
		margin-bottom: 25px;
	}

	.form-login {
		background: #06283D !important;
		width: 380px;
		height: auto;
		padding: 20px;
		border-radius: 20px;
	}

	input[type="customer"],
	input[type="password"] {
		background: #06283D !important;
		color: #DFF6FF !important;
		border: 1px solid #816797 !important;
		outline: none;
		border-radius: 20px;
		margin-bottom: 25px;
	}

	input[type="customer"]:focus,
	input[type="password"]:focus {
		outline: none;
		border: none;
		background: #06283D !important;
		box-shadow: none !important;
	}

	input[type="customer"]:root,
	input[type="password"]:root {
		background: none;
		outline: none;
		border: none;
	}

	::placeholder {
		color: #DFF6FF !important;
		opacity: 1;
		/* Firefox */
	}

	:-ms-input-placeholder {
		/* Internet Explorer 10-11 */
		color: #DFF6FF !important;
	}

	::-ms-input-placeholder {
		/* Microsoft Edge */
		color: #DFF6FF !important;
	}

	.card-title {
		font-weight: bold;
		padding-top: 15px;
	}

	.btn-first {
		border-radius: 20px;
		border: 2px solid #1F4690 !important;
		background: #1F4690 !important;
		outline: none;
		color: #DFF6FF !important;
		padding: 8px;
		transition: all 0.3s ease-in-out !important;
	}

	.btn-first:hover {
		/* color: #76BA99 !important; */
		background: none !important;
		box-shadow: none !important;
	}
</style>

<body>

	<div class="global-container">
		<div class="card form-login">
			<div class="card-body">
				<h1 class="card-title text-center mb-5">Form Login</h1>
				<div class="card-text">
					<form action="login.php" id="form-login" method="post">
						<div class="mb-3">
							<label for="exampleInputCustomer" class="form-label">Username</label>
							<input name="username" required type="customer" class="form-control" id="exampleInputCustomer1" aria-describedby="emailHelp">
						</div>
						<div class="mb-3">
							<label for="exampleInputPassword" class="form-label">Password</label>
							<input name="password" required type="password" class="form-control" id="exampleInputPassword1">
						</div>
						<button type="button" class="btn-first btn-primary mt-4 w-100" onclick="handlelogin()">Login</button>
						<a href="./formdaftar.php" class="btn-first btn-primary mt-4 w-100 text-center text-decoration-none" type="button">Register</a>
						<a href="./index.php" class="btn-first btn-primary mt-4 w-100 text-center text-decoration-none" type="button">Home</a>
					</form>
				</div>
			</div>
		</div>
	</div>

</body>

<script type=" text/javascript">
	function handlelogin() {
		const id = document.querySelector("#exampleInputCustomer1").value
		const password = document.querySelector("#exampleInputPassword1").value

		const form = document.querySelector("#form-login")
		form.submit();
	}
</script>




</body>

</html>