<template>
    
    <div class="container">
    <Header />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card card-default">
                    <div class="card-header">Example Component</div>
                    <div class="error" v-if="errors.length">
                        <span v-for="err in errors">
                            {{ err }}
                        </span>
                        <hr>
                    </div>
                    <div class="card-body">
                       <div class="list-sinhviens">
                            <h2>LIST sinhvien</h2>
                            <div class="sinhvien-table">
                                <table class="table">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>ID</th>
                                            <th>Họ tên</th>
                                            <th>Giới tính</th>
                                            <th> <router-link to="/sinhvien/them">Thêm</router-link> </th>
                                          
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr v-for="sv in list_sinhviens">
                                            <td>{{ sv.id }}</td>
                                            <td>{{ sv.ho_ten }}</td>
                                            <td>{{ sv.gioi_tinh }}</td>
                                            <td>
                                                <button @click.prevent="deleteItem(sv.id)" >Xóa</button>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</template>

<script>
    import Header from './Header'

    export default {
        data() {
            return {
                errors: [],
                list_sinhviens: []
            }
        },
        created() {
            this.getListsinhviens()
        },
        methods: {
            getListsinhviens() {
               axios.get('/api/sinhvien')
               .then(response => {
                   this.list_sinhviens = response.data.data; // get dữ liệu theo cái mình chọn 
                console.log(response.data); 
               })
               .catch(error => {
                   this.errors = []
                    if(error.response.data.errors.ho_ten) {
                        this.errors.push(error.response.data.errors.ho_ten)
                    }
                    if(error.response.data.errors.gioi_tinh) {
                        this.errors.push(error.response.data.errors.gioi_tinh)
                    }
               })
            },
            deleteItem(id) {
                axios.delete('/api/sinhvien/' + id)
                .then(async (response) => {
                    await axios.get('/api/sinhvien')
                    .then(response => {
                        this.list_sinhviens = response.data.data; 
                        console.log(this.list_sinhviens);
                    })
                    .catch(error => {
                        this.errors = []
                            if(error.response.data.errors.ho_ten) {
                                this.errors.push(error.response.data.errors.ho_ten)
                            }
                            if(error.response.data.errors.gioi_tinh) {
                                this.errors.push(error.response.data.errors.gioi_tinh)
                            }
                    })
                })
                .catch((error) => {
                    alert('Ko thể xóa');
                });
            }
        },
        components: {
           Header
        }
    }
</script>

