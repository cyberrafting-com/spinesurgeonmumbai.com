document.addEventListener("DOMContentLoaded", () => {
    const modalElement = document.getElementById("appointmentModal");
    const triggerButtons = document.querySelectorAll('[data-bs-target="#appointmentModal"], .open-appointment-modal');

    if (!modalElement || triggerButtons.length === 0) {
        return;
    }

    const bootstrapModal = typeof bootstrap !== "undefined" && bootstrap.Modal
        ? new bootstrap.Modal(modalElement)
        : null;
    const body = document.body;
    const useCustomBackdrop = !bootstrapModal;
    let backdrop;

    const removeBootstrapBackdrop = () => {
        document.querySelectorAll(".modal-backdrop").forEach((node) => node.remove());
    };

    const resetBodyScroll = () => {
        body.classList.remove("modal-open");
        body.style.overflow = "";
    };

    const ensureBackdrop = () => {
        if (!useCustomBackdrop || backdrop) {
            return;
        }

        backdrop = document.createElement("div");
        backdrop.classList.add("modal-backdrop", "fade", "show");
        document.body.appendChild(backdrop);
        backdrop.addEventListener("click", closeModal);
    };

    const destroyBackdrop = () => {
        if (useCustomBackdrop && backdrop) {
            backdrop.removeEventListener("click", closeModal);
            backdrop.remove();
            backdrop = null;
        }
    };

    const openModal = (event) => {
        if (event) {
            event.preventDefault();
        }

        if (bootstrapModal) {
            bootstrapModal.show();
        } else {
            modalElement.style.display = "flex";
            modalElement.classList.add("show");
            modalElement.removeAttribute("aria-hidden");
        }

        ensureBackdrop();
        body.style.overflow = "hidden";
    };

    const closeModal = () => {
        if (bootstrapModal) {
            bootstrapModal.hide();
        } else {
            modalElement.style.display = "none";
            modalElement.classList.remove("show");
            modalElement.setAttribute("aria-hidden", "true");
        }

        destroyBackdrop();
        removeBootstrapBackdrop();
        resetBodyScroll();
    };

    triggerButtons.forEach((btn) => {
        btn.addEventListener("click", openModal);
    });

    const closeButton = modalElement.querySelector(".modal-close");
    if (closeButton) {
        closeButton.addEventListener("click", closeModal);
    }

    document.addEventListener("keydown", (event) => {
        if (event.key === "Escape" && modalElement.classList.contains("show")) {
            closeModal();
        }
    });

    if (bootstrapModal) {
        modalElement.addEventListener("hidden.bs.modal", () => {
            destroyBackdrop();
            removeBootstrapBackdrop();
            resetBodyScroll();
        });
    }

    const form = document.getElementById("appointmentFormModal");
    if (!form) {
        return;
    }

    const patientNameInput = document.getElementById("patientNameModal");
    const mobileInput = document.getElementById("mobileNumberModal");
    const citySelect = document.getElementById("selectCityModal");

    const errors = {
        name: document.getElementById("patientNameError"),
        mobile: document.getElementById("mobileNumberError"),
        city: document.getElementById("selectCityError"),
    };

    const clearError = (field) => {
        if (errors[field]) {
            errors[field].textContent = "";
            errors[field].style.display = "none";
        }
    };

    const showError = (field, message) => {
        if (errors[field]) {
            errors[field].textContent = message;
            errors[field].style.display = "block";
        }
    };

    const validateName = () => {
        const value = patientNameInput.value.trim();
        if (!value) {
            showError("name", "Please enter your name");
            return false;
        }
        if (value.length < 2) {
            showError("name", "Name must be at least 2 characters");
            return false;
        }
        if (!/^[A-Za-z\s]+$/.test(value)) {
            showError("name", "Name should only include letters");
            return false;
        }
        clearError("name");
        return true;
    };

    const validateMobile = () => {
        const value = mobileInput.value.trim();
        if (!value) {
            showError("mobile", "Please enter your mobile number");
            return false;
        }
        if (!/^[0-9]{10}$/.test(value)) {
            showError("mobile", "Enter a valid 10-digit Indian number");
            return false;
        }
        clearError("mobile");
        return true;
    };

    const validateCity = () => {
        if (!citySelect.value) {
            showError("city", "Please select a city");
            return false;
        }
        clearError("city");
        return true;
    };

    patientNameInput.addEventListener("blur", validateName);
    mobileInput.addEventListener("blur", validateMobile);
    citySelect.addEventListener("change", validateCity);

    mobileInput.addEventListener("input", () => {
        mobileInput.value = mobileInput.value.replace(/\D/g, "").slice(0, 10);
    });

    form.addEventListener("submit", (event) => {
        event.preventDefault();

        const isValidName = validateName();
        const isValidMobile = validateMobile();
        const isValidCity = validateCity();

        if (isValidName && isValidMobile && isValidCity) {
            alert("Submitted successfully!");
            form.reset();
            clearError("name");
            clearError("mobile");
            clearError("city");
            closeModal();
        }
    });
});
