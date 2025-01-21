<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
  <div class="form-container">
<form action="userinfo.php" class="form-conatanier form" method="POST">
     <div class="flex-container">       
  <img src="img\OIP (2).jpg" class="rounded-circle" alt="Cinque Terre" width="120px" height="190px"> 
</div>

    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
    <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd" required>
    <div class="container">
      <input class="form-check-input" type="checkbox" name="remember"> Remember me </div>
  <button type="submit" name="submit"class="btn btn-primary">Log in</button>
  <a href="index.php">register</a>
</form>
</div>
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
    outline:none;
    border:1px solid #55555544;
    background:transparent;
    width:50rem;
    padding:1rem 1rem;
    border-radius:5px;
    margin:1rem 0;
}

input[type=submit]{
    cursor:text;
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
.form-container form button{
    width:20%;
    background: var(--orange);
    text-align:center;
}
a:hover{
  color:red;
}
.flex-container {
  display: flex;
  justify-content: center; /* Horizontal centering */
  align-items: center; /* Vertical centering */
}

</style>
</body>
</html>