<?php include('data.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Portfolio - Luis Leguizamón</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css?v=1.2">
</head>

<body>
    <!-- Spinner -->
    <section class="spinner-custom container" id="spinnerSection">
        <div class="spinner-border"></div>
    </section>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbarScroll">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item active">
                        <a class="nav-link" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#tech-stack">Tech Stack</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#works">Projects</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Presentation -->
    <div id="home" class="my-5 row">
        <div class="col-md-6 px-5 text-left banner-left">
            <h1 class="fw-bold" style="font-size:3.5rem">Luis Leguizamón</h1>
            <p class="text-secondary">Software Developer with +4 years of experience, specialize in web solutions.</p>
            <div class="mt-3">
                <a href="#contact" class="banner-btn btn">Contact Me</a>
                <a href="#works" class="banner-secondary-btn btn" style="margin-left:15px">Projects</a>
            </div>
        </div>
        <div class="col-md-6 text-center banner-right">
        </div>
    </div>

    <!-- Tech Stack -->
    <div id="tech-stack" class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h3>Main Tech Stack</h3>
            <div class="stack-row text-secondary">
                <?php foreach ($techStack as $key => $stack) { ?>
                    <!-- <span class="bg-primary-subtle px-2 py-1 text-primary-emphasis mx-2 rounded-pill"> -->
                    <div class="stack-icon-box">
                        <?php echo $stack ?>
                        <?php echo $key ?>
                    </div>
                <?php } ?>
            </div>
            <h5 class="mt-5">Tools and other technologies</h5>
            <div class="text-secondary">
                <?php foreach ($tools as $tool) { ?>
                    <?php echo $tool;?> |
                <?php } ?>
            </div>
        </div>
    </div>

    <!-- Works -->
    <div id="works" class="container my-5">
        <div class="p-4 text-center bg-body-tertiary rounded-3">
            <h3>Featured Projects</h3>

            <h5 class="mt-3">Open Source Projects</h5>
            <ul class="list-group">
                <?php foreach ($openSourceProjects as $key => $project) { ?>
                    <li class="list-group-item">
                        <a class="link-underline link-underline-opacity-0" href="<?php echo $project ?>">
                            <?php echo $key ?>
                        </a>
                    </li>
                <?php } ?>
            </ul>
            <h5 class="mt-5">Commercial Projects</h5>
            <ul class="list-group">
                <?php foreach ($comercialProjects as $key => $project) { ?>
                    <li class="list-group-item text-secondary">
                        <?php echo $project ?>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>

    <!-- Contact -->
    <div id="contact" class="container my-5">
        <div class="p-5 text-center bg-body-tertiary rounded-3">
            <h3>Contact Me</h3>
            <a class="text-secondary link-underline link-underline-opacity-0">lleguizamonl@gmail.com</a>
            <div class="mt-3">
                <a class="btn btn-outline-primary btn-contact m-3" href="https://www.linkedin.com/in/luis-leguizamonl/">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-linkedin" viewBox="0 0 16 16">
                        <path d="M0 1.146C0 .513.526 0 1.175 0h13.65C15.474 0 16 .513 16 1.146v13.708c0 .633-.526 1.146-1.175 1.146H1.175C.526 16 0 15.487 0 14.854V1.146zm4.943 12.248V6.169H2.542v7.225h2.401zm-1.2-8.212c.837 0 1.358-.554 1.358-1.248-.015-.709-.52-1.248-1.342-1.248-.822 0-1.359.54-1.359 1.248 0 .694.521 1.248 1.327 1.248h.016zm4.908 8.212V9.359c0-.216.016-.432.08-.586.173-.431.568-.878 1.232-.878.869 0 1.216.662 1.216 1.634v3.865h2.401V9.25c0-2.22-1.184-3.252-2.764-3.252-1.274 0-1.845.7-2.165 1.193v.025h-.016a5.54 5.54 0 0 1 .016-.025V6.169h-2.4c.03.678 0 7.225 0 7.225h2.4z" />
                    </svg>
                    Linkedin
                </a>
                <a class="btn btn-outline-dark btn-contact m-3" href="https://github.com/luisleguizamon">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
                        <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"></path>
                    </svg>
                    Github
                </a>
            </div>
            <p class="text-secondary">Developed by <span class="text-dark">Luis Leguizamón</span></p>
        </div>
    </div>

    <script src="/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="script/script.js"></script>
</body>

</html>