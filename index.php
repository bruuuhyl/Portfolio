<?php

$name = "BRVH YL";
$portfolioName = "P O L F O R Y O U";
$github = "https://github.com/bruuuhyl";
$email = "bruuuhyl@gmail.com";

$skills = [
    [
        "icon" => "bi-filetype-html",
        "name" => "HTML5",
        "description" => "Semantic web structures."
    ],
    [
        "icon" => "bi-filetype-css",
        "name" => "CSS3",
        "description" => "Responsive layouts and designs."
    ],
    [
        "icon" => "bi-filetype-js",
        "name" => "JavaScript",
        "description" => "Interactive website functionality."
    ],
    [
        "icon" => "bi-bootstrap",
        "name" => "Bootstrap 5",
        "description" => "Responsive components."
    ],
    [
        "icon" => "bi-git",
        "name" => "Git",
        "description" => "Version control."
    ],
    [
        "icon" => "bi-github",
        "name" => "GitHub",
        "description" => "Repository management."
    ]
];

$projects = [
    [
        "icon" => "bi-globe2",
        "name" => "Portfolio Website",
        "description" => "Personal portfolio using HTML, CSS and Bootstrap."
    ],
    [
        "icon" => "bi-window",
        "name" => "Landing Page",
        "description" => "Responsive landing page focused on clean design."
    ],
    [
        "icon" => "bi-check2-square",
        "name" => "To-Do Web App",
        "description" => "JavaScript application for managing tasks."
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?= htmlspecialchars($portfolioName) ?> | Portfolio</title>

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
        rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"
        rel="stylesheet">

    <style>
        html {
            scroll-behavior: smooth;
            scroll-padding-top: 70px;
        }

        body {
            background: #121214;
            color: white;
            font-family: system-ui, sans-serif;
        }

        section {
            min-height: 100vh;
            display: flex;
            align-items: center;
            padding: 90px 0;
        }

        .navbar {
            background: #121214dd !important;
            backdrop-filter: blur(12px);
        }

        .nav-link:hover,
        .cyan {
            color: #0dcaf0 !important;
        }

        .profile {
            width: 240px;
            height: 240px;
            object-fit: cover;
            border: 4px solid #0dcaf0;
            box-shadow: 0 0 35px #0dcaf040;
        }

        .card-x {
            background: #ffffff08;
            border: 1px solid #ffffff26;
            border-radius: 20px;
            transition: 0.25s;
        }

        .card-x:hover {
            transform: translateY(-7px);
            border-color: #0dcaf0;
        }

        .tag {
            background: #121214;
            border: 1px solid #444;
            padding: 8px 12px;
            border-radius: 8px;
        }

        @media (max-width: 768px) {
            section {
                padding: 80px 20px;
            }

            .profile {
                width: 190px;
                height: 190px;
            }
        }
    </style>
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top border-bottom border-secondary">
        <div class="container">

            <a class="navbar-brand fw-bold cyan font-monospace" href="#home">
                &lt;/&gt; <?= htmlspecialchars($portfolioName) ?>
            </a>

            <button
                class="navbar-toggler"
                data-bs-toggle="collapse"
                data-bs-target="#nav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="nav">
                <ul class="navbar-nav ms-auto gap-lg-2">

                    <li class="nav-item">
                        <a class="nav-link" href="#home">Home</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#skills">Skills</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Projects</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>

                    <li class="nav-item">
                        <a
                            href="<?= $github ?>"
                            target="_blank"
                            class="btn btn-sm btn-info">
                            <i class="bi bi-github"></i> GitHub
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </nav>


    <!-- HOME -->
    <section id="home">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-7 text-center text-lg-start">

                    <span class="badge bg-info bg-opacity-10 text-info border border-info mb-3">
                        Wannabe Front-End Developer
                    </span>

                    <h1 class="display-3 fw-bold">
                        <?= htmlspecialchars($name) ?>
                    </h1>

                    <h3 class="text-secondary fw-normal">
                        Bachelor of Science in Information Technology
                    </h3>

                    <p class="text-secondary my-4">
                        I craft unclean, unresponsive, and not-friendly web interfaces
                        using modern web technologies.
                    </p>

                    <a href="#projects" class="btn btn-info me-2">
                        View Projects
                    </a>

                    <a href="#contact" class="btn btn-outline-light">
                        Contact Me
                    </a>

                </div>

                <div class="col-lg-5 text-center">

                    <img
                        src="profile.jpg"
                        class="profile rounded-circle"
                        alt="<?= htmlspecialchars($name) ?>">

                </div>

            </div>

        </div>
    </section>


    <!-- ABOUT -->
    <section id="about">
        <div class="container">

            <div class="row align-items-center g-5">

                <div class="col-lg-6">

                    <small class="cyan fw-bold">
                        ABOUT ME
                    </small>

                    <h2 class="display-4 fw-bold">
                        Who am I?
                    </h2>

                    <p class="text-secondary fs-5">
                        Hi! I'm <?= htmlspecialchars($name) ?>, a wannabe
                        front-end developer who enjoys creating websites
                        and experimenting with different technologies.
                    </p>

                    <p class="text-secondary fs-5">
                        I'm learning to turn ideas and designs into interactive,
                        responsive, and user-friendly websites.
                    </p>

                </div>

                <div class="col-lg-6">

                    <div class="card-x p-5">

                        <i class="bi bi-person-badge cyan fs-1"></i>

                        <h3 class="mt-4">
                            Always Learning
                        </h3>

                        <p class="text-secondary">
                            Every project is an opportunity to learn something new,
                            improve my code, and become a better developer.
                        </p>

                        <span class="tag d-inline-block me-1">
                            Curious
                        </span>

                        <span class="tag d-inline-block me-1">
                            Creative
                        </span>

                        <span class="tag d-inline-block">
                            Problem Solver
                        </span>

                    </div>

                </div>

            </div>

        </div>
    </section>


    <!-- SKILLS -->
    <section id="skills">
        <div class="container">

            <div class="text-center mb-5">

                <small class="cyan fw-bold">
                    MY SKILLS
                </small>

                <h2 class="display-4 fw-bold">
                    Technologies I Use
                </h2>

                <p class="text-secondary">
                    Tools and technologies I'm currently learning.
                </p>

            </div>

            <div class="row g-4">

                <?php foreach ($skills as $skill): ?>

                    <div class="col-md-6 col-lg-4">

                        <div class="card-x p-4 h-100">

                            <i class="bi <?= $skill['icon'] ?> cyan fs-1"></i>

                            <h4>
                                <?= htmlspecialchars($skill['name']) ?>
                            </h4>

                            <p class="text-secondary">
                                <?= htmlspecialchars($skill['description']) ?>
                            </p>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


    <!-- PROJECTS -->
    <section id="projects">
        <div class="container">

            <div class="text-center mb-5">

                <small class="cyan fw-bold">
                    MY PROJECTS
                </small>

                <h2 class="display-4 fw-bold">
                    Things I've Built
                </h2>

                <p class="text-secondary">
                    Some of my projects and experiments.
                </p>

            </div>

            <div class="row g-4">

                <?php foreach ($projects as $project): ?>

                    <div class="col-md-4">

                        <div class="card-x p-4 h-100">

                            <i class="bi <?= $project['icon'] ?> cyan fs-1"></i>

                            <h4>
                                <?= htmlspecialchars($project['name']) ?>
                            </h4>

                            <p class="text-secondary">
                                <?= htmlspecialchars($project['description']) ?>
                            </p>

                            <a
                                href="<?= $github ?>?tab=repositories"
                                target="_blank"
                                class="btn btn-outline-info btn-sm">

                                View Project

                            </a>

                        </div>

                    </div>

                <?php endforeach; ?>

            </div>

        </div>
    </section>


   <!-- CONTACT --> 
    <section id="contact"> 
        <div class="container text-center">
            <small class="cyan fw-bold">
            CONTACT
            </small>

    <h2 class="display-4 fw-bold">
        Let's Build Something Together
    </h2>

    <p class="text-secondary fs-5 my-4">
        Got a question, project idea, or want to collaborate?
    </p>

    <div class="row justify-content-center">
        <div class="col-md-8">

            <form action="send.php" method="POST" class="text-start">

                <div class="mb-3">
                    <label class="form-label">Name</label>
                    <input
                        type="text"
                        name="name"
                        class="form-control bg-dark text-white border-secondary"
                        placeholder="Your name"
                        required>
                </div>

                <div class="mb-3">
                    <label class="form-label">Email</label>
                    <input
                        type="email"
                        name="email"
                        class="form-control bg-dark text-white border-secondary"
                        placeholder="your@email.com"
                        required>
                </div>

                <div class="mb-4">
                    <label class="form-label">Message</label>
                    <textarea
                        name="message"
                        class="form-control bg-dark text-white border-secondary"
                        rows="6"
                        placeholder="Your message..."
                        required></textarea>
                </div>

                <div class="text-center">

                    <button
                        type="submit"
                        class="btn btn-info rounded-pill px-4">

                        <i class="bi bi-envelope"></i>
                        Send Message

                    </button>

                    <a
                        href="<?= htmlspecialchars($github) ?>"
                        target="_blank"
                        class="btn btn-outline-light rounded-pill px-4">

                        <i class="bi bi-github"></i>
                        GitHub

                    </a>

                </div>

            </form>

        </div>
    </div>

</div>

</section>


    <!-- FOOTER -->
    <footer class="text-center py-4 border-top border-secondary">

        <small class="text-secondary">
            &copy; <?= date("Y") ?> <?= htmlspecialchars($portfolioName) ?>
            · Built with Bootstrap 5
        </small>

    </footer>


    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>