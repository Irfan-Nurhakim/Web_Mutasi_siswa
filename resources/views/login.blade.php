<!DOCTYPE html>
<html>

<head>
    <title>E Mutasi</title>
    <link rel="stylesheet" type="text/css" href="slide navbar style.css">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500&display=swap" rel="stylesheet">
    <link href="css/login.css" rel="stylesheet">
    <script src="js/home.js"> </script>
</head>

<body>
    <div class="main tests">
        <input type="checkbox" id="chk" aria-hidden="true">
        <div class="signup">
            <label for="chk" aria-hidden="true">
                <img src="{{ asset('storage/assets/logo.png') }}" alt="Link Image" class="img-rounded">
            </label>
        </div>
        <div class="login">
            <form action="/login" method="POST">
                @csrf
                <label for="chk" aria-hidden="true" class="teks-login">Login</label>
                <input type="email" name="username" placeholder="Email@example.com" required="" class="username">
                <input type="password" name="password" placeholder="Password" required="" class="password">
                <button type="submit">Masuk</button>
            </form>
        </div>
    </div>
    </div>
    <script>

    </script>
</body>

</html>
