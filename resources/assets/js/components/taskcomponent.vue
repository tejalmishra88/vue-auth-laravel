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
                                <span class="text-right">><a data-toggle="modal" href="#editmodal" class="btn btn-primary" @click="getrecordbyid(t)">edit</a> | 
                                <button @click="delRecord(t.id)" class="btn btn-success">delete</button> | 
                                <a class="btn btn-danger" data-toggle="modal" href="#viewmodal" @click="getRecord(t.id)">preview</a></span> </li>
                        </ul>
                    <div class="card-footer text-right"><small>company xyz</small></div>
                </div>
            </div>
        </div>
        <div id ="modal">
             <addtask @recordadded="refreshRecord"></addtask>
              </div>
    </div>
</template>

<script>
import addmodal from './addmodalcomponent.vue';
import editmodal from './editmodalcomponent.vue';
//Vue.component('addtask', require('./addmodalcomponent.vue'));
import * as apii from './../config';
    export default {
        components: {
			'addtask': addmodal
		},
        data(){return{tasks:{}, records:{},
                   editRec:{}, errors:[],
                   search:'',}},
        methods:{

             refreshRecord(datafromadd)
               {// console.log('taskcomponent--refrerecord=',datafromadd);
                // this.tasks= datafromadd;
                },
                delRecord(id) 
                {  const reply = confirm("Are You sure, you want to delete this record ?");
                   if(reply)
                   {   axios.post(apii.api.tasks5,{x:id})
                            .then(( response) => {console.log('taskcomponent.vue--delrecord response=',response.data)
                                                 
                                                   this.tasks = response.data;
                                                 }
                                )
                            .catch( error => this.errors = error.response.data.errors)
                   }   
                },
                  getrecordbyid(t)
                {  console.log('edit clicked in taskcompoenent, t=',t);
                   this.editRec =t;
                }
        },
         
        created() {
             axios.get(apii.api.getnames1)
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
