<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

    <title>Register page</title>
</head>
<body><div class="form-container">
        <form action="userinfo.php" method="POST"class="form-container form">
            <h1 class="text-center">Register now</h1>
            
            <input type="text" name="name" placeholder="Enter your name" required>
        
            <input type="email" name="email" placeholder="Enter your email" required>
        
            <input type="password" name="password" placeholder="Enter your password" required>

           
            <input type="password" name="cpassword" placeholder="Conform password" required>

           
            <input type="submit" name="submit-btn" value="Register now" class="btn" required>

           
            <p>Already have an account?<a href="login.php"> log in</a></p>
           


        </form>
    </div>
    </section>
    <style>
        *{
    margin:0px;
    padding:0px;
    box-sizing: border-box;
}
:root{
   --box-shadow: 0px 0px 0px 6px rgb(255 255 255/40%);
   --orange: #fcc927;
}
a{
    text-decoration:none;
}
ul{
    list-style: none;
}
.btn{
    padding: .8rem 2.5em;
    text-transform:uppercase;
    background:#fff;
    color: var(--orange);
    border-radius:10px;
    cursor:pointer;
}
.btn:hover{
    background:black;
}
.title{
    text-align: center;
    margin-bottom:1rem;
}
.title h1{
    font-size:3rem;
}
.title span{
    font-size: 1.2rem;
    text-transform: uppercase;
    line-height:2;
    color:var(--orange);
}
.line,
.line4{
    
    width:100%;
    height:100px;
    margin-top:-3.6rem;
}
.line{
    margin-bottom: 10rem;
}
.line2,
.line3{
   
    width:100%;
    height:100px;
    margin-top:-3.5rem;

}
.line3{
    margin-top:-3.5rem;
    margin-bottom: 7rem;
}
input,
button,
textarea{
    outline:none;
    border:1px solid #55555544;
    background:transparent;
    width:100%;
    padding:1rem 1.5rem;
    border-radius:10px;
    margin:1rem 0;
}
button{
    cursor:pointer;
}
input[type=submit]{
    cursor:pointer;
}
/*----------form containr------------*/
.form-container{
    background:var(--orange);
    width:100%;
    min-height:100vh;
    padding:4rem 0;
    position:relative;
}
.form-container::before{
    content:'';
    position:absolute;
    top:-5%;
    left:-10px;
    width:255px;
    height:650px;
    background-size:225px;
    background-repeat: no-repeat;
    z-index:100;
}.form-container::after{
    content:'';
    position:absolute;
   bottom: 0;
   right: 0;
    width:255px;
    height:220px;
    background-size:225px;
    background-repeat: no-repeat;
    z-index:1;
}
.form-container h1{
    width:60%;
    margin:2rem 0;
    font-size:2.3rem;
    text-align:center;
}
.form-container form{
    width:60%;
    margin:1rem auto;
    background:rgb(255 255 255/80%);
    box-shadow: var(--box-shadow);
    padding:2rem;
    position:relative;
    border-radius:5px;
}
.form-container form label{
    text-transform: uppercase;
    width:100%;
}
.form-container form input{
    width:85%;
}
.form-container form textarea{
    width:85%;
    height: 200px;
}
.form-container form button{
    width:85%;
    background: var(--orange);
    border:none;
}
    </style>
</body>
</html>