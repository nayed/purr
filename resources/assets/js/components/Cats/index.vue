<template>
    <p>Look at dem cats</p>
    <table class="u-full-width">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of birth</th>
                <th>breed</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="cat in cats">
                <td>{{ cat.name }}</td>
                <td>{{ cat.date_of_birth }}</td>
                <td>{{ cat.breed.name }}</td>
            </tr>
        </tbody>
    </table>
    <br>
    <a class="button button-primary u-pull-right" v-link="'create'">Add a new cat</a>
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
                this.$http.get('http://localhost:8000/api/cats')
                    .then(response => {
                        this.cats = response.data.cats
                    }, error => {
                        console.error('nope')
                    })
            }
        }
    }
</script>