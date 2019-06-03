<template>
<!-- v-for="weekselectionproduct in weekselectionproducts" v-bind:key="weekselectionproduct_id" -->
  
      <div class="card card-custom mx-2 mb-3" >
    <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="card-img-top" alt="vin1">
    <div class="card-body" id="weekproduct">
      <h5 class="card-title">Nom du vin</h5>
      <p class="card-text">Spécificités</p>
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

