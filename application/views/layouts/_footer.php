</div>
						<!-- end container-fluid -->
					</div>
					<!-- end wrapper -->
					<!-- Footer -->
					<footer class="footer">
						<div class="container-fluid">
							<div class="row">
								<div class="col-12">© 2020. Dikembangkan Oleh - Roni Surya.</div>
							</div>
						</div>
					</footer>
				<!-- End Footer -->
	<!-- jQuery  -->
	<script src="<?= base_url() ?>assets/horizontal/assets/js/jquery.min.js"></script>
	<script src="<?= base_url() ?>assets/horizontal/assets/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url() ?>assets/horizontal/assets/js/jquery.slimscroll.js"></script>
	<script src="<?= base_url() ?>assets/horizontal/assets/js/waves.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
	<!-- Parsley js -->
	<script src="<?= base_url() ?>assets/plugins/parsleyjs/parsley.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js"></script>
	<!-- Data Table -->
	<script src="<?= base_url() ?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.bootstrap4.min.js"></script>
	<!-- Responsive Data Table -->
	<script src="<?= base_url() ?>assets/plugins/datatables/dataTables.responsive.min.js"></script>
	<script src="<?= base_url() ?>assets/plugins/datatables/responsive.bootstrap4.min.js"></script>
	<script src="<?= base_url() ?>assets/horizontal/assets/pages/datatables.init.js"></script>
	<!--Morris Chart-->
	<script src="<?= base_url() ?>assets/plugins/raphael/raphael-min.js"></script>
	<script src="<?= base_url() ?>assets/horizontal/assets/pages/dashboard.js"></script>
	<!-- App js -->
	<script src="<?= base_url() ?>assets/horizontal/assets/js/app.js"></script></body>

	<script>
	// Data Table
	$().DataTable();

	// Parsley
	$(document).ready(function() {
       $('form').parsley();
    });

    function pin(latitude,longitude) {
        $('input[name="latitude"]').val(latitude);
        $('input[name="longitude"]').val(longitude);
    }
	</script>
</html>