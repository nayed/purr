<template>
    <table class="u-full-width">
        <thead>
            <tr>
                <th>Name</th>
                <th>Date of birth</th>
                <th>breed</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ cat.name }}</td>
                <td>{{ cat.date_of_birth }}</td>
                <td>{{ cat.breed.name }}</td>
            </tr>
        </tbody>
    </table>
</template>


<script>
    export default {
        data() {
            return {
                cat: null
            }
        },
        ready: function() {
            var id = this.$route.params.id
            this.$http.get('http://localhost:8000/api/cats/' + id)
                .then(response => {
                    this.$set('cat', response.data.cat)
                }, error => {
                    console.error('nope')
                })
        }
    }
</script>
