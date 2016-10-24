<hr style="margin-top:250px;width:100%">
<footer>
  <div class="container">
    <p style="font-family: 'Roboto'; font-weight:normal;font-size:15px">Copyright &copy; 2016 Nahkoda - Development Resource, All Rights Reserved. </p>
  </div>
</footer>
<script src="<?php print base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php print base_url('assets/js/bootstrap.min.js') ?>"></script>
<script src="<?php print base_url('assets/js/custom.js') ?>"></script>
<script src="<?php print base_url('assets/js/ie10-viewport-bug-workaround.js') ?>"></script>
<script>
    $('.penandaku-btn-register').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-feedback').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-bug').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-label').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-bookmark').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
    $('.penandaku-btn-destroy').on('click', function() {
        var $this = $(this);
            $this.button('loading');
            setTimeout(function() {
              $this.button('reset');
            }, 800);
    });
</script>
</body>
</html>
