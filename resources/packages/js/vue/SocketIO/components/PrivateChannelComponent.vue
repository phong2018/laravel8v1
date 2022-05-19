<template>
    <div class="container">
        <h1>Listen PrivateChannelComponent</h1>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                userId: 1
            }
        },
        mounted() {
            console.log('Component mounted.') 

            window.Echo.private('users.1')
            .listen('.nameOfEventUserNotification', (e) => { 
                console.log(e);
            });
        }
    }
</script> 