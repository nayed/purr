<template>
    <p>There are about {{ cats }} cats</p>
</template>

<script>
    export default {
        data() {
            return {
                cats: null
            }
        },
        created: function() {
            this.fetchCats()
        },
        methods: {
            fetchCats() {
                this.$http.get('http://localhost:8000/api/about')
                    .then(response => {
                        this.cats = response.data.numberOfCats
                    }, error => {
                        console.error('nope')
                    })
            }
        }
    }
</script>