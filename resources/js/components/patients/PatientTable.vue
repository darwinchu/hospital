<template>
    <div>
        <filter-box hide-refresh @refresh="fetch">
            <template v-slot:left>
                <a :href="createUrl" class="btn btn-success text-white">Create Patient</a>
            </template>
            <template v-slot:right>
                <search-form
                @search="filter($event, 'search')">
                </search-form>
            </template>
        </filter-box>

        <data-table
        ref="data-table"
        :headers="headers"
        :filters="filters"
        :fetch-url="fetchUrl"
        :no-action="noAction"
        :disabled="disabled"
        order-by="created_at"
        order-desc
        @load="load"
        >
            <template v-slot:body="{ items }">
                <tr v-for="item in items">
                    <td>{{ item.id }}</td>
                    <td>{{ item.name }}</td>
                    <td>{{ item.created_date }}</td>
                    <td>
                        <a class="btn btn-primary btn-sm text-white" :href="item.showUrl">Edit</a>
                        <a class="btn btn-danger btn-sm text-white" href="javascript:void(0)" @click="destroy(item)">Delete</a>
                        <a class="btn btn-success btn-sm text-white" :href="item.printUrl">Print</a>
                    </td>
                </tr>
            </template>

        </data-table>

        <loader 
        :loading="loading">
        </loader>
    </div>
</template>

<script>
    
import ListMixin from '../../mixins/list.js';
import ResponseMixin from '../../mixins/response.js';
import SearchForm from '../../components/Forms/SearchForm.vue';
import Swal from 'sweetalert2';

export default {
    data() {
        return {
            items: [],
        }
    },

    components: {
        'search-form': SearchForm,
    },

    props: {
        createUrl: String,
    },

    methods: {
        destroy(item) {
            let url = item.destroyUrl;

            Swal.fire({
                title: 'Delete', 
                text: 'Are you sure you want to delete this paitent?', 
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then(proceed => {
                if(proceed.isConfirmed) {
                    this.loading = true;
                    axios.post(url).then(response => {
                        this.parseSuccess(response);
                        this.fetch();
                        this.loading = false;
                    }).catch(error => {
                        this.loading = false;
                    });
                }
            });

        },
    },

    computed: {
        headers() {
            return [
                { text: '#', value: 'id' },
                { text: 'Name', value: 'name' },
                { text: 'Created At', value: 'created_at' },
            ];
        }
    },

    mixins: [ ListMixin, ResponseMixin ],
}


</script>