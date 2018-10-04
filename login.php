
<div class="login-background">
    <div class="form-container">
        <form action="<?php  $_SERVER['PHP_SELF']; ?>" method="POST">
            
            <div class="login-column">
                <label>username</label>
                <input type="text" name="username">
            </div>
            <div class="login-column">
                <label>password</label>
                <input type="password" name="password">
            </div>
            
            <div class="login-row">
                <input type="submit" value="login" name="loginSubmit">
                <a href="./">
                    <p>Register</p>
                </a>
                
            </div>
            
        </form>
    </div>

</div>

