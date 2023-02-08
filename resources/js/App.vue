<template>
    <div>
        <h1>Guest View</h1>
        <ol>
            <li v-for="post in arrayPosts" :key="post.id">
                {{ post.title }}
                <p>{{ post.excerpt }}</p>
            </li>
        </ol>

    </div>
</template>

<script>

export default{
    name: 'App',
    data(){
        return{
            arrayPosts: [],
        }
    },
    created(){
        axios.get('/api/posts')
          .then(response => this.arrayPosts = response.data.results)
    }
}
</script>

<style>

</style>