


<!-- slider start -->
        <div class="slid ">
          <div id="demo" class="carousel slide" data-ride="carousel">
            <ul class="carousel-indicators">
               <?php 

                $i= 0;
                foreach ($Result as $row) {
                $actives = '';
                if ($i == 0) {
                $actives = 'active';
                
                }
   

               ?>
              <li data-target="#demo" data-slide-to="<?= $i; ?>" class="<?= $actives; ?>"></li>
              <!--
              <li data-target="#demo" data-slide-to="1"></li>
              <li data-target="#demo" data-slide-to="2"></li>
            -->
            <?php $i++; } ?>

            </ul>

            <div class="carousel-inner" >
               <?php 

               $i= 0;
               foreach ($Result as $row) {
               $actives = '';
               if ($i == 0) {
               $actives = 'active';
              
              }
   

              ?>
              <div class="carousel-item <?= $actives; ?>">
                <img src="<?= $row['slide_image'] ?>" style="width: 100%; height: 500px; margin-top: 100px;" >

              </div>
              <!--
              <div class="carousel-item statich">
                <img src="photos/93pJYwIF9v.jpg" alt="Chicago" class="slideimg">
                <div class="carousel-caption">
                  <h3>Chicago</h3>
                  <p>Thank you, Chicago!</p>
                </div>   
              </div>
              <div class="carousel-item statich">
                <img src="photos/7VZ8IVEhuL.jpg" alt="New York" class="slideimg">
                <div class="carousel-caption">
                  <h3>New York</h3>
                  <p>We love the Big Apple!</p>
                </div>   
              </div> -->
               <?php $i++; }  ?> 
            </div>
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
              <span  class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
              <span  class="carousel-control-next-icon"></span>
            </a>
          </div>
      </div>

        </div>