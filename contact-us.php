<?php
$title = "Contact Us";                   
$ogimage = "images/contact-us.webp";                   
$twitterimage = "images/contact-card1.webp";                   
$description = "Connect with us on Business Investors, Media and Analysts. Post a Query for RFPs, RFIs, Jobs, Alliances, Partnerships etc.";                   
include "include/header.php";                 
?>
        <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        $link = mysqli_connect("localhost", "root", "megatask@121#*", "contact-form");
        // Check connection
        if($link === false){
        die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        // Escape user inputs for security
        $inputName = mysqli_real_escape_string($link, $_POST['inputName']);
        $inputEmail = mysqli_real_escape_string($link, $_POST['inputEmail']);
        $inputNumber = mysqli_real_escape_string($link, $_POST['inputNumber']);
        $inputMessage = mysqli_real_escape_string($link, $_POST['inputMessage']);
        // attempt insert query execution
        $sql = "INSERT INTO contact (inputName, inputEmail, inputNumber, inputMessage) VALUES ('$inputName', '$inputEmail', '$inputNumber', '$inputMessage')";
        if(mysqli_query($link, $sql)){
        echo "<p class='text-grey'>Data successfully Saved.</p>";
        } else{
        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        // close connection
        mysqli_close($link);
        ?>

    <main>
        <!-- Bread crumb section start -->

        <section class="banner_breadcrumb paddingY-36">
            <div class="container-md">
                <div class="banner_crumb paddingY-60 px-3 px-sm-5">
                    <h2 class="text-white">Contact Us</h2>
                    <h6 class="text-white">
                        <a class="text-decoration-underline text-white" href="index.html">Home</a>
                        <span>/ Contact Us</span>
                    </h6>
                </div>
            </div>
        </section>

        <!-- Bread crumb section End -->

        <section class="contact_us_wrapper paddingY-60">
            <div class="container">
                <div class="row justify-content-between align-items-center">
                    <div class="col-md-6">
                        <div class="contact_form_wrapper">
                            <h2 class="mb-4">Please fill the form below to contact us :)</h2>
                            <div class="form_wrapper">
                                <form method="post">
                                    <div class="mb-4 form-icon">
                                        <i class="uil uil-user-md"></i>
                                        <input type="text" class="form-control" name="inputName" id="inputName" placeholder="Name*" aria-describedby="inputName" required>
                                    </div>
                                    <div class="mb-4 form-icon">
                                        <i class="uil uil-envelope"></i>
                                        <input type="email" class="form-control" name="inputEmail" id="inputEmail" placeholder="Email*" aria-describedby="inputEmail" required>
                                    </div>
                                    <div class="mb-4 form-icon">
                                        <i class="uil uil-phone"></i>
                                        <input type="number" class="form-control" name="inputNumber" id="inputNumber" placeholder="Phone Number*" aria-describedby="inputNumber" required>
                                    </div>
                                    <div class="mb-4 form-icon">
                                        <i class="uil uil-comment-alt-message"></i>
                                        <textarea id="inputMessage" name="inputMessage" class="form-control" placeholder="Message"></textarea>
                                    </div>
                                    <div class="bnt_wrapper">
                                        <button class="btn btn-main-outline" type="submit">Send</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-6 d-none d-lg-block">
                        <div class="contact_image"><img src="images/contact-us.webp" alt="" class="img-fluid"></div>
                    </div>
                </div>
            </div>
        </section>

        <div class="contact_card_wrapper paddingbottom-60">
            <div class="container">
                <h2 class="text-center mb-4">Contact Information</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-4">
                        <div class="contact_card">
                            <div class="card_img">
                                <img src="images/contact-card1.webp" alt="" class="img-fluid">
                            </div>
                            <h5 class="fw-medium mt-4 mb-3">Visit Us(Office India)</h5>
                            <p class="text-grey"><span class="text-theme fw-medium">Address :</span> D-21 (Second Floor) Lane No.3, Abul Fazal Enclave-Part 1, Jamia Nagar, New Delhi-110025, India.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact_card">
                            <div class="card_img">
                                <img src="images/contact-card2.webp" alt="" class="img-fluid">
                            </div>
                            <h5 class="fw-medium mt-4 mb-3">Visit Us(Office DUBAI)</h5>
                            <p class="text-grey"><span class="text-theme fw-medium">Address :</span> The exchange tower, Business Bay, Dubai - United Arab Emirates.</p>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="contact_card">
                            <div class="card_img">
                                <img src="images/contact-card3.webp" alt="" class="img-fluid">
                            </div>
                            <h5 class="fw-medium mt-4 mb-3">Phone Number</h5>
                            <p class="text-grey"><span class="text-theme fw-medium">Phone :</span>(IN) +91-114-203-2023</p>
                            <p class="text-grey"><span class="text-theme fw-medium">Phone :</span>(IN) +91 9990959853</p>
                            <p class="text-grey"><span class="text-theme fw-medium">Phone :</span>(UAE) (+971)-54-587-1570</p>
                            <p class="text-grey"><span class="text-theme fw-medium">Email :</span>info@megatasktechnologies.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php
    $title = "Php Header Footer";                   
    include "include/footer.php";                 
    ?>