<template>
    <div
        class="
            absolute
            px-2
            py-2
            border-2
            shadow
            rounded
            grid
            justify-self-center
            bg-white
        "
    >
        <button
            class="
                transition
                duration-100
                ease-in-out
                px-2
                bg-red-600
                text-white
                rounded
                justify-self-end
                hover:bg-red-800
            "
            @click="$emit('change-show-modal')"
        >
            X
        </button>
        <form @submit.prevent="addData">
            <p class="text-xl mb-2">Tambah data siswa</p>
            <div class="grid">
                <label for="nama">Nama</label>
                <input
                    type="text"
                    name="nama"
                    id="nama"
                    placeholder="Nama siswa"
                    v-model="score.name"
                />
            </div>
            <div class="grid">
                <label for="kelas">Kelas</label>
                <input
                    type="text"
                    name="kelas"
                    id="kelas"
                    placeholder="Kelas"
                    v-model="score.class"
                />
            </div>
            <p class="font-bold">Nilai</p>
            <div class="grid grid-cols-2 gap-2">
                <div class="grid">
                    <label for="matematika">Matematika</label>
                    <input type="number" placeholder="Nilai matematika" v-model="score.score.math" />
                </div>
                <div class="grid">
                    <label for="indonesia">Bhs. Indonesia</label>
                    <input type="number" placeholder="Nilai bhs. indonesia" v-model="score.score.indo" />
                </div>
                <div class="grid">
                    <label for="inggris">Bhs. Inggris</label>
                    <input type="number" placeholder="Nilai bhs. inggris" v-model="score.score.eng" />
                </div>
                <div class="grid">
                    <label for="kompetensi">Kompetensi</label>
                    <input type="number" placeholder="Nilai kompetensi" v-model="score.score.komp" />
                </div>
            </div>
            <button
                type="submit"
                class="
                    transition
                    duration-300
                    ease-in-out
                    px-4
                    py-2
                    mt-2
                    bg-green-600
                    text-white
                    hover:bg-green-800
                "
            >
                Save
            </button>
        </form>
    </div>
</template>

<script>
import { Inertia } from "@inertiajs/inertia";
import { reactive } from "vue";

export default {
    setup() {
        const score = reactive({
            name: null,
            class: null,
            score: {
                math: null,
                indo: null,
                eng: null,
                komp: null
            }
        });
        function addData() {
            Inertia.post(route("scores.store"), score);
        }

        return { score, addData }
    },
};
</script>

<style lang="postcss" scoped></style>
