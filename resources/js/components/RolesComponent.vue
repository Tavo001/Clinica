<template>
<div>
    <h2>{{title}}</h2>
    <p>
        {{body}}
    </p>
    <h2>
    {{role}}
    </h2>
    <input type="text" name="role" class="form-control" v-model="role">
</div>
</template>
<script>
export default {}</script>
props:{
    title:{
        type:String,
        required:true
    },
    body :{
        type:String,
        required: true
    }
    },
    data(){
        return{
            role:'',
        }
    }
}

///Libreria para hacer llamadas Async
axios.post('cear-rol')
.then(response=> {
    console.log(response);
})
.catch(error => {
    console.log(error);
})
</script>