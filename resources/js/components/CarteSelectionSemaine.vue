<template>  

      <div class="card card-custom mx-2 mb-3" >
            <!-- <div v-for="vin in vins"> -->
    <img src="https://mdbootstrap.com/img/Photos/Others/images/43.jpg" class="card-img-top" alt="vin1">
    <div class="card-body" id="weekproduct">
      <!-- <h5 class="card-title">{{vin.nom}}</h5>
      <p class="card-text">{{vin.millesime}}</p> -->
    </div>
  </div>
  <!-- </div> -->
</template>
<script>
export default {
  props: ['vins'],

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

