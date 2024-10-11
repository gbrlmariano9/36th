   

<?php $__env->startSection('styles'); ?>
    <style>
      

 /* Font Definitions */
 @font-face
	{font-family:"Cambria Math";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:DengXian;
	panose-1:2 1 6 0 3 1 1 1 1 1;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Cambria;
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:"\@DengXian";
	panose-1:2 1 6 0 3 1 1 1 1 1;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	font-size:10.0pt;
	font-family:"Calibri",sans-serif;}
.MsoChpDefault
	{font-family:"Calibri",sans-serif;}
.MsoPapDefault
	{margin-bottom:8.0pt;
	line-height:107%;}
 /* Page Definitions */
 @page  WordSection1
	{size:595.3pt 841.9pt;
	margin:1.0in 1.25in 1.0in 1.25in;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
  .borderless table {
    border-top-style: none;
    border-left-style: none;
    border-right-style: none;
    border-bottom-style: none;
}

    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>




<div class="component-section no-code">
    <h5 id="section1" class="tx-semibold">Ugnay Palay Participants</h5>
    <button id="download_btn" class="btn btn-success btn-sm pull-right"><i class="fa fa-download"></i> Download Data</button>
    <button id="download_btn2" class="btn btn-warning btn-sm pull-right"><i class="fa fa-download"></i> Presenter Other Details</button>

    <table
          class="table table-hover table-striped table-bordered"
          id="participants_tbl"
        >
          <thead>
            <th>Invitation Code</th>
            <th>E-mail Address</th>
            <th>Full Name</th>
            <th>Sex</th>
            <th>Age Bracket</th>
            <th>Contact Number</th>
          </thead>
          <tbody></tbody>
        </table>
        
        
      </div><!-- component-section -->






<?php /* <script src="/csd/public/lib/jquery2/jquery.min.js"></script> */ ?>
<script src="/csd/public/assets/js/jquery3.6.3.js"></script>
<script src="/csd/public/lib/select2/js/select2.min.js"></script>
<script src="/csd/public/js/DataTables/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>

$( document ).ready(function() {
  $("#participants_tbl").DataTable().clear();
    $("#participants_tbl").DataTable({
      bDestroy: true,
      autoWidth: false,
      searchHighlight: true,
      processing: true,
      serverSide: true,
      orderMulti: true,
      order: [],
      ajax: {
        url: "<?php echo e(route('getParticipantsData')); ?>",
        dataType: "json",
        type: "POST",
        data: {
          _token: "<?php echo e(csrf_token()); ?>",

        },
      },
      columns: [
        { data: "invitationCode" },
        { data: "email" },
        { data: "fullName" },
        { data: "sex" },
        { data: "ageBracket" },
        { data: "contactNo" },
      ],
    });
  });

  $("#download_btn").on("click", function (e) {
    var url = '<?php echo e(route("exportParticipants")); ?>';
    window.open(url);
  });

  $("#download_btn2").on("click", function (e) {
    var url = '<?php echo e(route("exportPresenters")); ?>';
    window.open(url);
  });


</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>