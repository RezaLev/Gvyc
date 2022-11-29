<html>
    <head>
        <title>Halaman Login Admin</title>
        <link rel="stylesheet" href="{{ asset('css/login_admin.css') }}">
        
    </head>
    <body>
    <div class="container">
        <h3 style="text-align: center;">LOGIN</h3><br>
            <form action="" method="post" class="login-email">
                <ul style="list-style-type: none;">
                    <li>
                        <div class="input-group">
                            <label for="username">Username</label><br>
                            <input type="text" placeholder="username..." name="username" id="username" required><br>
                        </div>
                    </li>
                    <li>
                        <div class="input-group">
                            <br>
                            <label for="password">Password</label><br>
                           <input type="password" placeholder="password..." name="password" id="password" required><br>
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