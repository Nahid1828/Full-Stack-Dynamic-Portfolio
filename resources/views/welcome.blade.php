<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
    body{
        margin: 0;
        padding: 0;
    }
    .navbar{
        display: flex;
        justify-content: space-between;
        background-color: #0c6168;
        text-align: center;
        padding: 10px 10px;
    }
    .nav-heading h1{
           text-align: left;
           color: white;
      }

   .navbar-menu{
    display: flex
    justify-content: space-evenly;
    /* margin-left: 100px; */
    margin-top: 30px;
    gap: 50px;
    }

    .navbar-menu a{
    padding: 5px 10px;
    margin: 20px 0;
    background-color: #40868b;
    border-radius: 10px;
    color: white;
    text-decoration: none;
    }
    .navbar-menu a:hover{
        background-color: azure;
    }
    
    .profile h1, 
    .profile p{
        text-align: center;
    }
    </style>
</head>
<body>
    <nav>
    <div class="navbar">
        <div class="nav-heading">
         <h1>Nahid Islam</h1>
        </div>
        <div class="navbar-menu">
          <a href="#">Home</a>
          <a href="#">About Me</a>
          <a href="#">Skill</a>
          <a href="#">Contact Me</a>
        </div>
    </nav>

       
        <div class="profile">
            <h1>I am Web Developer</h1>
            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad corporis autem inventore. Itaque, laboriosam! Est officia asperiores quaerat culpa, aliquid dignissimos repellendus sunt facere nesciunt reiciendis molestias veniam cumque porro.</p>
        </div>



        <div class ="about-me">
        <hr>
        <div class="about-me-image">
            <img src="" alt="">
        </div>
            <div class="About me desc">
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eius, nulla?</p>
            </div>
        </div>


    </div>
    


</body>
</html>