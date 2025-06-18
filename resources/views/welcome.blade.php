<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        * {
            box-sizing: border-box;
            font-family: "Fira Sans", sans-serif;
        }

        body {
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            background-color: #0c6168;
            text-align: center;
            padding: 10px 10px;
        }

        .nav-heading h1 {
            text-align: left;
            color: white;
        }

        .navbar-menu {
            display: flex justify-content: space-evenly;
            /* margin-left: 100px; */
            margin-top: 30px;
            gap: 50px;
        }

        .navbar-menu a {
            padding: 5px 10px;
            margin: 20px 0;
            background-color: #40868b;
            border-radius: 10px;
            color: white;
            text-decoration: none;
        }

        .navbar-menu a:hover {
            background-color: azure;
        }

        .profile h1,
        .profile p {
            text-align: center;
        }


        /* about me design starts here  */
        .about-me {
            background-color: #39a4ac;
            padding: 1% 7%;
            color: white;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
        }

        .aboutme-image img {
            border: 5px solid white;
            border-radius: 50%;
            height: 220px;
            width: 200px;
        }

        .about-me p {
            text-align: center;
        }

        .about-me a {
            font-size: 1.2rem;
        }

        .cv-button {
            background-color: #052d2f;
            color: white;
            border: none;
            border-radius: 12px;
            padding: 15px;
            font-size: 1rem;
            cursor: pointer;
            text-align: center;
            margin: 10px;
        }

        .about-me::after {
            clear: both;
            display: table;
            content: '';
        }

        /* about me design ends here  */
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
        <h1 class="title">I am Web Developer</h1>
        <p id="test">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ad corporis autem inventore. Itaque, laboriosam!
            Est officia asperiores quaerat culpa, aliquid dignissimos repellendus sunt facere nesciunt reiciendis
            molestias veniam cumque porro.</p>
    </div>



    <!-- about me starts here  -->
    <div class="about-me" id="about-me-id">
        <h2>ABOUT ME</h2>
        <hr class="dotted-hr">
        <div class="aboutme-image col-6">
            <img src="images/Nahid.jpg" width="100%" alt="">
        </div>
        <div class="aboutme-desc col-6">
            <p>I like to call myself “a passionate computer science student & Web developer”. </p>
            <p>I'm student of BSc in Computer science and Engeering at Daffodil International University.</p>

            <hr class="aboutme-hr">
            <p>Name: Nahid Islam</p>
            <hr class="aboutme-hr">
            <p>Address: Dhaka, Bangladesh</p>
            <hr class="aboutme-hr">
            <p>Email: <a href="mailto:n.i.nahid02@diu.edu.bd"> n.i.nahid02@diu.edu.bd </a> </p>
            <hr class="aboutme-hr">
            <p>Phone: <a href="tel:+8801787087017">+8801787087017</a> </p>
            <hr class="aboutme-hr">
            <p>Website: <a href="#" target="blank"></a> </p>
            <hr class="aboutme-hr">

            <p>
                <a href="#" target="blank">
                    <button class="cv-button">Download CV</button>
                </a>
            </p>

        </div>
    </div>
    <!-- about me ends here  -->
    </div>
    <script src="{{ asset('assets/js/script.js') }}"></script>
</body>

</html>
