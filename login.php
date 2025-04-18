<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="login.css">
    
</head>
<body>
    <div class="container">
        <form class="form" id="login">
            <h1 class="form_title">login</h1>
            <div class="form__message form__message---error"></div>
            <div class="form__input-group">
                <input type="text" class="form__input" autofocus placeholder="ID">
                <div class="form__input-error-message"></div>
            </div>

            <div class="form__input-group">
                <input type="password" class="form__input" autofocus placeholder="Password">
                <div class="form__input-error-message"></div>
            </div>

                <button class="form__button" type="submit" onclick="">Continue</button>
            
                
            <p class="form__text">
                <a href="forgot_password.html" class="form__link">Forget your password?</a>
            </p>

            <p class="form__text">
                <a class="form__link" href="registeration.html" id="linkCreateAccount">Don't have an account? Create account</a>
            </p>
        </form>
    </div>
</body>
</html>