<?php $__env->startSection('styles'); ?>
    <style>
      
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>


<div class="component-section no-code">
    <h5 id="section1" class="tx-semibold">Ugnay Palay Mailer</h5>
    <?php /* <p class="mg-b-25">This is a demo of a required field that must not leave empty.</p> */ ?>

    <div class="card card-body pd-lg-25">
      <form action="#" data-parsley-validate>
        
        <div class="row">

          <div class="col-md-6">          
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-secondary btnShowModal">
              Add Attachment
            </button>

            <?php if($attachment !="N/A"): ?>
            <br>
            <br>
            <a href="#" class="viewAttachment"><i class="fa fa-paperclip" aria-hidden="true"></i>View Attachment</a>
            <?php endif; ?>
          

          </div>


          <div class="col-md-12">
            <label><span class="tx-danger"></span></label>
         
           
                <select class="form-control select2 emailsData" id="emailData" style="width: 100%" multiple="multiple">
                  <option label="Choose Email"></option>
                  <option value="All">All</option>                            
                  <option value="allParticipant">All Registered Participant</option>
                  <option value="allPresenter">All Registered Presenter</option>
                  <option value="Attached Agencies">All Attached Agencies</option>
                  <option value="Bureaus">All Bureaus</option>
                  <option value="DA-Regional Offices">All DA-Regional Offices</option>
                  <option value="Farmer Partners">All Farmer Partners</option>
                  <option value="LGUs">All LGUs</option>
                  <option value="Non-Government Organizations">All Non-Government Organizations</option>
                  <option value="Private Companies/Organizations">All Private Companies/Organizations</option>
                  <option value="Regional AFCs">All Regional AFCs</option>
                  <option value="Regional Consortia">All Regional Consortia</option>
                  <option value="Science City Community">All Science City Community</option>
                  <option value="SUCs">All SUCs</option>
                  <?php foreach($mails as $item): ?>
                  <option value="<?php echo e($item); ?>"><?php echo e($item); ?></option>
                  <?php endforeach; ?>
                
               
                </select>
          </div>

          <div class="col-md-12 mb-3">
            <label><span class="tx-danger"></span></label>          
              <textarea class="form-control messageBody" rows="5" placeholder="Message"></textarea>
        
          </div>
        
          <br>
        <div class="col-md-6">          
          <button type="button" class="btn btn-primary pd-x-50 submitEmail">Send Email</button>
        </div>
      </div>

     


       
</div><!-- component-section -->




<script src="/csd/public/assets/js/jquery3.6.3.js"></script>
<script src="/csd/public/lib/select2/js/select2.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>

$( document ).ready(function() {


       $('body').on('keyup', '.select2-search__field', function(e) {
      if($('.select2-results__message').text()=="No results found"){
        if(e.keyCode == 13){
          var data = $('.select2-search__field').val();             
          if (isEmailValid(data)) {
            $("#emailData").append('<option selected value='+data+'>'+data+'</option>');
          $( ".select2-search__field" ).trigger( "click" );
          } else {
              alert("Email is Invalid");
              $('.select2-search__field').val("");
          }
          
        }
      }    
    });
 

    function isEmailValid(email) {
    // Regular expression for a valid email address
    var emailPattern = /^(?!.*[Ã±Ã‘])(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/gm;

    // Use the test() method to check if the email matches the pattern
    return emailPattern.test(email);
  }




    $("textarea").each(function () {
    this.setAttribute("style", "height:" + (this.scrollHeight) + "px;overflow-y:hidden;");
    }).on("input", function () {
      this.style.height = 0;
      this.style.height = (this.scrollHeight) + "px";
     if(this.scrollHeight >= 30 && this.scrollHeight <= 130){      
      $('.messageBody').height(120)
     }
    });


    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#formUpload").submit(function(e) {

      e.preventDefault(); // avoid to execute the actual submit of the form.
      
      var formData = new FormData(this);
      
      $.ajax({
          type: "POST",
          url: 'upload',
          data: formData, // serializes the form's elements.
          success: function(data)
          {
            if(data == "uploaded"){
              alert("Uploaded");
              $("#file").val(null);
              $('#uploaderModal').modal('toggle');
            }
          },
          contentType: false,
          processData: false
      });
      
    });

    $('.submitEmail').click(function(e){
  
      var messageBody = $('.messageBody').val();
      var emailsData = $('.emailsData').val();
      var senderCode  = "";

      for (let index = 0; index < emailsData.length; index++) {
        if(emailsData[index] == "allParticipant" || emailsData[index] == "allPresenter" || emailsData[index] == "irincomanuel@gmail.com"  || emailsData[index] == "j.arang@mail.philrice.gov.ph" ){
          senderCode = prompt('Sender Coder');
          break;
        }
        
      }

      if(messageBody.length ==0 || emailsData.length ==0){
        Swal.fire(
          'all field are required!',
          'Warning!',
          'warning'
        )
      }else{
        $('.loader2').show();
        $.ajax({
          type: "POST",
          url: 'send-mail',
          data:{
            message:messageBody,
            mail:emailsData,
            code:senderCode
          },          
          success: function(data)
          {         
            if(data == "sent"){
              Swal.fire(
              'Email Sent!',
              'You clicked the button!',
              'success'
            ).then(function(){
              $('.loader2').hide();
               location.reload();
            });

              $('.loader2').hide();
            
            } else if(data =="no file"){
              Swal.fire(
              'Attachment Error!',
              'Please Check your attachment!',
              'warning'
            )
            $('.loader2').hide();
            } else if(data=="noCOde"){
              Swal.fire(
                'No Code!',
                'Warning!',
                'warning'
              );
              $('.loader2').hide();
            }
            else{
              $('.loader2').hide();

            }
          
          },error:function (params) {
            $('.loader2').hide();
          } ,
      });
      }
     
    });
    
    
    $('.viewAttachment').click(function(e){
      $.ajax({
          type: "POST",
          url: 'getFile',          
          success: function(data)
          {
            // alert(data.attachment.file_path);
            window.open(data.attachment.file_path);
          },
          contentType: false,
          processData: false
      });
    });

    $('.btnShowModal').click(function(e){

      $.ajax({
          type: "POST",
          url: 'getFile',          
          success: function(data)
          {
            if(data.attachment != null){              
              $('#attachmentDIv').show();     
            }else{
              $('#attachmentDIv').hide();     
            }

              $("#file").val(null);
              $('#uploaderModal').modal('show');     
          },
          contentType: false,
          processData: false
      });

    })
  });


</script>


<script>
  // Adding placeholder for search input
  (function($) {

    'use strict'

    var Defaults = $.fn.select2.amd.require('select2/defaults');

    $.extend(Defaults.defaults, {
      searchInputPlaceholder: ''
    });

    var SearchDropdown = $.fn.select2.amd.require('select2/dropdown/search');

    var _renderSearchDropdown = SearchDropdown.prototype.render;

    SearchDropdown.prototype.render = function(decorated) {

      // invoke parent method
      var $rendered = _renderSearchDropdown.apply(this, Array.prototype.slice.apply(arguments));

      this.$search.attr('placeholder', this.options.get('searchInputPlaceholder'));

      return $rendered;
    };

  })(window.jQuery);


  $(function(){
    'use strict'

    // Basic with search
    $('.select2').select2({
      placeholder: 'Choose Email',
      searchInputPlaceholder: 'Search options'
    });

    // Disable search
    $('.select2-no-search').select2({
      minimumResultsForSearch: Infinity,
      placeholder: 'Choose Email'
    });

    // Clearable selection
    $('.select2-clear').select2({
      minimumResultsForSearch: Infinity,
      placeholder: 'Choose Email',
      allowClear: true
    });

    // Limit selection
    $('.select2-limit').select2({
      minimumResultsForSearch: Infinity,
      placeholder: 'Choose Email',
      maximumSelectionLength: 2
    });

  });
</script>


<?php $__env->stopSection(); ?>
<?php echo $__env->make('email.modal.attachment-modal', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php echo $__env->make('dashboard.index', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>