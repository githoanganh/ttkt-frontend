<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/css.css">
    <title>Login</title>
</head>
<body>
<div class="contrainer">
    <div class="wrapper" >
        <div class="login">
            <div class="header">
                <img src="img/logo.png" alt="">
                <h2>Simulor</h2>
            </div>
            <p>Enter your email address and password to access admin panel</p>
            <form action="">
                <div class="log">
                    <label class="label" >Email addrerss</label>
                    <br/>
                    <input class="box" type="email" placeholder="  Enter your email">
                </div>
                <div class="log">
                    <label class="label" >Password</label>
                    <br/>
                    <input class="box" type="password" placeholder="  Enter your password">
                </div>
                <div class="boxcheck">
                    <label class="checkbox">Remember me
                        <input type="checkbox" checked="check" >
                        <span class="checkmark"></span>
                    </label>
                </div>
                <div class="log">
                    <button type="submit">Login</button>
                </div>

            </form>
        </div>

    </div>
    <div class="footer">
        <a class="light" href="">Forgot your password?</a>
        <br>
        <a class="light" href="">Don't have an account?</a>
    <a class="bold" href="{{url('register')}}">Sign Up</a>
    </div>
</div>
</body>
</html>
