<?php include "includes/header.php"; ?>

<section>

<h1 style="text-align:center;padding:40px;">
Projects
</h1>

<div class="projects" id="projectsContainer"></div>

</section>

<script>

fetch('api/get-projects.php')

.then(response => response.json())

.then(data => {

const container = document.getElementById('projectsContainer');

let output = "";

data.forEach(project => {

output += `

<div class="card">

<h2>${project.title}</h2>

<p>${project.description}</p>

<br>

<strong>${project.technologies}</strong>

</div>

`;

});

container.innerHTML = output;

});

</script>

<?php include "includes/footer.php"; ?>