<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
  
    <title>@yield('title','Login')</title>
</head>
<body>
    
   
    <style>
        body{
         
            display: flex;
            justify-content: space-around;
            align-items: center;
            text-align: center;
            background-color: aliceblue;


        }
        .container{
            margin-top:2rem;
            background-color:white;
    width: 33%;
    border-radius: 5px;
    box-shadow: 5px 5px 5px 8px#343a406e;


        }
        .form-container{
            width: 100%;
        }
        input{
            width: 95.5%;
            height: 2rem;
            border-radius: 5px;
            border: .1px solid #343a40;
            color: #343a40;
            background-color: aliceblue;

        }
        input:last-child{
            width: 10%;
            background-color: green;
            display: block;
    margin: 20px 5px;
    height: 40px;
    width: fit-content;
    padding: 10px 25px;
    border-radius: 5px;
    background-color: #132b43;
    border: none;
    text-transform: capitalize;
    font-size: 120%;
    color: white;
           
        }
        .login-title{
            color: #132b43;
    font-family: "Inter", sans-serif;
        }
    </style>
    <div class="container">
        <div class="header">
            <h1 class="login-title">Login</h1>
        </div>
        <div class="form-container">
        <form action="{{url('/login')}}" method="post">
        {{csrf_field()}}
        <input type="text" name="Username" id="" placeholder="Enter your Username"> <br> <br>
        <input type="password" name="password1" id="" placeholder="Enter your password"> <br> <br>
      
        <input type="submit" value="submit">
    </form>
        </div>
    </div>
 
   
    
</body>
</html>