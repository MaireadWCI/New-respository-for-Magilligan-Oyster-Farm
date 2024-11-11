document.getElementById('enquiries').addEventListener('submit', function(event) {
    event.preventDefault();  // Prevent the form from submitting in the default way

    // Send email using EmailJS
    emailjs.sendForm('service_4mw3khh', 'leonie', this)
      .then(function() {
        alert('Email sent successfully!');
      }, function(error) {
        alert('Failed to send email: ' + JSON.stringify(error));
      });
  });