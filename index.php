<?php include "includes/header.php"; ?>

<section class="hero">

    <div class="hero-text">
        <span>Hello, I'm</span>

        <h1>Kerim Yiğit<br>Efe Araz</h1>

        <h3>Software Engineering Student | Full-Stack Developer</h3>

        <p>
            I build responsive, dynamic and modern web applications using
            HTML, CSS, JavaScript, PHP and MySQL.
        </p>

        <div class="hero-buttons">
            <a href="projects.php" class="btn">View My Projects</a>
            <a href="contact.php" class="btn outline">Contact Me</a>
        </div>
    </div>

    <div class="hero-image">
        <img src="assets/images/profile.jpg" alt="Profile Photo">
    </div>

</section>

<section class="home-projects">
    <h2>Projects</h2>

    <div class="projects">
        <div class="card">
            <h3>Portfolio Website</h3>
            <p>Responsive portfolio project built with HTML, CSS, JS, PHP and MySQL.</p>
            <strong>HTML CSS JS PHP MySQL</strong>
        </div>

        <div class="card">
            <h3>Admin Dashboard</h3>
            <p>Admin management system with authentication and database integration.</p>
            <strong>PHP Sessions Cookies MySQL</strong>
        </div>

        <div class="card">
            <h3>AJAX Contact System</h3>
            <p>Dynamic contact system using AJAX and PHP to store messages.</p>
            <strong>Fetch API PHP MySQL</strong>
        </div>
    </div>
</section>

<?php include "includes/footer.php"; ?>