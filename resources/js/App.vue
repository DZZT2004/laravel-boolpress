<template>
    <div>
        <main>
            <router-view :to="{name: 'home'}">
                <div v-for="post in arrayPosts" :key="post.id" class="tile">

                </div>
            </router-view>
        </main>

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