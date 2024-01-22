<html>

<head>
    <!-- TAILWIND>CSS -->
    <link href="https://cdn.jsdelivr.net/npm/daisyui@3.7.4/dist/full.css" rel="stylesheet" type="text/css">
    <!-- TAILWIND.JS -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        body {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
    </style>

    <title>Login | Kansa</title>
</head>

<body align="center" class="text-white">
    <h2>reCAPTCHA verification failed</h2>
    <p>Hang in there! We are are redirecting you.</p>
    <?php header("refresh: 5; URL='Login.php'");?>
    <center><span class="loading loading-bars loading-xs"></span></center>
</body>

</html>
