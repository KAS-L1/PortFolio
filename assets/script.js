document.addEventListener('DOMContentLoaded', function () {
    // Dark/Light Mode Toggle
    const toggleButton = document.getElementById('toggle-theme');
    const body = document.body;
    const icon = toggleButton.querySelector('i');

    toggleButton.addEventListener('click', () => {
        body.classList.toggle('dark-mode');
        body.classList.toggle('light-mode');

        // Toggle icon based on the mode
        icon.classList.toggle('bi-moon-fill', !body.classList.contains('dark-mode'));
        icon.classList.toggle('bi-sun-fill', body.classList.contains('dark-mode'));
    });

    // Typing Animation Text
    const introTextElement = document.getElementById('intro-text');
    const introText = "Hello, I'm Kasl 👋";
    let index = 0;

    function typeWriter() {
        if (index < introText.length) {
            introTextElement.textContent = introText.substring(0, index + 1);
            index++;
            setTimeout(typeWriter, 100);
        } else {
            setTimeout(() => {
                introTextElement.textContent = "";
                index = 0;
                typeWriter();
            }, 2000); // Delay before restarting
        }
    }

    // Start the typing effect
    typeWriter();

    // Contact Form Submission with SweetAlert
    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            const formData = new FormData(this);

            fetch('contact.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.text();
            })
            .then(data => {
                Swal.fire({
                    icon: 'success',
                    title: 'Message Sent',
                    text: 'Thank you for reaching out! I’ll be in touch soon.',
                    confirmButtonColor: '#6c63ff',
                    timer: 3000,
                    showConfirmButton: false
                });
                contactForm.reset();
            })
            .catch(error => {
                let errorMessage = 'There was an error sending your message. Please try again later.';
                if (error.message.includes('Network')) {
                    errorMessage = 'Network error. Please check your internet connection and try again.';
                }
                Swal.fire({
                    icon: 'error',
                    title: 'Oops...',
                    text: errorMessage,
                    confirmButtonColor: '#6c63ff',
                    timer: 3000,
                    showConfirmButton: false
                });
            });
        });
    }
});
