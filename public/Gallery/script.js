//Open lightbox when a gallery item is clicked
document.querySelectorAll('.gallery-item').forEach(item =>{
    item.addEventListener('click',() =>{
        const lightbox = document.getElementById('lightbox');
        const lightboxImage = document.getElementById('lightboxImage');
        lightboxImage.src = item.querySelector('img').src;
        lightbox.style.display = 'flex';
    });
});

//Close lightbox when the close button is clicked
document.querySelector('.close').addEventListener('click', () => {
    document.getElementById('lightbox').style.display = 'none';
});

//Close lightbox when the lightbox itself is clicked
window.addEventListener('click', (event) =>{
    const lightbox = document.getElementById('lightbox');
    if (event.target == lightbox){
        lightbox.style.display = 'none';
    }
});
