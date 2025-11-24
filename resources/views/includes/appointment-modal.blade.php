<!-- Appointment Modal -->
<div id="appointmentModal" class="appointment-modal">
    <div class="modal-overlay"></div>
    <div class="modal-content">
        <button class="modal-close" id="closeAppointmentModal" aria-label="Close modal">
            <i class="fa-solid fa-times"></i>
        </button>
        <div class="form-container">
            <h3>Book FREE Consultation</h3>
            <form id="appointmentFormModal" class="appointment-form">
                <div class="form-group">
                    <input type="text" id="patientNameModal" name="patientName" placeholder="Patient Name" required>
                    <span class="error-message" id="patientNameError"></span>
                </div>
                <div class="form-group">
                    <input type="tel" id="mobileNumberModal" name="mobileNumber" placeholder="Mobile Number" required>
                    <span class="error-message" id="mobileNumberError"></span>
                </div>
                <div class="form-group">
                    <select id="selectCityModal" name="selectCity" required>
                        <option value="">Select City</option>
                        <option value="mumbai">Mumbai</option>
                        <option value="pune">Pune</option>
                        <option value="delhi">Delhi</option>
                        <option value="bangalore">Bangalore</option>
                    </select>
                    <span class="error-message" id="selectCityError"></span>
                </div>
                <button type="submit" class="btn-submit">Book Appointment</button>
            </form>
        </div>
    </div>
</div>

