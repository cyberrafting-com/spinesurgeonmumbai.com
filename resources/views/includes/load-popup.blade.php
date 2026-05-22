<!-- ========== Start Custom Modal ========== -->
<!-- <div id="loadPopupModal" class="load-popup-modal">
    <div class="load-popup-content">
        <span class="load-popup-close">&times;</span>
        <img src="{{ asset('resources/assets/img/Spine-surgey-camp-mumbai-on-world-spine-day.webp') }}" alt="Spine-surgey-camp-mumbai-on-world-spine-day" class="load-popup-img">
    </div>
</div> -->
<!-- ========== End Custom Modal ========== -->

<style>
.load-popup-modal {
    display: none;
    position: fixed;
    z-index: 9999;
    left: 0;
    top: 0;
    padding-top:0px;
    width: 100%;
    height: 100%;
    overflow: auto;
    background-color: rgba(0, 0, 0, 0.6);
    justify-content: center;
    align-items: center;
}

.load-popup-content {
    background-color: #fff;
    /* padding: 30px; */
    border-radius: 12px;

    max-width: 100%;
    width: 435px;
    text-align: center;
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
    position: relative;
}

.load-popup-close {
    position: absolute;
    top: 0px;
    left: 15px;
    font-size: 24px;
    color: #000;
    cursor: pointer;
}


.load-popup-img {
    width: 100%;
    height: auto;
    border-radius: 8px;
    max-width: 700px;
}

@media screen and (max-width: 480px) {
    .load-popup-content {
        /* padding: 20px; */
    }
    .load-popup-img {
    width: 100%;
    height: auto;
    /* margin-bottom: 20px; */
    border-radius: 8px;
}
}
</style>

<script>

window.addEventListener('DOMContentLoaded', function () {
    const modal = document.getElementById("loadPopupModal");
    const closeButton = document.querySelector(".load-popup-close");

    // ✅ Show modal only if not shown before in this tab session
    if (!sessionStorage.getItem("loadPopupShown")) {
        modal.style.display = "flex"; // show modal
        sessionStorage.setItem("loadPopupShown", "true"); // <-- removed !important
    }

    // ✅ Close modal on button click
    if (closeButton) {
        closeButton.addEventListener("click", function () {
            modal.style.display = "none";
        });
    }

    // ✅ Optional: close if user clicks outside content
    window.addEventListener("click", function (event) {
        if (event.target === modal) {
            modal.style.display = "none";
        }
    });
});

</script>
