
document.addEventListener('DOMContentLoaded', function () {
const images = document.querySelectorAll('.popup-img');

images.forEach(img => {
    img.addEventListener('click', function () {
    const imgUrl = img.getAttribute('data-full');

    Swal.fire({
        imageUrl: imgUrl,
        imageAlt: 'Achievement Image',
        background: '#1e2530',
        showConfirmButton: false,
        backdrop: `
        rgba(0,0,0,0.8)
        `,
        width: '80%',
        padding: '1rem'
    });
    });
});
});

