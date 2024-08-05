document.addEventListener('scroll', function() {
    const header = document.querySelector('header');
    if (window.scrollY > 50) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

document.getElementById('searchButton').addEventListener('click', function() {
    const query = document.getElementById('searchInput').value.toLowerCase();
    switch (query) {
        case 'visit':
            window.location.href = '#visit'; // Replace with actual URL or section ID
            break;
        case 'exhibitions': // Corrected to match the section ID in your HTML
            window.location.href = '#exhibitions';
            break;
        default:
            window.location.href = '#';
    }
});

