<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<style type="text/css">
    body{
        padding: 0;
        margin: 0;
        box-sizing: border-box;
        font-family: 'Bahnschrift', sans-serif;
    }
    .outer_container{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        padding: 30px;
        background-color: white;
        box-shadow:inset 2px 2px 12px gray;
        border-radius: 10px;
    }
    .login_container{
        display: flex;
    }
    /*.left_side{
        border-right: 2px solid green;
    }*/
    .right_side{
        box-shadow:inset 2px 2px 12px gray;
        border-top-right-radius: 50px;
        border-bottom-left-radius: 50px;
        background-color: whitesmoke;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        width: 450px;
        height: 450px;
    }
    .left_side{
        width: 450px;
        height: 450px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: flex-start;
    }
    .left_side img{
        width: 130px;
        height: auto;
    }
    .welcome p:nth-child(1){
        font-size: 50px;
        color: darkgreen;
        margin-bottom: 0;
    }
    .welcome p:nth-child(2){
        font-size: 30px;
        margin-top: 0;
    }
    .loginTxt{
        top: 0;
        position: absolute;
        padding: 20px;
        font-size: 40px;
    }
    .btn_submit input{
        padding: 10px;
        width: 100%;
        border-radius: 50px;
        font-size: 15px;
    }
    .btn_submit{
        transform: translateY(80px);
    }
    .input_container{
        position: relative;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: all;
    }
    .input_container input{
        outline: none;
        padding: 10px;
        margin-bottom: 30px;
        width: 100%;
        border-radius: 5px;
        border-color: gray;
        background-color: whitesmoke;
    }
    .input_container span{
        left: 5px;
        top: 10px;
        position: absolute;
        pointer-events: none;
    }
    .input_container input:valid ~ span,
    .input_container input:focus ~ span{
        transform: translateY(-30px);
        transition: .3s ease-in-out;
        background-color: whitesmoke;
        border-left: 2px solid green;
        border-right: 2px solid green;
        padding: 5px;
        font-size: 14px;
    }
    .input_container input:valid,
    .input_container input:focus{
        border:2px solid green;
    }

</style>
<body>
    <div class="outer_container">
        <div class="login_container">
            <div class="left_side">
                <img src="image/logo_trans.png">
                <div class="welcome">
                    <p>Welcome!</p>
                    <p>to the Supreme Student Council Administration Portal</p>
                </div>
            </div>
            <div class="right_side">
                <div class="loginTxt">
                    <p>Login</p>
                </div>
                <form method="post">
                    <div class="input_field_holder">
                        <div class="input_container">
                            <input type="text" required>
                            <span>Username</span>
                        </div>
                        <div class="input_container">
                            <input type="text" required>
                            <span>Password</span>
                        </div>
                        <div class="btn_submit">
                            <input type="submit" name="" value="Login">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>