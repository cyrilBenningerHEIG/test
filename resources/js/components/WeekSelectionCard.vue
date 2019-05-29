<template>
<!-- v-for="weekselectionproduct in weekselectionproducts" v-bind:key="weekselectionproduct_id" -->
      <div class="card" >
    <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="card-img-top" alt="vin1">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
    </div>
  </div>
</template>
<script>
export default {
    data(){
        return{
            weekselection : [],
            weekselectionproduct:{
                no : '',
                nom : '',
                description : '',
            },
            weekselectionproduct_id:'',

        }
     },
    //     created() {
    //         this.fetchWeekSelectionProduct();
    //     },
    //     methods() {
    //         fetchWeekSelectionProduct(){
    //             fetch('x');
    //         }
    //     }
}
</script>
