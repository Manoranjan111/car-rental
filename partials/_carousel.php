<?php

echo'
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
  </div>
  <div class="carousel-inner mb-3" style="height: 25rem;">
    <div class="carousel-item active">
      <img src="https://source.unsplash.com/random/900×700/?car,hundai" class="d-block w-100" alt="car-image">
    </div>
    <div class="carousel-item">
      <img src="https://source.unsplash.com/random/900×700/?car,tata" alt="car-image">
    </div>
    <div class="carousel-item"> 
      <img src="https://source.unsplash.com/random/900×700/?car,mahindra" alt="car-image">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

';
?>