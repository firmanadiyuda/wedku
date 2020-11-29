window.addEventListener('toast', event => {
    Spruce.store('toast').add(event.detail['type'], event.detail['title'], event.detail['message'], event.detail['duration']);
})