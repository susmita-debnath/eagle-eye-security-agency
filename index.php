<?php
    include 'lib/header.php';
?>

    <section class="contact_online">
        <div class="container container1">
            <div class="writing">
                We Offer Fast, <b>Professional and Exceptional Services</b>
            </div>
            <div class="contact_online_button">
                <a href="#" type="button" class="btn bg-transparent">CONTACT US ONLINE</a>
            </div>
        </div>
    </section>

    <section class="what_we_do py-5 reveal">
        <div class="container we_do_container">
            <div class="row">
                <div class="col-md-6">
                    <div class="do_image">
                        <img src="img/what_we_do.jpg" alt="" width="444" height="600">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="do_writing">
                        <p>WHAT WE DO</p>
                        <h2>We Provide Services for Multiple <b>Customers in Various Industries</b></h2>
                        <p>In order to analyze, monitor, and mitigate potential dangers, we offer security advice and management systems. We offer close protection services, which are provided by our professionals who have undergone rigorous training and strict supervision in accordance with industry standards. Our unique team is made up of experts and professionals who can provide the greatest service and direction.</p>
                        <div class="about_button">
                            <a href="about.php" type="button" class="btn btn-warning">ABOUT OUR COMPANY</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-2 reveal">
<!--        <div class="vdo_img" id="vdo_img">-->
<!--            <video class="video" id="video" width="320" height="240" controls>-->
<!--                <source src="img/test.mp4" type="video/mp4">-->
<!--            </video>-->
<!--            <div class="bg_transparent2"></div>-->
<!--                <button type="button" onclick="show()" id="btnID" class="btn bg-transparent text-white vdo_button rounded-circle">PLAY</button>-->
<!--        </div>-->
        <div class="container">
            <div class="row mp">
                <div class="col-md-4">
                    <embed src="https://www.youtube.com/embed/WjzjKNBCLBU" width="100%" height="100%">
                </div>
                <div class="col-md-4">
                    <embed src="https://www.youtube.com/embed/AIGE_iO0jsw" width="100%" height="100%">
                </div>
                <div class="col-md-4">
                    <embed src="https://www.youtube.com/embed/BUTvoth3omo" width="100%" height="100%">
                </div>
            </div>
            <div class="row mp">
                <div class="col-md-4">
                    <embed src="https://www.youtube.com/embed/WjzjKNBCLBU" width="100%" height="100%">
                </div>
                <div class="col-md-4">
                    <embed src="https://www.youtube.com/embed/AIGE_iO0jsw" width="100%" height="100%">
                </div>
                <div class="col-md-4">
                    <embed src="https://www.youtube.com/embed/BUTvoth3omo" width="100%" height="100%">
                </div>
            </div>
        </div>
    </section>

    <section class="py-5 reveal">
        <div class="container">
            <div class="row">
                <div class="col-md-3 counter1">
                    <div id="counter">
                        7
                    </div>
                    <h5>Projects</h5>
                </div>
                <div class="col-md-3 counter2">
                    <div id="counter">
                        24
                    </div>
                    <h5>People</h5>
                </div>
                <div class="col-md-3 counter3">
                    <div id="counter">
                        <span class="number">2</span>
                    </div>
                    <h5>Experience (years)</h5>
                </div>
                <div class="col-md-3 counter4">
                    <div id="counter">
                        <span class="number">1</span>
                    </div>
                    <h5>Office</h5>
                </div>
            </div>
        </div>
    </section>

    <script>
        function hover(element) {
            element.setAttribute('src', 'img/cctv2.png');
        }

        function unhover(element) {
            element.setAttribute('src', 'img/cctv.png');
        }
    </script>

<?php
    include 'lib/footer.php';
?>