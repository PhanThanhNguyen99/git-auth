<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .box-content{
                margin: 0 auto;
                width: 800px;
                border: 1px solid #ccc;
                text-align: center;
                padding: 20px;
            }
            #user_login form{
                width: 300px;
                margin: 40px auto;
                padding: 20px;
            }
            #user_login form input{
                margin: 5px 0;
            }
        </style>
    </head>
    <body>
            <div id="user_login" class="box-content">
                <h1>Login</h1>
                <form action="user" method="post" autocomplete="off">
                    <input type = "hidden" name="_token" value="{{ csrf_token() }}"/>
                    <label>@yield('name')</label></br>
                    <input type="text" name="username" value="" /><br/>
                    <span style="color:red">@error('username'){{$message}}@enderror</span>
                    <span style="color:red">@error('used'){{$message}}@enderror</span></br>
                    
                    <label>Password</label></br>
                    <input type="password" name="password" value="" /></br>
                    <span style="color:red">@error('password'){{$message}}@enderror</span>
                    <br>
                    <input type="submit" value="Login" /><br/>
                    <a href="./register">Click to register</a>
                </form>
            </div>
            

    </body>
</html>