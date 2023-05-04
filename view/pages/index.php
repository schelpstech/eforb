<?php
    include '../include/header.php';
if (isset($_GET['pageid'])) {
    if (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'page_home') {
        include '../include/home.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'page_aboutus') {
        include '../include/about_us.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'page_ourcto') {
        include '../include/about_ceo.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'page_casestudy') {
        include '../include/casestudy.php';
    }
    #Services
    elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'page_services') {
        include '../include/services.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'page_solutions') {
        include '../include/solutions.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'service_deployment') {
        include '../include/service_refresh.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'service_recovery') {
        include '../include/service_recovery.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'service_modern') {
        include '../include/service_modern.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'service_migrate') {
        include '../include/service_migrate.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'service_cloud') {
        include '../include/service_cloud.php';
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'service_compute') {
        include '../include/service_compute.php';   
    } elseif (isset($_GET['pageid']) & base64_decode($_GET['pageid']) == 'page_contact') {
        include '../include/contact.php';
    }
}
    else{
        include '../include/home.php';
    }
    
    include '../include/testimonial.php';
    include '../include/footer.php';
