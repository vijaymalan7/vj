<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<footer>
        <div class="row">
            <!-- <div class="col-6 col-md-2 mb-3">
                <h5>Technology</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Python</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">MySql</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">HTML</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">CSSS</a></li>
                    <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">JavaScript</a></li>
                </ul>
            </div> -->

            <div class="col-6 col-md-2 mb-3">
                <h5>Technology</h5>
                <ul class="nav flex-column">
                    <?php
                        $technologies = ['Python', 'MySql', 'HTML', 'CSS', 'JavaScript'];

                        foreach ($technologies as $tech) {
                            echo '<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">' . $tech . '</a></li>';
                        }
                    ?>
                </ul>
            </div>

            <div class="col-6 col-md-2 mb-3">
                <h5>Experience</h5>
                <ul class="nav flex-column">
                    <!-- <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">Vertex Automation</a></li>
                    <li class="nav-item mb-2"><a href="https://www.matrixinfocom.com/" class="nav-link p-0 text-muted">Matrix infocom</a></li> -->
                    <?php
                        $companies =['Vertex Automation','Matrix Infocom','microsoft'];
                        foreach($companies as $company) {
                            echo '<li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-muted">' .  $company . '</a></li>';
                        }
                    ?>
                </ul> 
            </div>

            <!-- <div class="col-6 col-md-2 mb-3">
                <h5>Project's</h5>
                <ul class="nav flex-column">
                    <li class="nav-item mb-2"><a href="https://vijaymalan7.github.io/myportfolio/"
                            class="nav-link p-0 text-muted">Portfolio</a></li>
                    <li class="nav-item mb-2"><a href="https://github.com/vijaymalan7/Banking-Automation"
                            class="nav-link p-0 text-muted">Banking Automation</a></li>
                    <li class="nav-item mb-2"><a href="https://github.com/vijaymalan7/vertex"
                            class="nav-link p-0 text-muted">Employee Detail App</a></li>
                    <li class="nav-item mb-2"><a href="https://vijaymalan7.github.io/Hs_fitness/"
                            class="nav-link p-0 text-muted">Fitness Website</a></li>
                    <li class="nav-item mb-2"><a href="https://github.com/vijaymalan7"
                            class="nav-link p-0 text-muted">GitHub</a>
                    </li>
                </ul>
            </div> -->
            <div class="col-6 col-md-2 mb-3">
                <h5>Projects</h5>
                <ul class="nav flex-column">
                    <?php
                        $projects = [
                        ['name' => 'Portfolio', 'link' => 'https://vijaymalan7.github.io/myportfolio/'],
                        ['name' => 'Banking Automation', 'link' => 'https://github.com/vijaymalan7/Banking-Automation'],
                        ['name' => 'Employee Detail App', 'link' => 'https://github.com/vijaymalan7/vertex'],
                        ['name' => 'Fitness Website', 'link' => 'https://vijaymalan7.github.io/Hs_fitness/'],
                        ['name' => 'GitHub', 'link' => 'https://github.com/vijaymalan7'],
                        ];

                        foreach ($projects as $project) {
                            echo '<li class="nav-item mb-2"><a href="' . $project['link'] . '" class="nav-link p-0 text-muted">' . $project['name'] . '</a></li>';
                        }
                    ?>
                </ul>
            </div>

            <div class="col-md-5 offset-md-1 mb-3">
                <form>
                    <h5>Connect for Clean Website, android and IOS Apk</h5>
                    <p>We provide best business solution with our Software and Websites.</p>
                    <button><a href="tel:+918979871918" style="text-decoration: none;">Click to contact us!</a></button>
                </form>
            </div>
        </div>
        <p class="float-right"><a href="#"><img src="img/logo/top1.png" alt="Back to top"></a></p>
        <p> All 2024 copyrights © reserved | Vijay Malan.</p>
        <p>
            <a href="https://www.instagram.com/_itz_vijay/?igshid=YmMyMTA2M2Y%3D" target="_blank">Instagram</a>
            <a href="https://www.linkedin.com/in/vijay-kumar-286012274/" target="_blank">LinkedIn</a>
            <a href="https://github.com/vijaymalan7" target="_blank">GitHub</a>
        </p>
    </footer>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
        crossorigin="anonymous"></script>
</body>
</html>