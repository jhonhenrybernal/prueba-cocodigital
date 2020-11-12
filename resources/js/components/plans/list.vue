<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Nuevo plan</div>
                    <span>TIPO:</span>
                    <input v-model="tipo" placeholder="tipo de plan">

                    <span>VALOR:</span>
                    <input v-model="valor" placeholder="Valor del plan">


                    <span>Cantidad:</span>
                    <input v-model="cant" placeholder="cantidad del plan">
                    <button v-if="save"  class="primary" @click="savePlan">Guardar</button>
                    <br>
                    <div class="card-header">Planes actuales</div>
                    <div class="card-body">
                        <datatable :columns="columns" :data="rows"></datatable>
                        <datatable-pager v-model="page" type="abbreviated" :per-page="per_page"></datatable-pager>

                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>

   import { VuejsDatatableFactory } from 'vuejs-datatable';

    export default {
        components: { VuejsDatatableFactory },
        mounted() {
            console.log('Component mounted.')
        },
        data(){
            return {
                columns: [
                        {label: 'id',   field: 'id'},
                        {label: 'Tipo', field: 'type'},
                        {label: 'Valor',field: 'value'},
                        {label: 'Cant', field: 'cant'}
                    ],
                rows: [],
                page: 1,
                per_page: 2,
                valor: '',
                cant: '',
                tipo: '',
                save: true,
            }
        },
        methods:{
            getPosts: function() {
                axios.get('/plans/list/ssp').then(function(response){
                    this.rows = response.data;
                }.bind(this));
            },

            savePlan(){
                axios.post('/plans/add', {
                    tipo: this.tipo,
                    valor: this.valor,
                    cant: this.cant
                })
                .then(response=>{
                    console.log(response)
                })
                .catch(function (error) {
                    alert('warnign')
                });
            }
        },
        created: function(){
            this.getPosts()
        }
    }
</script>
