    
    <?php if(Route::current()->getName() != 'email.view' && Route::current()->getName() != 'registration'): ?>
    <script src="/csd/public/lib/jquery/jquery.min.js"></script>
       
    <?php endif; ?>

   
    
    <?php if(Route::current()->getName() !="registration"): ?>
    <script src="/csd/public/lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/csd/public/lib/feather-icons/feather.min.js"></script>
    <script src="/csd/public/lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/csd/public/lib/js-cookie/js.cookie.js"></script>
    <script src="/csd/public/lib/chart.js/Chart.bundle.min.js"></script>
    <script src="/csd/public/lib/jquery.flot/jquery.flot.js"></script>
    <script src="/csd/public/lib/jquery.flot/jquery.flot.stack.js"></script>
    <script src="/csd/public/lib/jquery.flot/jquery.flot.resize.js"></script>
    <script src="/csd/public/lib/jquery.flot/jquery.flot.threshold.js"></script>
    <script src="/csd/public/lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="/csd/public/lib/jqvmap/maps/jquery.vmap.world.js"></script>

    <script src="/csd/public/assets/js/cassie.js"></script>
    <script src="/csd/public/assets/js/flot.sampledata.js"></script>
    <script src="/csd/public/assets/js/vmap.sampledata.js"></script>
    <script src="/csd/public/assets/js/dashboard-one.js"></script>

    <script src="/csd/public/lib/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="/csd/public/lib/datatables.net-dt/js/dataTables.dataTables.min.js"></script>
    <script src="/csd/public/lib/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/csd/public/lib/datatables.net-responsive-dt/js/responsive.dataTables.min.js"></script>
        
    <?php endif; ?>
  
    <?php /* <script src="/csd/public/lib/select2/js/select2.full.min.js"></script> */ ?>
  


    <script>
        $( document ).ready(function() {            
            setTimeout(function() { 
                $('.loader').hide();
            }, 500);
        });
    </script>
