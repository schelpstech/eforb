<?php
// List of valid certificate numbers with the owner's name and issued date
$validCertificates = [
    "CERT123456" => ["name" => "Ezekiel Salako", "course" => "SolarWinds Deployment and Administration Training", "issued_date" => "18-07-2024"],
    "CERT654321" => ["name" => "Jane Smith", "course" => "SolarWinds Deployment and Administration Training", "issued_date" => "2022-02-01"],
    "CERT112233" => ["name" => "Alice Johnson","course" => "SolarWinds Deployment and Administration Training", "issued_date" => "2022-03-01"],
    'EF-SWDAT-2407001' => ['name' => 'SALAKO EZEKIEL', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407002' => ['name' => 'ABDULLATEEF IMAM', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407003' => ['name' => 'MUHAMMAD MAMMAN', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407004' => ['name' => 'HENRY OKONKWO KC', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407005' => ['name' => 'NJIDDA UMAR BELLO', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407006' => ['name' => 'MAHMUD JIBRIL', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407007' => ['name' => 'OLAWALE OLANIYI AKINOLA', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407008' => ['name' => 'HAMZA SADA DIKKO', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407009' => ['name' => 'HENA DAVID NKIRDA', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407010' => ['name' => 'OZOR ALPHEUS EDOZIE', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407011' => ['name' => 'OLUMIDE N. PEREGRINO', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407012' => ['name' => 'CHIOMA .S.  OKOYE', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407013' => ['name' => 'BAKARE, BUKOLA KABIRAT', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407014' => ['name' => 'ABDULLAHI MAHMUD', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407015' => ['name' => 'WOBOT EVONG', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407016' => ['name' => 'FILIBUS EMO GARKUWA', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407017' => ['name' => 'JANKADA LAZIYA AUDU', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407018' => ['name' => 'SHETTIMA GALADIMA', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024'],
    'EF-SWDAT-2407019' => ['name' => 'ADEOTAN FESTUS OLUFEMI', 'course' => 'SolarWinds Deployment and Administration Training', 'issued_date' => '18-07-2024']

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