<template>
    <div class="px-5 ">
    <b-container fluid class="bg-white text-dark rounded-lg shadow p-3">
        <div class="table-responsive">
            <b-table
                :items="items"
                :fields="fields"
                :current-page="currentPage"
                :per-page="perPage"
                :sort-direction="sortDirection"
                :empty-text="empty"
                stacked="md"
                show-empty
                small
                class="text-dark">

            </b-table>
        </div>
        <b-row>
            <b-col sm="2" md="4" class="my-1">
                <b-form-group
                    label="Por pagina"
                    label-for="per-page-select"
                    label-cols-sm="6"
                    label-cols-md="4"
                    label-cols-lg="3"
                    label-align-sm="center"
                    label-size="sm"
                    class="mb-0">
                    <b-form-select
                        id="per-page-select"
                        v-model="perPage"
                        :options="pageOptions"
                        size="sm"
                    ></b-form-select>
                </b-form-group>
            </b-col>

            <b-col sm="7" md="6" class="my-1">
                <b-pagination
                    v-model="currentPage"
                    :total-rows="totalRows"
                    :per-page="perPage"
                    align="fill"
                    size="sm"
                    class="my-0"
                ></b-pagination>
            </b-col>
        </b-row>
    </b-container>
    </div>

</template>

<script>

export default {
    props:['medidas','url'],
    name: "medidas",

    data() {
        return {
            items:this.medidas,
            fields: [
                {key: 'id_medidas', label: 'No.', sortable: false, sortDirection: 'desc'},
                {key: 'fecha_medida', label: 'Fecha', sortable: false, class: 'text-center'},
                {key: 'temperatura', label: 'Temperatura', sortable: false, class: 'text-center'},
                {key: 'tiempo_activa', label: 'Tiempo Activo', sortable: false, class: 'text-center'},
                {key: 'exito', label: 'Exito', sortable: false, class: 'text-center',
                    formatter: (value) => {
                        return value === 1 ? 'SI' : 'NO'
                    }},
            ],
            empty:'No se ha encontrado ningun registro',
            totalRows: 1,
            currentPage: 1,
            perPage: 15,
            pageOptions: [5, 10, 15, {value: 100, text: "Ver todo"}],
            sortBy: '',
            sortDesc: false,
            sortDirection: 'asc',
        }
    },
    created() {
        this.interval = setInterval(() => this.getMedidas(), 10000);
    },
    mounted() {
        this.getMedidas()
    },
    methods:{
        getMedidas(){
            axios.get(this.url+'/medidas/ver').then((res) => {this.items = res.data; console.log(res.data)})
        }
    }

}
</script>

<style scoped>

</style>
