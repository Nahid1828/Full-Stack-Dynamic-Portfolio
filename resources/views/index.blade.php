<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- font awesome cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--Google Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Montserrat:ital,wght@0,100..900;1,100..900&family=Satisfy&display=swap"
        rel="stylesheet">


    @stack('style')

    <style>
        * {
            box-sizing: border-box;
            font-family: "Fira Sans", sans-serif;
        }

        body {
            margin: 0;

        }

        h1 {
            font-size: 2.5rem;
            text-align: center;
        }

        h2 {
            font-size: 1.5rem;
            text-align: center;
        }

        a {
            color: white;
            font-size: 1.2rem;
            text-decoration: none;
        }

        p {
            font-size: 1.2rem;
            text-align: justify;
        }

        [class*="col-"] {
            float: left;
            padding: 10px;

        }

        /* for mobile */

        [class*="col-"] {
            width: 100%;

        }

        /* navbar design starts here  */

        .navbar {
            background-color: #0c6168;
            padding: 0% 0%;
            text-align: center;
            position: fixed;
            width: 100%;
            z-index: 1;

        }

        .navbar h1 {
            color: white;
            margin: 0;
            padding-top: 10px;
        }

        .navbar-menu {
            display: flex;
            flex-direction: column;
            text-transform: uppercase;
        }

        .navbar-menu a {
            background-color: #40868b;
            border-radius: 10px;
            margin: 7px 0px;
            padding: 10px;
        }

        .navbar-menu a:hover {
            background-color: gray;
        }

        .navbar::after {
            content: '';
            display: table;
            clear: both;
        }

        /* navbar design ends here  */

        /* profile design starts from here  */

        .profile {
            padding: 130px 10px;
            position: relative;
            text-align: center;
        }

        .profile .top-weather-icon {
            position: absolute;
            right: 60px;
            top: 20px;
            transition: transform 2s;
        }

        .profile .top-weather-icon:hover {
            transform: rotate(360deg);
        }

        .profile-desc h1 {
            font-family: 'Satisfy', cursive;
            font-size: 3rem;
        }

        .profile-desc p {
            color: gray;
            margin: 0 auto 20px auto;
            text-align: center;
            width: 90%;
        }

        .profile .bottom-weather-icon {
            position: absolute;
            left: 60px;
            bottom: 10px;
            transition: transform 2s;
        }

        .profile .bottom-weather-icon:hover {
            transform: rotate(360deg);
        }

        .profile::after {
            content: '';
            display: table;
            clear: both;
        }

        /* profile design ends here  */

        /* about me design starts here  */
        .about-me {
            background-color: #39a4ac;
            padding: 1% 7%;
            color: white;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
            height: 100vh;
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

        /* professional-experience starts here */

        .professional-experience {
            padding: 1% 0%;
            height: 100vh;
        }

        .professional-experience .card {
            background-color: #a39e9e;
            border-radius: 5px;
            padding: 10px;
            transition: 0.3s;
            height: 600px;
        }

        .card:hover {
            box-shadow: 0 4px 8px 5px black;
        }

        .card-icon {
            text-align: center;
        }

        .card-icon img {
            margin-top: 20px;
            width: 100px;
        }

        .rounded-img {
            border: 5px solid white;
            border-radius: 50%;
            padding: 15px;
        }

        .card-title h2 {
            background-color: #616161;
            color: white;
            padding: 10px;
            text-align: center;
        }

        .professional-experience::after {
            clear: both;
            display: table;
            content: '';
        }

        .skills-container {
            padding-right: 45px;
        }

        .skills-container li {
            list-style: none;
            font-weight: bolder;
            margin: 30px 10px;
            position: relative;
            text-transform: uppercase;
        }

        .skills-container li::before {
            content: '';
            position: absolute;
            top: calc(100% + 5px);
            left: 0;

            width: 100%;
            height: 10px;
            background-color: rgb(86, 86, 153, .5);
            border-radius: 1000px;
        }

        .skills-container li::after {
            content: '';
            position: absolute;
            top: calc(100% + 5px);
            left: 0;

            width: 0;
            height: 10px;
            background-color: rgb(86, 86, 153, 1);
            border-radius: 1000px;

            animation-duration: 3s;
            animation-delay: 2s;
            animation-timing-function: linear;
            animation-fill-mode: forwards;
            animation-iteration-count: infinite;
        }

        .skills-container li.html::after {
            animation-name: html;
        }

        @keyframes html {
            to {
                width: 90%;
            }
        }

        .skills-container li.css::after {
            animation-name: css;
        }

        @keyframes css {
            to {
                width: 80%;
            }
        }

        .skills-container li.bootstrap::after {
            animation-name: bs;
        }

        @keyframes bs {
            to {
                width: 85%;
            }
        }

        .skills-container li.js::after {
            animation-name: js;
        }

        @keyframes js {
            to {
                width: 70%;
            }
        }

        .skills-container li.git::after {
            animation-name: github;
        }

        @keyframes github {
            to {
                width: 75%;
            }
        }

        /* professional-experience ends here  */

        /* Projects Section Styling */
        .projects {
            background: linear-gradient(135deg, #d0f0f2, #7bc0c8);
            padding: 60px 20px;
            font-family: 'Montserrat', sans-serif;
            color: #2c3e50;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            border-radius: 25px;
            max-width: 1200px;
            margin: 20px auto;
        }


        .projects h2 {
            font-size: 2.5rem;
            margin-bottom: 40px;
            color: #333;
        }

        .projects-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
        }

        .project-card {
            background: white;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            max-width: 320px;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
            display: flex;
            flex-direction: column;
        }

        .project-card img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-bottom: 1px solid #ddd;
        }

        .project-info {
            padding: 20px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .project-info h3 {
            margin: 0 0 10px 0;
            color: #0c6168;
        }

        .project-info p {
            flex-grow: 1;
            color: #555;
            font-size: 1rem;
            margin-bottom: 15px;
            text-align: left;
        }

        .btn-link {
            display: inline-block;
            padding: 10px 20px;
            background-color: #0c6168;
            color: white;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 600;
            transition: background-color 0.3s ease;
            text-align: center;
        }

        .btn-link:hover {
            background-color: #07504f;
            color: white;
        }

        .project-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        /* Responsive Design */
        @media (max-width: 991px) {
            .projects-container {
                justify-content: center;
            }

            .project-card {
                max-width: 90%;
            }
        }

        @media (max-width: 600px) {
            .navbar-menu {
                flex-direction: column !important;
                margin-left: 0 !important;
            }

            .navbar-menu a {
                margin: 8px 0 !important;
            }

            .about-me {
                height: auto !important;
            }

            .professional-experience {
                height: auto !important;
            }

            .achievemnet-contact {
                height: auto !important;
            }
        }


        /*contact starts from here  */
        .achievemnet-contact {
            padding: 1% 7%;
            background-color: #39a4ac;
            color: white;
            height: 100vh;
        }

        .contact {
            text-align: center;
        }

        .contact input,
        textarea {
            width: 100%;
            padding: 10px;
            font-size: 1rem;
            text-align: center;
            border: none;
            border-radius: 5px;
            resize: none;
        }

        .contact button {
            border: none;
            border-radius: 12px;
            background-color: #052d2f;
            color: white;
            cursor: pointer;
            padding: 15px;
            margin: 10px;
            width: 100px;
        }

        .contact-links {
            text-align: center;
        }

        .media-buttons .btn {
            border: none;
            border-radius: 25px;
            cursor: pointer;
            font-size: 32px;
            padding: 5px;
            margin: 10px;
            width: 50px;
            background-color: white;
        }

        .btn:hover {
            background-color: gray;
        }

        .achievemnet-contact::after {
            clear: both;
            display: table;
            content: '';
        }

        /* achievement-contact ends here  */
        /* footer starts from here  */

        .footer {
            background-color: black;
            color: white;
            padding: 20px;
            text-align: center;
            font-size: 0.8rem;
        }

        .footer-menu a {
            display: block;
            margin: 15px 0;
            font-size: 1rem;
        }

        .footer-menu a:hover {
            color: gray;
        }

        .footer::after {
            display: table;
            content: '';
            clear: both;
        }

        /* footer ends here  */

        /* For desktop */

        /* For desktop: */
        .col-1 {
            width: 8.33%;
        }

        .col-2 {
            width: 16.66%;
        }

        .col-3 {
            width: 25%;
        }

        .col-4 {
            width: 33.33%;
        }

        .col-5 {
            width: 41.66%;
        }

        .col-6 {
            width: 50%;
        }

        .col-7 {
            width: 58.33%;
        }

        .col-8 {
            width: 66.66%;
        }

        .col-9 {
            width: 75%;
        }

        .col-10 {
            width: 83.33%;
        }

        .col-11 {
            width: 91.66%;
        }

        .col-12 {
            width: 100%;
        }


        /* navbar deign starts here */
        .nav-logo {
            text-align: left;
        }

        .nav-heading h1 {
            text-align: right;
        }

        .navbar-menu {
            flex-direction: row;
            justify-content: right;
            margin-left: 200px;
        }

        .navbar-menu a {
            padding: 5px 10px;
            margin: 20px 0;
            background-color: transparent;
        }

        /* navbar design ends here */

        /* profile design starts here  */
        .profile .top-weather-icon {
            right: 100px;
            width: 120px;
            transition: width 2s, transform 2s;
        }

        .profile .top-weather-icon:hover {
            width: 140px;
        }

        .profile-desc p {
            color: gray;
            margin: 0 auto;
            width: 50%;
            text-align: center;
            margin-bottom: 10px;
        }

        .profile .bottom-weather-icon {
            bottom: 20px;
            left: 90px;
            width: 120px;
            transition: width 2s, transform 2s;
        }

        .profile .bottom-weather-icon:hover {
            width: 140px;
        }

        /* profile design ends here  */

        /* about me design starts here  */


        .aboutme-image {
            margin-top: 100px;
        }

        .aboutme-image img {
            height: 270px;
            width: 250px;
        }

        .aboutme-desc p {
            text-align: left;
        }

        /* about me design ends here  */

        /* professional-experience starts here */
        .professional-experience {
            padding: 1% 5%;
        }

        /* professional-experience ends here */

        /* achievement-contact starts here  */

        .contact button {
            width: 150px;
        }

        .contact-links {
            position: relative;
        }

        .media-buttons {
            position: absolute;
            margin-top: 200px;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
        }

        /* achievement-contact ends here  */

        /* footer starts from here  */
        .footer-menu {
            margin-top: 12px;
        }

        .footer-menu a {
            display: inline;
            margin: 10px;
        }

        /* footer ends here  */

        /* js error message */
        .error-msg {
            color: red;
            font-size: 0.9rem;
            margin-top: 5px;
            display: block;
            min-height: 18px;
        }
    </style>

</head>

<body>

    @yield('main-content')
    <script src="{{ asset('assets/js/script.js') }}"></script>

    <!-- Contact form validation JS -->
    <script>
        document.getElementById('contactForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const name = document.getElementById('name');
            const email = document.getElementById('email');
            const message = document.getElementById('message');

            const nameError = document.getElementById('nameError');
            const emailError = document.getElementById('emailError');
            const messageError = document.getElementById('messageError');
            const successMsg = document.getElementById('successMsg');

            // Error messages clear
            nameError.textContent = '';
            emailError.textContent = '';
            messageError.textContent = '';
            successMsg.style.display = 'none';
            successMsg.textContent = '';

            let valid = true;

            if (name.value.trim() === '') {
                nameError.textContent = 'Please fill the name.';
                valid = false;
            }

            const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (email.value.trim() === '') {
                emailError.textContent = 'Please fill the email.';
                valid = false;
            } else if (!emailPattern.test(email.value.trim())) {
                emailError.textContent = 'Please enter a valid email address.';
                valid = false;
            }

            // Message optional, uncomment if want to make required
            /*
            if (message.value.trim() === '') {
              messageError.textContent = 'Please fill the message.';
              valid = false;
            }
            */

            if (valid) {
                successMsg.textContent = 'Message sent successfully!';
                successMsg.style.display = 'block';

                // 5 সেকেন্ড পর মেসেজ হাইড ও ফর্ম রিসেট
                setTimeout(() => {
                    successMsg.style.display = 'none';
                    this.reset();
                }, 5000);
            }
        });

        // Reset button clicked: clear all errors & success message
        document.getElementById('resetBtn').addEventListener('click', function() {
            document.getElementById('nameError').textContent = '';
            document.getElementById('emailError').textContent = '';
            document.getElementById('messageError').textContent = '';
            const successMsg = document.getElementById('successMsg');
            successMsg.style.display = 'none';
            successMsg.textContent = '';
        });
    </script>
</body>

</html>
