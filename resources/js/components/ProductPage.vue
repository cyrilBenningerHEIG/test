<template>
  <section>
    <div class="roadMap">
      <span>
        <a href="#">PRODUITS</a>
        <img class="arrow" :src="'http://localhost:8888/resources/js/assets/icons/arrow.svg'">
        <a href="#">VIN ROUGE</a>
      </span>
    </div>

    <div class="container p-4">
      <div class="row">
        <div class="col">
          <img class="bottleImg" :src="'http://localhost:8888/resources/js/assets/img/bottle.png'">
        </div>
        <div class="col mt-5">
          <div>
            <h5>Château Cambon la Pelouse - 2015</h5>
            <span> </span>
            <p class="mt-2 mb-2">CHF <b>17.40</b></p>
            <span> </span>
            <p><i class="font-weight-light">(<span>13</span> CHF hors TVA)</i></p>
            <span> </span>
            <p class="font-weight-light"> Numéro d'article : HFIWOMSH</p>
            <span> </span>
          </div>
              <br><br>
          <div class="mt-1 mb-1">
            <span>
              <label>VARIANTES:</label> 
              <a href="#" class="btn btn-outline-secondary btn-sm disabled" role="button" aria-disabled="true">2012</a>
              <a href="#" class="btn btn-outline-secondary btn-sm active" role="button" aria-disabled="true">2015</a>
              <a href="#" class="btn btn-outline-secondary btn-sm disabled" role="button" aria-disabled="true">2017</a>
            </span>
          </div>
          <div class="mt-1 mb-1">
              <label>QUANTITÉS:</label>
              <div class="">
                <div class="input-group">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-left-minus btn btn-outline-secondary btn-sm" data-type="minus" data-field="">
                          <span class="glyphicon glyphicon-minus">-</span>
                        </button>
                      </span>
                    <input type="text" id="quantity" name="quantity" class="form-control input-number form-control-sm" value="10" min="1" max="20">
                      <span class="input-group-btn">
                        <button type="button" class="quantity-right-plus btn btn-outline-secondary btn-sm" data-type="plus" data-field="">
                            <span class="glyphicon glyphicon-plus">+</span>
                        </button>
                      </span>   
                  <button type="button" class="btn btn-outline-danger btn-sm ml-4 mr-4">Ajouter au panier</button>                   
                </div>
              </div>
          </div>
        </div>
      </div>
    </div>

    <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
  <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Home</a>
  <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
  <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</a>
  <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Settings</a>
</div>
<div class="tab-content" id="v-pills-tabContent">
  <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">...</div>
  <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">...</div>
  <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">...</div>
  <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">...</div>
</div>

  </section>
</template>