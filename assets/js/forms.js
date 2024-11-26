function handleLoginClick(event) {
    event.preventDefault();

    const email = document.getElementById('email').value;
    const password = document.getElementById('pasword').value;

    fetch('/libary/php/login.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `email=${encodeURIComponent(email)}&pasword=${encodeURIComponent(password)}`
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.querySelector('.error-message');
            if (data.status === 'error') {
                messageBox.style.display = 'block';
                messageBox.textContent = data.message;
            } else if (data.status === 'success') {
                messageBox.style.display = 'none';
                window.location.href = '/libary/index.php';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            const messageBox = document.querySelector('.error-message');
            messageBox.style.display = 'block';
            messageBox.textContent = 'An unexpected error occurred. Please try again.';
        });
}

function handleRegistrationSubmit(event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const firstname = document.getElementById('firstname').value;
    const lastname = document.getElementById('lastname').value;
    const email = document.getElementById('new_email').value;
    const confirmEmail = document.getElementById('new_email_confirm').value;
    const password = document.getElementById('pass').value;

    fetch('/libary/php/register.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `username=${encodeURIComponent(username)}&firstname=${encodeURIComponent(firstname)}&lastname=${encodeURIComponent(lastname)}&new_email=${encodeURIComponent(email)}&new_email_confirm=${encodeURIComponent(confirmEmail)}&password=${encodeURIComponent(password)}`
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.querySelector('#pills-profile .error-message');
            if (data.status === 'error') {
                messageBox.style.display = 'block';
                messageBox.textContent = data.message;
            } else if (data.status === 'success') {
                messageBox.style.display = 'none';
                window.location.href = '/libary/index.php';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            const messageBox = document.querySelector('#pills-profile .error-message');
            messageBox.style.display = 'block';
            messageBox.textContent = 'An unexpected error occurred. Please try again.';
        });
}


function handleContactFormSubmit(event) {
    event.preventDefault();

    const firstName = document.getElementById('name3').value;
    const lastName = document.getElementById('name2').value;
    const email = document.getElementById('email3').value;
    const phoneNumber = document.getElementById('num').value;
    const sexe = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    const formData = `name1=${encodeURIComponent(firstName)}&name2=${encodeURIComponent(lastName)}&email3=${encodeURIComponent(email)}&num=${encodeURIComponent(phoneNumber)}&subject=${encodeURIComponent(sexe)}&message=${encodeURIComponent(message)}`;

    fetch('/libary/php/contact.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            const errorMessageBox = document.querySelector('.error-message');

            if (data.status === 'error') {
                errorMessageBox.style.display = 'block';
                errorMessageBox.style.color = 'red';
                errorMessageBox.textContent = data.message;
            } else if (data.status === 'success') {
                errorMessageBox.style.display = 'block';
                errorMessageBox.style.color = 'green';
                errorMessageBox.textContent = 'Your message has been successfully sent. Thank you!';
            }
        })
        .catch(error => {
            console.error('Error:', error);
            const errorMessageBox = document.querySelector('.error-message');
            errorMessageBox.style.display = 'block';
            errorMessageBox.style.color = 'red';
            errorMessageBox.textContent = 'An unexpected error occurred. Please try again.';
        });
}

function handleContactRes(event) {
    console.log(e);
    event.preventDefault();

    const firstName = document.getElementById('name2').value;
    const lastName = document.getElementById('name3').value;
    const email = document.getElementById('email1').value;
    const confirmEmail = document.getElementById('email2').value;
    const date1 = document.getElementById('d1').value;
    const date2 = document.getElementById('d2').value;
    const sexe = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    const urlParams = new URLSearchParams();
    const bookId = urlParams.get('book_id');
    console.log(bookId);


    if (!firstName || !lastName || !email || !confirmEmail || !date1 || !date2 || !sexe) {
        showMessage('All fields except the message are required.', 'red');
        return;
    }

    if (email !== confirmEmail) {
        showMessage('Email and Confirm Email must match.', 'red');
        return;
    }

    if (!validateEmail(email)) {
        showMessage('Invalid email format.', 'red');
        return;
    }

    const dateObj1 = new Date(date1);
    const dateObj2 = new Date(date2);

    if (dateObj2 <= dateObj1) {
        showMessage('Date 2 must be later than Date 1.', 'red');
        return;
    }

    const formData = new FormData();
    formData.append('first_name', firstName);
    formData.append('last_name', lastName);
    formData.append('email', email);
    formData.append('email1', confirmEmail);
    formData.append('date1', date1);
    formData.append('date2', date2);
    formData.append('sex', sexe);
    formData.append('message', message);
    formData.append('book_id', bookId);

    fetch('/libary/php/contact_res.php', {
        method: 'POST',
        body: formData
    })
        .then(response => response.json())
        .then(data => {
            const errorMessageBox = document.querySelector('.error-message');

            if (data.status === 'error') {
                showMessage(data.message, 'red');
            } else if (data.status === 'success') {
                showMessage(data.message, 'green');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showMessage('An unexpected error occurred. Please try again.', 'red');
        });
}


function handleDonationClick(event) {
    event.preventDefault();

    const name = document.getElementById('name3').value;
    const email = document.getElementById('email').value;
    const amount = document.getElementById('subject').value;
    const message = document.getElementById('message').value;

    fetch('/libary/php/donation.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: `name=${encodeURIComponent(name)}&email=${encodeURIComponent(email)}&subject=${encodeURIComponent(amount)}&message=${encodeURIComponent(message)}`
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.querySelector('.error-message');
            const successMessageBox = document.createElement('div');

            if (data.status === 'error') {
                messageBox.style.display = 'block';
                messageBox.textContent = data.message;
                messageBox.style.color = 'red';
            } else if (data.status === 'success') {
                messageBox.style.display = 'none';

                successMessageBox.textContent = 'Donation was successful!';
                successMessageBox.style.color = 'green';
                successMessageBox.style.display = 'block';

                document.querySelector('.contact-form').appendChild(successMessageBox);
            }
        })
        .catch(error => {
            console.error('Error:', error);
            const messageBox = document.querySelector('.error-message');
            messageBox.style.display = 'block';
            messageBox.textContent = 'An unexpected error occurred. Please try again.';
            messageBox.style.color = 'red';
        });
}


function showMessage(message, color) {
    const messageBox = document.querySelector('.error-message');
    messageBox.style.display = 'block';
    messageBox.style.color = color;
    messageBox.textContent = message;
}

function validateEmail(email) {
    const re = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;
    return re.test(email);
}


function handleBillingFormSubmit(event) {
    event.preventDefault();

    const region = document.getElementById('region').value;
    const firstName = document.getElementById('billingFirstName').value;
    const lastName = document.getElementById('billingLastName').value;
    const cin = document.getElementById('cin').value;
    const streetAddress = document.getElementById('streetAddress').value;
    const cardNumber = document.getElementById('cardNumber').value;
    const city = document.getElementById('city').value;
    const country = document.getElementById('country').value;
    const postcode = document.getElementById('postcode').value;
    const phoneNumber = document.getElementById('billingPhone').value;

    if (!/^\d+$/.test(phoneNumber)) {
        showError('Phone number must be numeric.');
        return;
    }

    if (!/^\d+$/.test(cardNumber)) {
        showError('Credit card number must be numeric.');
        return;
    }

    if (!/^\d+$/.test(cin)) {
        showError('CIN must be numeric.');
        return;
    }

    const bookId = new URLSearchParams(window.location.search).get('book_id');
    if (!bookId) {
        showError('Book ID is missing in the URL.');
        return;
    }

    const data = new URLSearchParams();
    data.append('region', region);
    data.append('first_name', firstName);
    data.append('last_name', lastName);
    data.append('cin', cin);
    data.append('street_address', streetAddress);
    data.append('cc', cardNumber);
    data.append('city', city);
    data.append('country', country);
    data.append('zip', postcode);
    data.append('num', phoneNumber);
    data.append('book_id', bookId);

    fetch('php/billing.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: data.toString()
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.querySelector('.error-message');
            if (data.status === 'error') {
                showError(data.message);
            } else if (data.status === 'success') {
                showSuccess('Bought successfully!');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            showError('An unexpected error occurred. Please try again.');
        });
}

function showError(message) {
    const messageBox = document.querySelector('.error-message');
    messageBox.style.display = 'block';
    messageBox.textContent = message;
    messageBox.style.color = 'red';
}

function showSuccess(message) {
    const messageBox = document.querySelector('.error-message');
    messageBox.style.display = 'block';
    messageBox.textContent = message;
    messageBox.style.color = 'green';
}
function handleReturnBooking(bookingId, button) {
    const formData = new URLSearchParams();
    formData.append('booking_id', bookingId);

    fetch('php/return_booking.php', {
        method: 'POST',
        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
        body: formData.toString(),
    })
        .then(response => response.json())
        .then(data => {
            const messageBox = document.querySelector('.error-message');
            if (data.status === 'success') {
                const row = button.closest('tr');
                row.remove();
                messageBox.style.display = 'block';
                messageBox.style.color = 'green';
                messageBox.textContent = 'Booking successfully returned.';
            } else {
                messageBox.style.display = 'block';
                messageBox.style.color = 'red';
                messageBox.textContent = 'Error: ' + data.message;
            }

            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 5000);
        })
        .catch(error => {
            console.error('Error:', error);
            const messageBox = document.querySelector('.error-message');
            messageBox.style.display = 'block';
            messageBox.style.color = 'red';
            messageBox.textContent = 'An unexpected error occurred.';
            // Hide message after 5 seconds
            setTimeout(() => {
                messageBox.style.display = 'none';
            }, 5000);
        });
}
