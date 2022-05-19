// boostrap window
//#######################################
import Echo from 'laravel-echo';
window.io = require('socket.io-client');
window.Echo = new Echo({
    broadcaster: 'socket.io',
    host: window.location.hostname + ':6001'
});

// listen channel
//#######################################
window.Vue = require('vue').default;

// PublicChannelComponent
Vue.component('public-component', require('./components/PublicChannelComponent.vue').default);

const app = new Vue({
    el: '#app',
});

 
