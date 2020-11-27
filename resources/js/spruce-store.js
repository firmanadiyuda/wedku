/* -------------------------------------------------------------------------- */
/*                                    TOAST                                   */
/* -------------------------------------------------------------------------- */

Spruce.store('toast', {
    id: 0,
    toasts: {},
    add(type, title, message, duration) {
        switch (type) {
            case 'success':
                type = 'border-green-500';
                icon = 'ri-checkbox-circle-line text-green-500'
                break;
            case 'error':
                type = 'border-red-600';
                icon = 'ri-spam-line text-red-600'
                break;
            case 'info':
                type = 'border-primary-600';
                icon = 'ri-information-line text-primary-600'
                break;
            case 'warning':
                type = 'border-yellow-300';
                icon = 'ri-alert-line text-yellow-300'
                break;
            default:
                type = 'border-primary-600';
                icon = 'ri-radio-button-line" text-primary-00'
                break;
        }

        this.toasts[this.id] = {
            id: this.id,
            type: type,
            title: title,
            message: message,
            icon: icon,
            show: true
        };

        var current_id = this.id;

        setTimeout(function () {
            Spruce.store('toast').toasts[current_id]['show'] = false;
        }, duration);

        this.id++;
    },

    close(id) {
        Spruce.store('toast').toasts[id]['show'] = false;
        this.remove(id);
    },

    remove(id) {
        setTimeout(function () {
            delete this.toasts[id]
        }, 2000);
    }
})



/* -------------------------------------------------------------------------- */
/*                                    THEME                                   */
/* -------------------------------------------------------------------------- */

Spruce.store('theme', {
    isDarkMode: true,
    change() {
        if (this.isDarkMode == false) {
            this.isDarkMode = true
            // document.documentElement.classList.add('mode-dark');
            // document.getElementById("iconDarkMode").classList.remove('ri-sun-line');
            // document.getElementById("iconDarkMode").classList.add('ri-moon-fill');
        } else {
            this.isDarkMode = false
            // document.documentElement.classList.remove('mode-dark');
            // document.getElementById("iconDarkMode").classList.add('ri-sun-line');
            // document.getElementById("iconDarkMode").classList.remove('ri-moon-fill');
        }
    }
}, true)
