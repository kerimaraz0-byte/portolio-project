<?php include "includes/header.php"; ?>

<section>
<h1 style="text-align:center;padding-top:40px;">Contact Me</h1>

<form class="contact-form" id="contactForm">
    <input type="text" name="name" placeholder="Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="text" name="subject" placeholder="Subject" required>
    <textarea name="message" rows="6" placeholder="Message" required></textarea>

    <button class="btn" type="submit">Send Message</button>
</form>

<p id="result" style="text-align:center;"></p>
</section>

<script>
const form = document.getElementById('contactForm');

form.addEventListener('submit', function(e){
    e.preventDefault();

    const formData = new FormData(form);

    fetch('api/save-message.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.text())
    .then(data => {
        document.getElementById('result').innerHTML = data;
        form.reset();
    });
});
</script>

<?php include "includes/footer.php"; ?>