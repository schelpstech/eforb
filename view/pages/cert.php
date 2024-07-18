<?php
// List of valid certificate numbers with the owner's name and issued date
$validCertificates = [
    "CERT123456" => ["name" => "Ezekiel Salako", "course" => "SolarWind Deployment and Administration Training", "issued_date" => "18-07-2024"],
    "CERT654321" => ["name" => "Jane Smith", "course" => "SolarWind Deployment and Administration Training", "issued_date" => "2022-02-01"],
    "CERT112233" => ["name" => "Alice Johnson","course" => "SolarWind Deployment and Administration Training", "issued_date" => "2022-03-01"],
    // Add more certificate numbers, owners, and issued dates as needed
];

// Function to verify certificate number and get the owner's details
function verifyCertificate($certificateNumber)
{
    global $validCertificates;
    if (array_key_exists($certificateNumber, $validCertificates)) {
        return $validCertificates[$certificateNumber];
    } else {
        return false;
    }
}

// Get the certificate number from the URL (GET parameter)
$certificateNumber = isset($_GET['certnum']) ? $_GET['certnum'] : null;
$certificateDetails = false;

if ($certificateNumber !== null) {
    $certificateDetails = verifyCertificate($certificateNumber);
}
?>




<?php
include '../include/header.php';

?>

<section class="text-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10 col-lg-8">
                <h3><strong> Eforb Company Training Certificate Validation Report</strong></h3>
                <p class="lead"><i>
                    All Eforb issued certificates are digitally verifiable by scanning the QRcode on the certificates</i>
                </p>
            </div>
        </div>
        <!--end of row-->
    </div>
    <!--end of container-->
</section>

<section class=" ">
    <div class="container">
        <div class="process-2 row">
            <div class="col-md-3">
                <div class="process__item">
                    <h4>• Certificate Status :
                        <br><br>
                        <?php
                        if ($certificateNumber !== null) {
                            if ($certificateDetails) {
                                echo "<p> <strong>$certificateNumber</strong> is VALID</p>";
                            } else {
                                echo "<p>Certificate number <strong>$certificateNumber</strong> is invalid.</p>";
                            }
                        } else {
                            echo "<p>No certificate number provided.</p>";
                        }
                        ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process__item">
                <h4>• Certificate Owner :
                        <br><br>
                        <?php
                        if ($certificateNumber !== null) {
                            if ($certificateDetails) {
                                echo "<p> <strong>{$certificateDetails['name']}</strong></p>";
                            } else {
                                echo "<p>Certificate number <strong>$certificateNumber</strong> is invalid.</p>";
                            }
                        } else {
                            echo "<p>No certificate number provided.</p>";
                        }
                        ?>
                    </h4>
                </div>
            </div>
            <div class="col-md-3">
                <div class="process__item">
                <h4>• Certificate issued :
                        <br><br>
                        <?php
                        if ($certificateNumber !== null) {
                            if ($certificateDetails) {
                                echo "<p> <strong>{$certificateDetails['issued_date']}</strong></p>";
                            } else {
                                echo "<p>Certificate number <strong>$certificateNumber</strong> is invalid.</p>";
                            }
                        } else {
                            echo "<p>No certificate number provided.</p>";
                        }
                        ?>
                    </h4>

                </div>
            </div>
            <div class="col-md-3">
                <div class="process__item">
                    <h4>• Certificate Course :
                        <br><br>
                        <?php
                        if ($certificateNumber !== null) {
                            if ($certificateDetails) {
                                echo "<p> <strong>{$certificateDetails['course']}</strong></p>";
                            } else {
                                echo "<p>Certificate number <strong>$certificateNumber</strong> is invalid.</p>";
                            }
                        } else {
                            echo "<p>No certificate number provided.</p>";
                        }
                        ?>
                    </h4>
                </div>
            </div>
        </div>
        <!--end process-->
    </div>
    <!--end of container-->
</section>

<?php
include '../include/footer.php';
?>