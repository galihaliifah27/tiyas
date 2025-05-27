<!-- Summernote CSS -->


<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>

<!-- Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>

<!-- Bootstrap JavaScript -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.18/summernote-bs4.min.js"></script>
  

<!-- Other Plugin Scripts -->
<script src="<?= base_url('assets/adminlte/plugins/jquery-ui/jquery-ui.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/chart.js/chart.min.js')?>"></script>

<!-- Additional Scripts -->
<script src="<?= base_url('assets/adminlte/plugins/sparklines/sparkline.js')?>"></script>
<!-- jvqmap -->
<script src="<?= base_url('assets/adminlte/plugins/jqvmap/jquery.vmap.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jqvmap/maps/jquery.vmap.usa.js')?>"></script>

<script src="<?= base_url('assets/adminlte/plugins/jquery-knob/jquery.knob.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/moment/moment.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/daterangepicker/daterangepicker.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/overlayScrollBars/js/jquery.overlayScrollBars.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/dist/js/pages/dashboard.js')?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/adminlte.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/dist/js/demo.js')?>"></script>
<!-- overlayScrollbars -->
<script src="<?= base_url('assets/adminlte/plugins/datatables/jquery.dataTable.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-bs4/js/dataTables.bootstrap-4.min.js')?>"></script>
<!-- Datatables & Export Buttons -->
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/dataTables.buttons.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/jszip/jszip.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/pdfmake/pdfmake.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/pdfmake/vfs_fonts.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.html5.min.js')?>"></script>
<script src="<?= base_url('assets/adminlte/plugins/datatables-buttons/js/buttons.print.min.js')?>"></script>

<script>
  $(document).ready(function () {
    // inisialisasi DataTable
    conts table = $('#datatable').Datatable({
      responsive: true,
      lenghtChange: true,
      autoWidth: false,
      dom: 'Bfrtip',
      buttons: [
        { extend: 'excelhtml5',
          className: 'btn btn-success btn-sm',
          title: 'Daftar_Berita'
        },
        {
          extend: 'pdfhtml5',
          className: 'btn btn-danger btn-sm',
          title: 'Daftar_Berita',
          orientation: 'landscape',
          pageSize: 'A4'
        },
        {
          extend: 'print',
          className: 'btn btn-info btn-sm',
          title: 'Daftar_Berita'
        }
      ]
    });

    table.buttnos().container().appendTo('#datatable_wrapper .col-md-6:eq(0)');

    //inisialisasi summernote
    $('.summernote').summernote({
        height: 300,
        toolbar: [
          ['style',['style']],
          ['font', ['bold','underline','italic','clear']],
          ['color',['color']],
          ['para',['ul','ol','paragraph']],
          ['table',['table']],
          ['insert',['link','picture','video']],
          ['view',['fullscreen','codeview','help']]
        ],
        callbacks: {
          onImageUpload: function (files) {
            for (let i = 0; i < files.lenght; i++) {
              uploadSummernoteImage(files[i]);
            }
          }
        }
    });

    function uploadSummernoteImage(file) {
      let data = new FormData();
      data.append('image', file);

      $.ajax({
          url: '<?= base_url('berita/upload_summernote_image'); ?>',
          type: 'POST',
          data: data,
          contentType: false,
          cache: false,
          processData: false,
          success: function (response) {
              try{
                  let imageUrl = JSON.parse(response).url;
                  $('.summernote').summernote('insertImage', imageUrl);
              } catch (e) {
                  console.error('Error parsing JSON response:', e);
                  console.log('Raw response:', response);
              }
          },
          error: function (jqXHR, textStatus, errorThrown) {
              console.error(textStatus, errorThrown);
          }
      });
    }
  });

