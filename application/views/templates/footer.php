<!-- Footer -->
<section id="footer">
	<div class="container">
		<div class="row text-center text-xs-center text-sm-left text-md-left">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center" style="color:white; text-shadow: text-shadow: 2px 2px 2px rgba(0, 0, 0, 1);">
				<h4 class="text-center">Contact Us</h4>
				<hr style="border: 1px solid white; width: 5%; margin-top:-5px;">
				<div>
					<h6 style="margin-top:20px;">Fikry Ramadhana</h6>
				</div>
				<div>
					<h6>Jalan Antene 4 No.19 Radio Dalam, Kelurahan Kramat Pela,<br>Kecamatan Kebayoran Baru, Jakarta Selatan, 12130.</h6>
				</div>
				<div>
					<span class="" id="basic-addon1"><i class="fas fa-phone-alt">
							<h6>081316110480</h6>
						</i></span>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
				<ul class="list-unstyled list-inline social text-center">
					<li class="list-inline-item"><a href="https://web.facebook.com/wzysevenfour"><i class="fa fa-facebook"></i></a></li>
					<li class="list-inline-item"><a href="https://twitter.com/fikry_rmdhn"><i class="fa fa-twitter"></i></a></li>
					<li class="list-inline-item"><a href="https://www.instagram.com/fikryrmdhna"><i class="fa fa-instagram"></i></a></li>
					<li class="list-inline-item"><a href="mailto: fikryramadhana8@gmail.com" target="_blank"><i class="fa fa-envelope"></i></a></li>
				</ul>
			</div>
			</hr>
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
				<p><u><a href="https://www.unas.ac.id/">Universitas Nasional</a></u> Sistem Informasi</p>
				<p class="h6">&copy All right Reversed. 2019</p>
			</div>
			</hr>
		</div>
	</div>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
	<script src="<?= base_url() ?>assets/js/jquery.easing.1.3.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- My JS -->
	<script src="<?= base_url() ?>assets/js/script.js"></script>

	<script type="text/javascript">
		$(document).ready(function(ev) {
			$('#custom_carousel').on('slide.bs.carousel', function(evt) {
				$('#custom_carousel .controls li.active').removeClass('active');
				$('#custom_carousel .controls li:eq(' + $(evt.relatedTarget).index() + ')').addClass('active');
			})
		});
	</script>
	</body>

	</html>