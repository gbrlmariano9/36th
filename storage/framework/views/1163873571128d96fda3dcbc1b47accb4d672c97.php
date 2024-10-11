<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="utf-8">
        <style type="text/css">
         
        </style>


    </head>

    <body>
        
        Dear <?php echo e(trim($fullName)); ?>,
        <br>
        <h4><strong> Mabuhay! </strong></h4>
        

        <p>Thank you for submitting your Paper/Poster for the <strong> 36th Ugnay Palay National Rice Research for Development (R4D) Conference, themed “Advancing Rice R4DE para sa Masaganang Pilipinas”</strong>, on November 26-28, 2024 at the DA-CBC Plenary Hall, DA-PhilRice, Nueva Ecija.</p>
        <br>
        <p>Your submission is key to enriching the conference’s discourse on rice R4DE innovations. Below are the details of your entry:</p>
        
        <?php if(!empty($data)): ?>
            <?php foreach($data as $entry): ?>
                <p><strong> Title: </strong><?php echo e($entry['presentationTitle']); ?></p>
                <p><strong> Thematic Area: </strong><?php echo e($entry['thematicArea']); ?></p>
                <p><strong> Submission Type: </strong><?php echo e($entry['presentationType']); ?></p>
                <p><strong> Submission Date: </strong><?php echo e($entry['dateSubmitted']); ?></p>
                <p><strong> Tracking Number: </strong><?php echo e($entry['trackingNumber']); ?></p>

                <hr>
            <?php endforeach; ?>
        <?php endif; ?>
        

        <br><br>
        <p>Our Technical Reviewers will evaluate your submission, and you will receive feedback by the 4th week of October 2024. If you have any questions or need to update your submission, contact us at ricesecretariat@gmail.com.</p>
        <br>
        <p>In addition, please remember to:</p>
        <p>1.   <a href="https://drive.google.com/file/d/1JRCp5D7yskKYISuMH0LLU9ghE8ZGFihh/view?usp=sharing">Review the program of activities</a>;</p> 
        <p>2.   Bring suitable layers, as the venue may be cool; and </p>
        <p>3.   Confirm your travel arrangements and <a href="https://drive.google.com/file/d/1E_PrvbQpzwDj3ti7RNxiaD6Cg8GcN7wa/view?usp=sharing">accommodation</a>, if needed.</p>
        <?php /* <p>3.   Download the Ugnay Palay app for the program and materials;</p> */ ?>

        <br>
        <p>We appreciate your contribution and look forward to showcasing your work.</p>

        <br>
        <p>Sincerely,</p>
        Conference Secretariat


    </body>
</html>