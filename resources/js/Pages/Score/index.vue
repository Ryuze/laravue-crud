<template>
    <Head title="Score" />
    <div class="grid">
        <nav>
            <nav-header />
        </nav>
        <section>
            <score-table />
        </section>
    </div>
</template>

<script>
import { Head } from "@inertiajs/inertia-vue3";
import NavHeader from '@/Components/NavHeader.vue';
import ScoreTable from '@/Components/ScoreTable.vue';

export default {
    components: {
        Head,
        NavHeader,
        ScoreTable,
    }
};
</script>

<style lang="postcss" scoped></style>
