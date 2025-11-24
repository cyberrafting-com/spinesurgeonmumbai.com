// Appointment Modal Functionality
document.addEventListener('DOMContentLoaded', function() {
    const modal = document.getElementById('appointmentModal');
    if (!modal) return;
    
    const closeBtn = document.getElementById('closeAppointmentModal');
    const overlay = modal.querySelector('.modal-overlay');
    const form = document.getElementById('appointmentFormModal');
    
    // Get the banner button
    const openModalBtn = document.getElementById('openAppointmentModal');
    
    // Get all "Book Appointment" buttons in main-content
    const mainContent = document.querySelector('.main-content');
    const bookAppointmentButtons = mainContent ? 
        mainContent.querySelectorAll('a[href="#appointmentForm"], a.cta-button.appointment, a.condition-cta[href="#appointmentForm"], a.cta-button.email[href="#appointmentForm"]') :
        document.querySelectorAll('a[href="#appointmentForm"], a.cta-button.appointment, a.condition-cta[href="#appointmentForm"], a.cta-button.email[href="#appointmentForm"]');
    
    function openModal() {
        modal.classList.add('active');
        document.body.style.overflow = 'hidden';
    }

    function closeModal() {
        modal.classList.remove('active');
        document.body.style.overflow = '';
        if (form) {
            form.reset();
            clearErrors();
        }
    }

    function clearErrors() {
        const errorMessages = document.querySelectorAll('#appointmentModal .error-message');
        errorMessages.forEach(error => {
            error.textContent = '';
            error.style.display = 'none';
        });
        if (form) {
            const inputs = form.querySelectorAll('input, select');
            inputs.forEach(input => {
                input.classList.remove('error');
            });
        }
    }

    function showError(inputId, errorId, message) {
        const input = document.getElementById(inputId);
        const error = document.getElementById(errorId);
        if (input && error) {
            input.classList.add('error');
            error.textContent = message;
            error.style.display = 'block';
        }
    }

    function validateForm() {
        let isValid = true;
        clearErrors();

        const patientName = document.getElementById('patientNameModal').value.trim();
        if (!patientName) {
            showError('patientNameModal', 'patientNameError', 'Please enter your name');
            isValid = false;
        } else if (patientName.length < 2) {
            showError('patientNameModal', 'patientNameError', 'Name must be at least 2 characters');
            isValid = false;
        } else if (!/^[a-zA-Z\s]+$/.test(patientName)) {
            showError('patientNameModal', 'patientNameError', 'Name should only contain letters');
            isValid = false;
        }

        const mobileNumber = document.getElementById('mobileNumberModal').value.trim();
        if (!mobileNumber) {
            showError('mobileNumberModal', 'mobileNumberError', 'Please enter your mobile number');
            isValid = false;
        } else if (!/^[0-9]{10}$/.test(mobileNumber)) {
            showError('mobileNumberModal', 'mobileNumberError', 'Please enter a valid 10-digit mobile number');
            isValid = false;
        }

        const selectCity = document.getElementById('selectCityModal').value;
        if (!selectCity) {
            showError('selectCityModal', 'selectCityError', 'Please select a city');
            isValid = false;
        }

        return isValid;
    }

    // Add click event to the banner button
    if (openModalBtn) {
        openModalBtn.addEventListener('click', function(e) {
            e.preventDefault();
            openModal();
        });
    }

    // Add click event to all "Book Appointment" buttons
    bookAppointmentButtons.forEach(button => {
        button.addEventListener('click', function(e) {
            e.preventDefault();
            openModal();
        });
    });

    // Close modal handlers
    if (closeBtn) {
        closeBtn.addEventListener('click', closeModal);
    }

    if (overlay) {
        overlay.addEventListener('click', closeModal);
    }

    // Close modal on Escape key
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && modal.classList.contains('active')) {
            closeModal();
        }
    });

    // Form validation and submission
    if (form) {
        const inputs = form.querySelectorAll('input, select');
        inputs.forEach(input => {
            input.addEventListener('blur', function() {
                if (this.id === 'patientNameModal') {
                    const value = this.value.trim();
                    if (value && value.length < 2) {
                        showError('patientNameModal', 'patientNameError', 'Name must be at least 2 characters');
                    } else if (value && !/^[a-zA-Z\s]+$/.test(value)) {
                        showError('patientNameModal', 'patientNameError', 'Name should only contain letters');
                    } else if (value) {
                        const errorEl = document.getElementById('patientNameError');
                        if (errorEl) {
                            errorEl.style.display = 'none';
                        }
                        this.classList.remove('error');
                    }
                } else if (this.id === 'mobileNumberModal') {
                    const value = this.value.trim();
                    if (value && !/^[0-9]{10}$/.test(value)) {
                        showError('mobileNumberModal', 'mobileNumberError', 'Please enter a valid 10-digit mobile number');
                    } else if (value) {
                        const errorEl = document.getElementById('mobileNumberError');
                        if (errorEl) {
                            errorEl.style.display = 'none';
                        }
                        this.classList.remove('error');
                    }
                } else if (this.id === 'selectCityModal') {
                    if (this.value) {
                        const errorEl = document.getElementById('selectCityError');
                        if (errorEl) {
                            errorEl.style.display = 'none';
                        }
                        this.classList.remove('error');
                    }
                }
            });

            // Clear error on input
            input.addEventListener('input', function() {
                if (this.classList.contains('error')) {
                    const errorId = this.id.replace('Modal', 'Error');
                    const errorElement = document.getElementById(errorId);
                    if (errorElement) {
                        errorElement.style.display = 'none';
                        this.classList.remove('error');
                    }
                }
            });
        });

        // Form submission
        form.addEventListener('submit', function(e) {
            e.preventDefault();
            if (validateForm()) {
                alert('Thank you! Your appointment request has been submitted. We will contact you shortly.');
                closeModal();
                
                // Here you can add AJAX call to submit the form data
                // Example:
                // fetch('/submit-appointment', {
                //     method: 'POST',
                //     headers: { 'Content-Type': 'application/json' },
                //     body: JSON.stringify({
                //         patientName: document.getElementById('patientNameModal').value,
                //         mobileNumber: document.getElementById('mobileNumberModal').value,
                //         city: document.getElementById('selectCityModal').value
                //     })
                // })
            }
        });
    }
});

