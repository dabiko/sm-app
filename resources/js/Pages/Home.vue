<script setup xmlns="http://www.w3.org/1999/html">
import { Head, Link } from '@inertiajs/vue3';
import GroupList from "@/Components/app/GroupList.vue";
import FollowingList from "@/Components/app/FollowingList.vue";
import CreatePost from "@/Components/app/CreatePost.vue";
import PostList from "@/Components/app/PostList.vue";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

defineProps({
    posts: Object,
    groups: Array,
    followings: Array
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Home" />

        <AuthenticatedLayout>
<!--        <pre>{{posts}}</pre>-->
        <div class="grid lg:grid-cols-12 gap-3 p-4 h-full">
            <div class="lg:col-span-3 lg:order-1 h-full overflow-hidden">
                <GroupList :groups="groups"/>
            </div>
            <div class="lg:col-span-3 lg:order-3 h-full overflow-hidden">
<!--                <FollowingList :users="followings"/>-->
            </div>
            <div class="lg:col-span-6 lg:order-2 h-full overflow-hidden flex flex-col">
<!--                <CreatePost/>-->
<!--                <PostList :posts="posts.data" class="flex-1"/>-->

            </div>
        </div>
    </AuthenticatedLayout>

</template>
