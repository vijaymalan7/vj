<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <?php include "meta/index-meta.php"; ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        
    <title>Vijay Malan -About</title>
    <link rel="stylesheet" href="style.css">
    <link rel="shortcut icon" href="logo.jpg" type="image/x-icon">

</head>

<body>
    <!-- header -->
    <?php include_once 'include/about-header.php';?>
    
  <!-- main body -->
    <div class="divv">
        <h2 class="font">Hello this is about page,<br> In this page i have mentioned about my Project's</h2>
    </div>
    
    <div class="container my-4">
        <?php
            $featurettes = [
                [
                    'title' => "Hello I'm Vijay Malan. <span class='text-muted'>Born with problem solving skills.</span>",
                    'lead' => "Full Stack Python Developer, Highly Motivated Full Stack and Python AI Developer. Eager to join an organization to build innovative and cutting-edge business solutions.",
                    'link' => 'https://vijaymalan7.github.io/myportfolio/',
                    'image' => 'img/about/vj.jpg',
                    'text'=>'Click to reach-out my Portfolio'
                ],
                [
                    'title' => 'Project- Banking Automation <span class="text-muted">It’ll blow your mind.</span>',
                    'lead' => 'I have used python technology and Sqlite for databases, and have all the functionality to create an account, deposit amount, withdraw and transfer amount.',
                    'link' => 'https://github.com/vijaymalan7/Banking-Automation',
                    'image' => 'img/about/banking.jpg',
                    'text'=>'Banking Automation github link'
                ],
                
                [
                    'title' => 'Work experience with Vertex automation <span class="text-muted">It enhances my skills.</span>',
                    'lead' => '"I had a great time there and gained valuable experience. I believe this will help brighten up my career. I have made a desktop-based app where we can save the data of employees working in the company." Technology used: Python for business solution and Sqlite for database.',
                    'link' => 'https://github.com/vijaymalan7/vertex',
                    'image' => 'img/about/vertex.jpg',
                    'text'=>'Employee Data'
                ],
                [
                    'title' => 'Project- Fitness Website <span class="text-muted">It’ll blow your mind.</span>',
                    'lead' => 'I have used HTML, CSS, and JavaScript for this site, it is all about showcasing the facilities which are provided by the owner of the Gym.',
                    'link' => 'https://vijaymalan7.github.io/Hs_fitness/',
                    'image' => 'img/about/fitness.jpg',
                    'text'=>'HS-fitness'
                ],
                
            ];
           
        ?>

        <div class="container my-4">
        <?php foreach ($featurettes as $index => $featurette) : ?>

            <div class="row featurette d-flex justify-content-center align-items-center">
                <div class="col-md-7 <?php echo ($index % 2 == 0) ? '' : 'order-md-2'; ?>">
                    <h2 class="featurette-heading"><?php echo $featurette['title']; ?></h2>
                    <p class="lead"><?php echo $featurette['lead']; ?></p>
                    <a href="<?php echo $featurette['link']; ?>"><?php echo $featurette['text']; ?></a>
                </div>
                <div class="col-md-5 <?php echo ($index % 2 == 0) ? '' : 'order-md-1'; ?>">
                    <img class="img-fluid" src="<?php echo $featurette['image']; ?>" alt="">
                </div>
            </div>
        <?php endforeach; ?>
        </div>    
    </div>

    <!-- footer -->
    <?php include 'include/footer.php'; ?>
</body>

</html>