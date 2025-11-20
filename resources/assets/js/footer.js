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

document.addEventListener('DOMContentLoaded', () => {
    const defaultTab = document.querySelector('#location .tablinks.active') || document.querySelector('#location .tablinks');
    if (defaultTab) {
        defaultTab.click();
    }
});