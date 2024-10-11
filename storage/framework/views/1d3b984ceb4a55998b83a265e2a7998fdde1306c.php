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
    <div class="row">
        <div class="col-sm-12">
            <center><a href="data:image/jpg;base64, <?php echo e(base64_encode(QrCode::format('png')->size(500)->margin(0)->generate("$qr_code"))); ?> " download="filename.jpg"><img src="data:image/jpg;base64, <?php echo e(base64_encode(QrCode::format('png')->size(500)->margin(0)->generate("$qr_code"))); ?> "/></a>
				<br>
				<br>
				<h3> Click QR code to download image</h3>		
			</center>
			
        </div>


          </div>
       
</div><!-- component-section -->



<?php /* <script src="/csd/public/lib/jquery2/jquery.min.js"></script> */ ?>
<script src="/csd/public/assets/js/jquery3.6.3.js"></script>
<script src="/csd/public/lib/select2/js/select2.min.js"></script>
<script src="/csd/public/js/DataTables/datatables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

<script>

$( document ).ready(function() {
   $('#saveQr').click(function(){
	qrcode._oDrawing._elCanvas.toDataURL("image/png")
   })
  });


</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>