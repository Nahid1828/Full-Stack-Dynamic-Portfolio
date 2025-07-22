@extends('index')
@push('style')
    <title>Portfolio - Home</title>
@endpush

@section('main-content')
    <!-- navbar starts from here  -->
    <div class="navbar">
        <div class="nav-logo col-2">
            <img src="assets/images/logo.png" width="100px" alt="logo">
        </div>
        <div class="nav-heading col-4">
            <h1>Nahid Islam</h1>
        </div>
        <div class="navbar-menu col-4">
            <a href="#">Home</a>
            <a href="#about-me-id">About Me</a>
            <a href="#skill-id">Skill</a>
            <a href="#project-id">Projects</a>
            <a href="#contact-id">Contact Me</a>
        </div>
    </div>

    <!-- navbar ends here  -->

    <!-- profile starts from here  -->
    <div class="profile">

        <div class="profile-desc">
            <h1> I am a Web Developer</h1>
            <p>Hi! My name is Nahid Islam. Welcome to my personal page that I’ve designed to showcase my skills and
                expertise that I’ve accumulated over the year. </p>
        </div>

    </div>
    <!-- profile ends here  -->

    <!-- about me starts here  -->
    <div class="about-me" id="about-me-id">
        <h2>ABOUT ME</h2>
        <div class="aboutme-image col-6">
            <img src="assets/images/Nahid.jpg" width="100%" alt="">
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

        </div>
    </div>
    <!-- about me ends here  -->

    <!-- professional experience start here  -->

    <div class="professional-experience">

        <div class="education col-6">

            <div class="card">
                <div class="card-title">
                    <h2>EDUCATION</h2>
                </div>

                <div class="card-desc">
                    <ol>
                        <li>
                            <strong>B.Sc. in Computer Science & Engineering</strong> <br>
                            2022-2025</br>
                            Lorem ipsum dolor sit amet. <br>
                            Lorem ipsum dolor sit amet. <br>
                            Result: A- (3.50/4.00) <br>
                        </li>
                        <hr>
                        <li>
                            <strong>Higher Secondary Certificate</strong> <br>
                            2019-2020 <br>
                            Gurudayal Govt. College <br>
                            Lorem ipsum dolor sit amet.<br>
                            Result: A (4.17/5.00) <br>
                        </li>
                        <hr>
                        <li>
                            <strong>Secondary School Certificate</strong> <br>
                            2017-2018 <br>
                            Lorem ipsum dolor sit amet. <br>
                            Lorem ipsum dolor sit amet.<br>
                            Result: A (4.82/5.00) <br>
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <div class="skills col-6" id="skill-id">
            <div class="card">
                <div class="card-title">
                    <h2>SKILLS</h2>
                </div>

                <div class="card-desc">
                    <div class="skills-container">
                        <ul>
                            <li class="html">HTML</li>
                            <li class="css">CSS</li>
                            <li class="bootstrap">Bootstrap</li>
                            <li class="js">JavaSCript</li>
                            <li class="git">GitHub</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- professional experience end here  -->

    <!-- Projects Section Starts -->
    <div class="projects" id="project-id">
        <h2>PROJECTS</h2>
        <div class="projects-container">
            <!-- Project Card 1 -->
            <div class="project-card">
                <img src="assets/images/project1.avif" alt="Blood Bank Management Project">
                <div class="project-info">
                    <h3>Blood Bank Management System</h3>
                    <p>Web application built with PHP and MySQL to manage blood donors, recipients, inventory, and requests.
                    </p>
                    <a href="#" target="_blank" class="btn-link">View Project</a>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="project-card">
                <img src="assets/images/project2.avif" alt="Online Course Management System">
                <div class="project-info">
                    <h3>Online Course Management System</h3>
                    <p>A platform for managing courses, students, enrollments, and progress tracking built with Laravel and
                        MySQL.</p>
                    <a href="#" target="_blank" class="btn-link">View Project</a>
                </div>
            </div>


            <!-- Project Card 3 -->
            <div class="project-card">
                <img src="assets/images/project3.avif" alt="E-commerce Website">
                <div class="project-info">
                    <h3>E-commerce Website</h3>
                    <p>Developed a fully functional e-commerce site using Laravel and Bootstrap.</p>
                    <a href="#" target="_blank" class="btn-link">View Project</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Projects Section Ends -->

    <!-- Contact starts from here  -->

    <div class="achievemnet-contact">
        <div class="contact col-6" id="contact-id">
            <h2>CONTACT ME</h2>

            <form action="mailto:n.i.nahid02@gmail.com" method="post" enctype="text/plain" id="contactForm" novalidate>
                <p>
                    <input type="text" placeholder="Your Name" name="name" id="name" />
                    <span class="error-msg" id="nameError"></span>
                </p>
                <p>
                    <input type="email" placeholder="Your Email" name="email" id="email" />
                    <span class="error-msg" id="emailError"></span>
                </p>
                <p>
                    <textarea name="message" placeholder="Your Message Here" id="message" cols="30" rows="10"></textarea>
                    <span class="error-msg" id="messageError"></span>
                </p>
                <button type="submit">SEND</button>
                <button type="reset" id="resetBtn">RESET</button>

                <p id="successMsg" style="color: green; font-weight: bold; margin-top: 10px; display: none;"></p>
            </form>


        </div>

        <div class="contact-links col-6">
            <h2>More ways to Contact</h2>
            <div class="media-buttons">
                <button class="btn" onclick="window.open('https://www.youtube.com/@nahidislam7386')"
                    class="request-callback"><i class="fa fa-youtube-play" style="color: #c4302b;"
                        aria-hidden="true"></i></button>
                <button class="btn" onclick="window.open('https://www.facebook.com/n.i.nahid28')"
                    class="btn request-callback"><i class="fa fa-facebook" style="color:  #3b5998;"
                        aria-hidden="true"></i></button>
                <button class="btn" onclick="window.open('https://github.com/Nahid1828')"
                    class="btn request-callback"><i class="fa fa-github" aria-hidden="true"
                        style="color: #000000;"></i></button>
            </div>
        </div>
    </div>

    <!-- Contact ends from here  -->
    <!-- footer starts from here  -->

    <div class="footer">
        <div class="footer-menu col-6">
            <a href="#">Home</a>
            <a href="#about-me-id">About Me</a>
            <a href="#skill-id">Skill</a>
            <a href="#contact-id">Contact Me</a>
        </div>

        <div class="footer-desc col-6">
            &copy; Nahid 2025. Developed with <span style="color: red; font-size: 1.5rem;">❤</span> by Nahid.
        </div>
    </div>
    <!-- footer ends here  -->
@endsection
