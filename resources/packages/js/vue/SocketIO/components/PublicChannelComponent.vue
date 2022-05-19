<template>
    <div class="container">
        <h1>Listen PublicChannelComponent</h1>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                user: {}
            }
        },
        mounted() {
            console.log('Component mounted.') 

            window.Echo.channel('nameOfChannel')
            .listen('.nameOfEvent', (e) => { 
                console.log(e);
            });
        }
    }
</script>
