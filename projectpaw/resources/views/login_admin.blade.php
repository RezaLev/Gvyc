<html>
    <head>
        <title>Halaman Login Admin</title>
        <link rel="stylesheet" href="{{ asset('css/login_admin.css') }}">

        <!-- Font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@300&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@600&display=swap" rel="stylesheet">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@700&display=swap" rel="stylesheet">
        
    </head>
    <body>
    <div class="container">
        <h3 style="text-align: center;">Login Admin</h3><br>
            <form action="" method="post" class="login-email">
                <ul style="list-style-type: none;">
                    <li>
                        <div class="input-group">
                            <input type="text" placeholder="Email" name="email" id="email" required><br>
                        </div>
                    </li>
                    <li>
                        <div class="input-group">
                            <br>
                           <input type="password" placeholder="Password" name="password" id="password" required><br>
                        </div>
                    </li>
                    <li>
                        <div class="input-group">
                            <br><br>
                            <button type="submit" name="login" id="login" class="btn">Login</button>
                        </div>
                    </li>
                </ul>
            </form>
        </div>
    </body>
</html>