<template>
</template>
<script>

    export default {
        data() {
            return {
                currentUser: window.App.user,
            };
        },
        created() {
            Echo.private('App.Counter.'+ this.currentUser.id)
                .listen('MessageCounter', (e) => {
                    alert('updateValue Here');

                });
        },
    }
</script>