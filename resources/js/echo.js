import Echo from 'laravel-echo'
import toastr from 'toastr'

import Pusher from 'pusher-js'
window.Pusher = Pusher

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: import.meta.env.VITE_PUSHER_APP_KEY,
    cluster: import.meta.env.VITE_PUSHER_APP_CLUSTER,
    forceTLS: true,
    wsHost: import.meta.env.VITE_PUSHER_HOST,
    wsPort: import.meta.env.VITE_PUSHER_PORT,
    wssPort: import.meta.env.VITE_PUSHER_PORT,
    enabledTransports: ['ws', 'wss'],
})

document.addEventListener(`DOMContentLoaded`, () => {
    if (typeof Laravel !== `undefined` && Laravel.userId) {
        toastr.options = {
            'closeButton': true,
            'progressBar': true,
            'positionClass': 'toast-bottom-right',
        }

        window.Echo.private(`App.Models.User.${Laravel.userId}`)
            .notification((notification) =>
                toastr.info(`Новая задача от - ${notification.user}`, notification.name)
            )
    }
})
