<template>
    <div class="shadow py-2">
        <div class="grid grid-cols-2 bg-white">
            <div class="text-xl font-bold ml-2 my-auto">
                <Link :href="route('dashboard')"> Laravue CRUD </Link>
            </div>
            <div class="justify-self-end mr-2">
                <button
                    class="
                        px-2
                        py-2
                        rounded-lg
                        bg-transparent
                        border border-opacity-40
                        z-40
                    "
                    @click="show = !show"
                >
                    <p class="font-bold">
                        {{ $page.props.auth.user.name }}
                    </p>
                </button>
                <div v-if="show" class="absolute bg-white shadow-lg z-50 mt-2">
                    <Link :href="route('logout')" method="post" as="button">Log out</Link>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/inertia-vue3";

export default {
    components: {
        Link,
    },

    data() {
        return {
            show: false,
        };
    },
};
</script>

<style lang="postcss" scoped></style>
