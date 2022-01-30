<?php include 'components/header.php' ?>   
      <div class="main-home">
        <div class="div-majt-home">
            <div class="divMajtKontenti">
              
              <div class="divfoto"><img id="divMajtFoto" src="images/logo.png"> </div>
              
              <div class="divtext">
                <p>Ne jemi nje kompani qe dizajnojme ilustrimin tend te preferuar ne mbadhjet e tuaja. </p>
              </div>

              <div class="divMbuttoni">
                <a href="product.php">Porosit tani </a>
              </div>
            </div>
        </div>
                 
      <div class="div-djatht-home">
        <div class="djathkontenti">
          <button class="prev" onclick="plusSlides(-1)">&#10094;</button>
          <div class="slide">
          <img src="images/favinqi.jpeg">
          </div>
          <div class="slide">
          <img src="images/fotohome.jpeg" >
          </div>
          <div class="slide">
          <img src="images/jokeri.jpeg" >
          </div>
          <button class="next" onclick="plusSlides(1)">&#10095;</button>
        </div>
        <br>
        <div class="dots">
          <span class="dot" onclick="currentSlide(1)"></span>
          <span class="dot" onclick="currentSlide(2)"></span>
          <span class="dot" onclick="currentSlide(3)"></span>
        </div>
      </div>
    </div>
    
 <?php include 'components/footer.php' ?>   
