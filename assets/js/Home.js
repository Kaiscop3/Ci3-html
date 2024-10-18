document.querySelectorAll('.play-button').forEach(button => {
    button.addEventListener('click', function () {
        const videoUrl = this.closest('.card').getAttribute('data-video-url');
        const modal = document.getElementById('videoModal');
        const videoSource = document.getElementById('videoSource');

        videoSource.src = videoUrl;
        const modalVideo = document.getElementById('modalVideo');
        modalVideo.load();

        modal.style.display = 'flex';
    });
});

document.getElementById('videoModal').addEventListener('click', function(event) {
    const modalContent = document.querySelector('.modal-content');
    if (event.target === this) {
        this.style.display = 'none';
        const modalVideo = document.getElementById('modalVideo');
        modalVideo.pause();
        modalVideo.currentTime = 0;
    }
});
