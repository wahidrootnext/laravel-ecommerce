<template>
    
</template>
<script>
    export default {
        data() {
            return {
                post: {
                    title: null,
                    desc: null
                }
            }
        },
        methods: {
            addPost() {
                this.$store.dispatch("addPost", this.post);
            }
        },
        computed: {
            posts() {
                return this.$store.getters.getPosts;
            }
        }
    }
</script>
