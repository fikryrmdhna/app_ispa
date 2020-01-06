<!-- plugins:js -->
<script src="<?= base_url() ?>assets/RoyalUI/template/vendors/base/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<script src="<?= base_url() ?>assets/RoyalUI/template/vendors/chart.js/Chart.min.js"></script>
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="<?= base_url() ?>assets/RoyalUI/template/js/off-canvas.js"></script>
<script src="<?= base_url() ?>assets/RoyalUI/template/js/hoverable-collapse.js"></script>
<script src="<?= base_url() ?>assets/RoyalUI/template/js/template.js"></script>
<script src="<?= base_url() ?>assets/RoyalUI/template/js/todolist.js"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="<?= base_url() ?>assets/RoyalUI/template/js/dashboard.js"></script>
<!-- End custom js for this page-->

<!-- Bootstrap -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!-- Javascript Datatables -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/pdfmake.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.36/vfs_fonts.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/bs4/jszip-2.5.0/dt-1.10.20/af-2.3.4/b-1.6.1/b-colvis-1.6.1/b-flash-1.6.1/b-html5-1.6.1/b-print-1.6.1/cr-1.5.2/fc-3.3.0/fh-3.1.6/kt-2.5.1/r-2.2.3/rg-1.1.1/rr-1.2.6/sc-2.0.1/sl-1.3.1/datatables.min.js"></script>

<!-- CK EDITOR -->
<script src="https://cdn.ckeditor.com/4.13.0/full/ckeditor.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
            $('#myTable').DataTable({
                dom: "<'row'<'col-sm-1'l><'col-sm-9'f><'col-sm-2'B>>" +
                    "<'row'<'col-sm-12'tr>>" +
                    "<'row'<'col-sm-5'i><'col-sm-7'p>>",
                buttons: [{
                        text: '<i class="ti-save"></i> &nbsp;Excel',
                        extend: 'excelHtml5',
                        exportOptions: {
                            columns: [0, ':visible']
                        }
                    },

                ]
            });
        }

    );
</script>

<!-- jQuery -->
<script type="text/javascript">
    $(document).ready(function() {

        $('.table').on('click', '#btnedit', function() {
            let id = $(this).attr('data-button');

            save_method = 'update';
            $('#form')[0].reset();

            //load data dari ajax
            $.ajax({
                url: "<?= site_url('gejala/ajax_edit'); ?>/" + id,
                type: "GET",
                dataType: "JSON",
                success: function(data) {
                    $('[name="kode_gejala"]').val(data.kode_gejala);
                    $('[name="gejala"]').val(data.gejala);

                    $('#myModal').modal('show');
                    $('#myModal_title').text('Edit Gejala');

                },
                error: function(jsJHR, textStatus, errorThrown) {
                    alert('Error Get Data From Ajax');
                }
            });

        });

        $('#myModal').on('click', '#btnsave', function() {
            $.ajax({
                url: "<?= base_url('gejala/gejala_update') ?>",
                type: "POST",
                data: $('#form').serialize(),
                dataType: "JSON",
                success: function(data) {
                    $('#myModal').modal('hide');
                    location.reload();
                }
            });
        });
    });
</script>

<script>
    CKEDITOR.replace('penyebab');
    CKEDITOR.replace('solusi');
    CKEDITOR.replace('penyebab1');
    CKEDITOR.replace('solusi1');
    CKEDITOR.replace('penyebab2');
    CKEDITOR.replace('solusi2');
    CKEDITOR.replace('penyebab3');
    CKEDITOR.replace('solusi3');
    CKEDITOR.replace('penyebab4');
    CKEDITOR.replace('solusi4');
    CKEDITOR.replace('penyebab5');
    CKEDITOR.replace('solusi5');
</script>

<!-- Chart JS -->


</body>

</html>