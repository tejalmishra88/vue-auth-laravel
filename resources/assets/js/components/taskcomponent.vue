<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><h2>all todo task</h2><span class="pull-right">
                        <div class="card-body">
                       worker list</div>
                        <a class="btn btn-success btn-xs" data-toggle="modal" href="#addmodal">+</a></span> </div>
                     <ul class="list-group">
                            <li class="list-group-item"  v-for= "t in tasks">{{ t.id }} - {{ t.name }} 
                                <span class="text-right"><button class="btn btn-success">add</button> | 
                                <button class="btn btn-primary">delete</button> | 
                                <button class="btn btn-danger">preview</button></span> </li>
                        </ul>
                    <div class="card-footer text-right"><small>company xyz</small></div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){return{tasks:{},
                }},
        methods:{},
        created() {
             axios.get('http://127.0.0.1:8000/tasks')
        .then((response) => {this.tasks = response.data;
        console.log('response-created', response);
        }
        )
        .catch((error) => console.log(error));
            console.log('task Component mounted.')
        }
    }
</script>
<style type="text/css" scoped>
h2{ color:green;}
</style>
