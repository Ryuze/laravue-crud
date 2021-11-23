<template>
    <article id="score table" class="grid grid-col-9 mt-2 border">
        <transition name="add">
            <add-modal v-if="modalAdd" @changeShowModal="showModalAdd" />
        </transition>
        <button
            class="
                transition
                duration-300
                ease-in-out
                px-4
                py-2
                mx-2
                my-2
                text-white
                bg-blue-600
                rounded
                hover:bg-blue-800
            "
            @click="showModalAdd"
        >
            Add data
        </button>
        <table>
            <thead>
                <tr>
                    <th
                        class="py-2 border"
                        v-for="item in thead"
                        :key="item"
                        :colspan="item == 'Nilai' ? '4' : ''"
                        :rowspan="item != 'Nilai' ? '2' : ''"
                    >
                        {{ item }}
                    </th>
                </tr>
                <tr>
                    <th v-for="item in lesson" :key="item">{{ item }}</th>
                </tr>
            </thead>
            <tbody>
                <tr
                    class="
                        transition
                        duration-100
                        ease-in-out
                        border
                        hover:bg-gray-200
                    "
                    v-for="(item, index) in $page.props.scores.data"
                    :key="item.id"
                >
                    <td class="text-center font-bold">{{ index + 1 }}</td>
                    <td class="text-center">{{ item.name }}</td>
                    <td class="text-center">{{ item.class }}</td>
                    <template v-for="score in item.score" :key="score">
                        <td class="text-center">{{ score }}</td>
                    </template>
                    <td class="grid lg:grid-cols-2 gap-2">
                        <button
                            class="
                                transition
                                duration-300
                                ease-in-out
                                px-4
                                py-2
                                my-2
                                bg-green-600
                                text-white
                                rounded
                                hover:bg-green-800
                            "
                            :value="item.id"
                        >
                            Update
                        </button>
                        <button
                            class="
                                transition
                                duration-300
                                ease-in-out
                                px-4
                                py-2
                                my-2
                                bg-red-600
                                text-white
                                rounded
                                hover:bg-red-800
                            "
                            :value="item.id"
                        >
                            Delete
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <pagination :links="$page.props.scores.links" />
    </article>
</template>

<script>
import Pagination from "./Pagination.vue";
import { Link } from "@inertiajs/inertia-vue3";
import AddModal from "./AddModal.vue";

export default {
    components: { Pagination, Link, AddModal },
    data() {
        return {
            thead: ["No", "Nama", "Kelas", "Nilai", "Opsi"],
            lesson: [
                "Matematika",
                "Bhs. Indonesia",
                "Bhs. Inggris",
                "Kompetensi",
            ],
            modalAdd: false,
        };
    },
    methods: {
        showModalAdd() {
            this.modalAdd = !this.modalAdd;
        },
    },
};
</script>

<style scoped>
.add-enter-active,
.add-leave-active {
    transition: opacity 0.5s ease;
}

.add-enter-from,
.add-leave-to {
    opacity: 0;
}
</style>
