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
                    <i class="fa fa-align-justify"></i>SECTOR POR DOSIS
                </div>
                <div class="card-body">
                    <div class="form-group row">
                        <div class="col-md-6">
                            <div class="input-group">
                                <button type="submit" @click="get_sector()" class="btn btn-primary"><i class="fa fa-search"></i> VER</button>
                            </div>
                        </div>
                    </div>
                    <table class="table table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>SECTOR</th>
                                <th>1RDA DOSIS</th>
                                <th>2DA DOSIS</th>
                                <th>3RA DOSIS</th>
                                <th>TOTAL</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr v-for="(item ,index) in sector" :key="index">
                                <td v-text="item.descripcion"></td>
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
            sector:[]
        }
    },  
    methods:{
        get_sector(){
            axios.get('sector-dosis')
                .then((response) => {
                     this.sector = response.data;
                });
        }
    },
    mounted() {
        console.log('Component mounted.');
    }
}
</script>