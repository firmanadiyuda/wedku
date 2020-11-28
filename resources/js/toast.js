window.livewire.on('toast', data => {
    Spruce.store('toast').add(data['type'], data['title'], data['message'], data['duration']);
});