<?= view('partials/header') ?>
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <h1>Photo Gallery</h1>
            <div class="row  mb-5">
                <?php
                for ($i = 1; $i < 110; $i++) {
                ?>
                    <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <img src="<?= site_url('assets/photogallery/' . $i . '.jpg') ?>" alt="<?= $i ?>.jpg" class="img-thumbnail gallery-photo" style="width:320px;height:220px;" data-index="<?= $i-1 ?>">
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>

    <div id="imgpopupmodel" class="custom-modal">
        <span class="close-btn">&times;</span>

        <span class="nav1 prev">&#10094;</span>
        <img class="modal-content-2" id="modalImages">
        <span class="nav1 next">&#10095;</span>
    </div>

    <script>
        $(document).ready(function() {

		var images = $('.gallery-photo');
		
		var currentIndex;
		

		images.click(function() {
			currentIndex = $(this).data('index');
			showImage(currentIndex);
			$('#imgpopupmodel').fadeIn();
		});

		function showImage(index) {
			var src = images.eq(index).attr('src');
			$('#modalImages').attr('src', src);
		}

		$('.next').click(function() {
			currentIndex = (currentIndex + 1) % images.length;
			showImage(currentIndex);

			console.log("G:"+currentIndex);

			
		});

		$('.prev').click(function() {
			currentIndex = (currentIndex - 1 + images.length) % images.length;
			showImage(currentIndex);

			console.log("G:"+currentIndex);

		});

		$('.close-btn').click(function() {
			$('#imgpopupmodel').fadeOut();
		});

		$(document).keydown(function(e) {
			if (e.keyCode == 37) $('.prev').click(); // left arrow key
			if (e.keyCode == 39) $('.next').click(); // right arrow key
			if (e.keyCode == 27) $('#imgpopupmodel').fadeOut(); // ESC close
		});

	});
    </script>

</div>
<?= view('partials/footer') ?>