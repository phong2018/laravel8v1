window._ = require('lodash'); 

window.axios = require('axios');

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// boostrap window
//#######################################
import Echo from 'laravel-echo';
window.io = require('socket.io-client');
window.Echo = new Echo({
    broadcaster: 'socket.io', 
    host: `${window.location.protocol}//${window.location.hostname}:6001`,
    logToConsole: true,
    transports: ["websocket", "polling", "flashsocket"],
});

console.log(window.Echo);

// listen channel
//#######################################
window.Vue = require('vue').default;
 
 
// PrivateChannelComponent
Vue.component('private-component', require('./components/PrivateChannelComponent.vue').default);

 
const app = new Vue({
    el: '#app',
});
