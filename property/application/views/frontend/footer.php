 <footer id="aa-footer">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
        <div class="aa-footer-area">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-left">
               <p>Designed by <a rel="nofollow" href="#">Property Bengkulu</a></p>
              </div>
            </div>
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="aa-footer-middle">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-google-plus"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
              </div>
            </div>
            <div class="col-md-6 col-sm-12 col-xs-12">
              <div class="aa-footer-right">
                <!--<a href="#">Home</a>
                <a href="#">Support</a>
                <a href="#">License</a>
                <a href="#">FAQ</a>
                <a href="#">Privacy & Term</a>-->
              </div>
            </div>            
          </div>
        </div>
      </div>
      </div>
    </div>
  </footer>
  <!-- / Footer -->

 
  
  <!-- jQuery library -->
  <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
  <script src="<?= base_url();?>assets/front/js/jquery.min.js"></script>   
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <script src="<?= base_url();?>assets/front/js/bootstrap.js"></script>   
  <!-- slick slider -->
  <script type="text/javascript" src="<?= base_url();?>assets/front/js/slick.js"></script>
  <!-- Price picker slider -->
  <script type="text/javascript" src="<?= base_url();?>assets/front/js/nouislider.js"></script>
   <!-- mixit slider -->
  <script type="text/javascript" src="<?= base_url();?>assets/front/js/jquery.mixitup.js"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="<?= base_url();?>assets/front/js/jquery.fancybox.pack.js"></script>
  <!-- Custom js -->
  <script src="<?= base_url();?>assets/front/js/custom.js"></script> 
  <script>


var stepsSlider = document.getElementById('steps-slider');
var input0 = document.getElementById('input-with-keypress-0');
var input1 = document.getElementById('input-with-keypress-1');
var inputs = [input0, input1];

noUiSlider.create(stepsSlider, {
    start: [20, 80],
    connect: true,
    tooltips: [true],
    range: {
        'min': [0],
        '10%': [10, 10],
        '50%': [80, 50],
        '80%': 150,
        'max': 200
    }
});

stepsSlider.noUiSlider.on('update', function (values, handle) {
    inputs[handle].value = values[handle];
});



// Listen to keydown events on the input field.
inputs.forEach(function (input, handle) {

    input.addEventListener('change', function () {
        stepsSlider.noUiSlider.setHandle(handle, this.value);
    });

    input.addEventListener('keydown', function (e) {

        var values = stepsSlider.noUiSlider.get();
        var value = Number(values[handle]);

        // [[handle0_down, handle0_up], [handle1_down, handle1_up]]
        var steps = stepsSlider.noUiSlider.steps();

        // [down, up]
        var step = steps[handle];

        var position;

        // 13 is enter,
        // 38 is key up,
        // 40 is key down.
        switch (e.which) {

            case 13:
                stepsSlider.noUiSlider.setHandle(handle, this.value);
                break;

            case 38:

                // Get step to go increase slider value (up)
                position = step[1];

                // false = no step is set
                if (position === false) {
                    position = 1;
                }

                // null = edge of slider
                if (position !== null) {
                    stepsSlider.noUiSlider.setHandle(handle, value + position);
                }

                break;

            case 40:

                position = step[0];

                if (position === false) {
                    position = 1;
                }

                if (position !== null) {
                    stepsSlider.noUiSlider.setHandle(handle, value - position);
                }

                break;
        }
    });
});



</script>

  </body>
</html>