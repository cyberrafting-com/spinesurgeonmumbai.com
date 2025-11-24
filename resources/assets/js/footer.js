// footer.js

function openLocation(evt, locationName) {
    const tabcontents = document.querySelectorAll('#location .tabcontent');
    const tablinks = document.querySelectorAll('#location .tablinks');

    tabcontents.forEach((content) => {
        content.style.display = 'none';
    });

    tablinks.forEach((link) => {
        link.classList.remove('active');
    });

    const targetContent = document.getElementById(locationName);
    if (targetContent) {
        targetContent.style.display = 'block';
    }

    if (evt && evt.currentTarget) {
        evt.currentTarget.classList.add('active');
    }
}
// Activate the default tab on page load
document.addEventListener('DOMContentLoaded', () => {
    const defaultTab = document.querySelector('#location .tablinks.active') || document.querySelector('#location .tablinks');
    if (defaultTab) {
        defaultTab.click();
    }
});
document.addEventListener('DOMContentLoaded', () => {
    const faqButtons = document.querySelectorAll('.faq-question');

    faqButtons.forEach((button) => {
        button.addEventListener('click', () => {
            const isExpanded = button.getAttribute('aria-expanded') === 'true';

            button.setAttribute('aria-expanded', (!isExpanded).toString());
            button.closest('.faq-item').classList.toggle('open', !isExpanded);
        });
    });
});
