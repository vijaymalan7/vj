<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include_once 'meta/index-meta.php'; ?>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">


    <title>Vijay Malan -Contact</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">

</head>

<body>
    <!-- header -->
    <?php include_once 'include/contact-header.php';?>
    
    <!-- main body -->
    <div class="container my-4">
        <h1>Let's <span>Connect!</span></h1>
        <p class="lead">Thank you for visiting my portfolio! Whether you have a project in mind, want to collaborate, or
            just have a
            question, I'd love to hear from you. Feel free to reach out using the contact information below.
        </p>
        <h4>Get In touch</h4>
        <p class="lead">Have a specific inquiry or project proposal? Fill out the form below, and I'll get back to you
            as soon as
            possible.</p>
    </div>

    <div class="container my-4">
        <h1>Contact <span>Us</span></h1>

        <div class="container">
            <!-- <form action="https://api.web3forms.com/submit" method="POST"> -->
            <form action="mail.php" method="POST">
                <div class="form-group">
                    <!-- <input type="hidden" name="access_key" value="fe31b3b4-954c-49a1-884f-8e78bbe84645"> -->
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>

                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>

                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>
                </div>

                <div class="form-group">
                    <button type="submit" name='send' >Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </form>
        </div>
<!-- ===================== Include mail.php ============================= -->
       <?php //include_once "mail.php"?>

        <br>
        <section id="contact" class="foursection">
            <div class="container my-4">
                <h1>Social <span>Media</span></h1>
                <p class="lead">
                    Connect with me on social media for the latest updates, projects, and insights:
                </p>
                <div class="social">
                    <ul>
                        <li><a href="https://www.instagram.com/_itz_vijay/?igshid=YmMyMTA2M2Y%3D">Instagram</a></li>
                        <li><a href="https://github.com/vijaymalan7" target="_blank">GitHub</a></li>
                        <li><a href="https://www.linkedin.com/in/vijay-kumar-286012274/" target="_blank">LinkedIn</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="card-wappers">
                <div class="card">
                    <i class="icon"></i>
                    <!-- <img src="call_icon.jpg" alt="call icon" height="50px"> -->
                    <!-- <h2>Call Us On</h2>
                    <h3>+918979XXXXXX</h3> -->
                    <!-- <a herf="tel:8979871918"target="_blank"style="cursor: pointer;">+918979871918</a> -->
                    <a href="tel:+918979871918"
                        onclick="ga('send', 'event', { eventCategory: 'Contact', eventAction: 'Call', eventLabel: 'Mobile Button'});">
                        <p class="call-button"><img src="img/logo/call_icon.jpg" alt="call icon" height="50px"></p>
                    </a>
                </div>

                <div class="card">
                    <i class="icon"></i>
                    <a href="mailto:vijaymalan12@gmail.com" target="_blank"><img src="img/logo/Gmail-logo.png" alt="gmail logo"
                            height="50px"></a>
                    <!-- <h2>E-mail us at</h2> -->
                    <!-- <a href="mailto:vijaymalan12@gmail.com " target="_blank">vijaymalan12@gmail.com </a> -->
                    <i class="fas fa-mobile-alt icon"></i>
                </div>

                <div class="card">
                    <i class="icon"></i>
                    <a href="https://www.instagram.com/_itz_vijay/?igshid=YmMyMTA2M2Y%3D" target="_blank"><img
                            src="img/logo/instaLOgo.avif" alt="insta logo" height="50px">
                    </a>


                </div>

            </div>
        </section>


    </div>
    <div class="whats"><span>
            <a class="ww-icon-link" target="_blank" href="https://wa.me/+918979871918/?text=Hello!">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
                    <path
                        d=" M19.11 17.205c-.372 0-1.088 1.39-1.518 1.39a.63.63 0 0 1-.315-.1c-.802-.402-1.504-.817-2.163-1.447-.545-.516-1.146-1.29-1.46-1.963a.426.426 0 0 1-.073-.215c0-.33.99-.945.99-1.49 0-.143-.73-2.09-.832-2.335-.143-.372-.214-.487-.6-.487-.187 0-.36-.043-.53-.043-.302 0-.53.115-.746.315-.688.645-1.032 1.318-1.06 2.264v.114c-.015.99.472 1.977 1.017 2.78 1.23 1.82 2.506 3.41 4.554 4.34.616.287 2.035.888 2.722.888.817 0 2.15-.515 2.478-1.318.13-.33.244-.73.244-1.088 0-.058 0-.144-.03-.215-.1-.172-2.434-1.39-2.678-1.39zm-2.908 7.593c-1.747 0-3.48-.53-4.942-1.49L7.793 24.41l1.132-3.337a8.955 8.955 0 0 1-1.72-5.272c0-4.955 4.04-8.995 8.997-8.995S25.2 10.845 25.2 15.8c0 4.958-4.04 8.998-8.998 8.998zm0-19.798c-5.96 0-10.8 4.842-10.8 10.8 0 1.964.53 3.898 1.546 5.574L5 27.176l5.974-1.92a10.807 10.807 0 0 0 16.03-9.455c0-5.958-4.842-10.8-10.802-10.8z"
                        fill-rule="evenodd">
                    </path>
                </svg>
            </a>
        </span>
    </div>

    <!-- footer -->
    <?php include 'include/footer.php'; ?>
</body>

</html>