import Vue from 'vue';
import * as api from './../../config';


export default {
    state:{},
    mutations:{},
    actions:{
        getnamesaa:(()=>{
            axios.get(api.getnames1)
        .then((response) => {this.tasks = response.data;
        console.log('response-created', response);
        }
        )
        .catch((error) => console.log(error));
            console.log('task Component mounted.')
        })
    }
}