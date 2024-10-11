<!DOCTYPE html>
<html lang="en">
  
<style>

.loader{
  position: fixed;
  left: 0px;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif') 
              50% 50% no-repeat rgb(249,249,249);
              
} 

.loader2{
  position: fixed;
  left: 0px;
  opacity: 50%;
  top: 0px;
  width: 100%;
  height: 100%;
  z-index: 9999;
  background: url('//upload.wikimedia.org/wikipedia/commons/thumb/e/e5/Phi_fenomeni.gif/50px-Phi_fenomeni.gif') 
              50% 50% no-repeat rgb(255, 255, 255);
              
}


  

  /* Safari */
  @-webkit-keyframes spin {
    0% { -webkit-transform: rotate(0deg); }
    100% { -webkit-transform: rotate(360deg); }
  }
  
  @keyframes  spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  </style>


<head>

    
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
  </head>
  <body>
    <div class="loader" ></div>
    <div class="loader2" style="display: none"></div>
    

    <div class="content content-page">
      <div class="header" style="height: auto;">
        <div class="header-left">
          <a href="#" class="burger-menu"><i data-feather="menu"></i></a>
        </div><!-- header-left -->
      </div><!-- header -->
   
      <div class="content-body">
        <?php echo $__env->yieldContent('content'); ?>

      </div><!-- content-body -->
    </div><!-- content -->

    
  </body>


</html>


<?php echo $__env->make('layouts.js', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('sidebar.sidebar', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('header.css', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>