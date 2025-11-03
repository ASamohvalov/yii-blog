const btn = document.getElementById('comments-switcher-btn');
btn.addEventListener('click', () => {
    const commentsWidget = document.getElementById('comments-widget');
    commentsWidget.classList.contains('d-none') ? 
        commentsWidget.classList.remove('d-none') : commentsWidget.classList.add('d-none');
});