<template>
    <main class="main">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item"><a href="#">Admin</a></li>
            <li class="breadcrumb-item active">Dashboard</li>
        </ol>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                    <i class="fa fa-align-justify"></i> PROVINCIA POR DOSIS
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            

                            <div class="form-group row">
                                <div class="col-md-6">
                                    <div class="input-group">
                                        <input type="date"  v-model="f_inicio" class="form-control" placeholder="Fecha Inicio">
                                        <input type="date"  v-model="f_fin" class="form-control" placeholder="Fecha Fin">
                                    </div>
                                </div>
                            </div>
                            
                            <br>

                            <div class="input-group">
                                <button type="submit" @click="get_provincia()" class="btn btn-primary"><i class="fa fa-search"></i> VER</button>
                            </div>

                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>PROVINCIA</th>
                                <th>1RDA DOSIS</th>
                                <th>2DA DOSIS</th>
                                <th>3RA DOSIS</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item ,index) in provincia" :key="index">
                                <td v-text="item.provincia"></td>
                                <td v-text="item.DosisUno"></td>
                                <td v-text="item.DosisDos"></td>
                                <td v-text="item.DosisTres"></td>
                                <td v-text="item.Total"></td>
                            </tr>                                
                        </tbody>
                      
                    </table>
                    
                </div>
            </div>
        </div>
        
        
    </main>
</template>

<script>
export default {
    data() {
        return {
            provincia:[],
            distrito: [],
            f_inicio: '',
            f_fin: ''
        }
    },  
    methods:{
        get_provincia(){

            //console.log(this.f_inicio)
            //console.log(this.f_fin)

            axios.post('provincia-dosis', {
                'f_inicio':this.f_inicio,
                'f_fin':this.f_fin
            })
            .then((response) => {
                this.provincia = response.data;
            });
        }, 
        get_distrito(){
            axios.get('distrito-dosis')
                .then((response) => {
                     this.distrito = response.data;
                });
        }
    },
    mounted() {
        console.log('Component mounted.');
    }
}
</script>