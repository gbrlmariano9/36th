<?php $__env->startSection('styles'); ?>
    <style>
      
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="component-section no-code">
    <h5 id="section1" class="tx-semibold">Ugnay Palay Mail Box</h5>
    <?php /* <p class="mg-b-25">This is a demo of a required field that must not leave empty.</p> */ ?>

    <table
          class="table table-hover table-striped table-bordered"
          id="transaction_tbl"
        >
          <thead>
            <th>User Name</th>
            <th>E-mail</th>
         <?php /*    <th>Message</th> */ ?>
            <th>Status</th>
            <th>Code</th>
            <th>Date Sent</th>
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
  $("#transaction_tbl").DataTable().clear();
    $("#transaction_tbl").DataTable({
      bDestroy: true,
      autoWidth: false,
      searchHighlight: true,
      processing: true,
      serverSide: true,
      orderMulti: true,
      order: [],
      ajax: {
        url: "<?php echo e(route('getTransactionData')); ?>",
        dataType: "json",
        type: "POST",
        data: {
          _token: "<?php echo e(csrf_token()); ?>",

        },
      },
      columns: [
        { data: "username" },
        { data: "email" },
        /* { data: "message" }, */
        { data: "status" },
        { data: "code" },
        { data: "date_created" },
      ],
    });
    
  });







</script>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('dashboard.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>