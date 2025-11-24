<!-- Appointment Modal -->
<div class="modal fade appointment-modal" id="appointmentModal" tabindex="-1" aria-labelledby="appointmentModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content appointment-modal-custom">
            <div class="appointment-modal-header-custom">
                <h5 class="modal-title" id="appointmentModalLabel">Book Consultation</h5>
                <button type="button" class="btn-close btn-close-white modal-close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
            <div class="appointment-modal-body-custom">
                <form id="appointmentFormModal" class="appointment-form" novalidate>
                    <div class="form-group">
                        <input type="text" id="patientNameModal" name="patientName" placeholder="Patient Name" required>
                        <span class="error-message" id="patientNameError"></span>
                    </div>
                    <div class="form-group">
                        <input type="tel" id="mobileNumberModal" name="mobileNumber" placeholder="Mobile Number"
                            class="mobile-input" required pattern="[0-9]{10}" inputmode="numeric" maxlength="10"
                            title="Please enter a 10-digit Indian mobile number">
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
                    <button type="submit" class="btn-submit">Book Consultation</button>
                </form>
            </div>
        </div>
    </div>
</div>

