<?php
   include '../include/header.php';

   $pageid = isset($_GET['pageid']) ? base64_decode($_GET['pageid']) : '';
   
   switch ($pageid) {
       case 'page_home':
           include '../include/home.php';
           break;
       case 'page_aboutus':
           include '../include/about_us.php';
           break;
       case 'page_ourcto':
           include '../include/about_ceo.php';
           break;
       case 'page_casestudy':
           include '../include/casestudy.php';
           break;
       case 'page_services':
           include '../include/services.php';
           break;
       case 'page_solutions':
           include '../include/solutions.php';
           break;
       case 'service_deployment':
           include '../include/service_refresh.php';
           break;
       case 'service_recovery':
           include '../include/service_recovery.php';
           break;
       case 'service_training':
           include '../include/service_training.php';
           break;
       case 'service_migrate':
           include '../include/service_migrate.php';
           break;
       case 'service_cloud':
           include '../include/service_cloud.php';
           break;
       case 'service_compute':
           include '../include/service_compute.php';
           break;
       case 'page_contact':
           include '../include/contact.php';
           break;
       default:
           include '../include/home.php';
   }
   
   include '../include/testimonial.php';
   include '../include/footer.php';
   