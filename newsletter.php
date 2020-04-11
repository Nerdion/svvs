<?php include_once 'header.php' ?>
<div class="ftco-blocks-cover-1">
    <div class="site-section-cover overlay" data-stellar-background-ratio="0.5" style="background-image: url('images/campus/schoolbldg/1.jpg')">
        <div class="container marginOverlay">
            <div class="row align-items-center">
                <div class="col-md-5 mt-5 pt-5">
                    <h1 class="mb-3 font-weight-bold text-teal">NewsLetter</h1>
                    <p><a href="index.php" class="text-white">Home</a> <span class="mx-3">/</span>
                        <strong>NewsLetter</strong></p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="site-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="othercontent">
                    <h2 class="text-center text-cursive text-red">News Letters</h2>
                    <div class="row">
                        <!-- start -->
                        <div class="col-md-4">

                            <div class="text-center">
                                <h5 class="">26th January 2019</h5>
                                <iframe class="newsletter" src="newsletters/26January2019.pdf#toolbar=0" class="img-thumbnail" alt="NewsLetter-IssueNo-34"></iframe>
                                <h3 class="btn btn-danger btn-custom-1" data-toggle="modal" data-target="#myModal26jan19">View PDF</h3>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center">
                                <h5 class="">24th November 2018</h5>
                                <iframe class="newsletter" src="newsletters/24November2018.pdf#toolbar=0" class="img-thumbnail" alt="NewsLetter-IssueNo-34"></iframe>


                                <h3 class="btn btn-dark btn-custom-1" data-toggle="modal" data-target="#myModal24nov18">View PDF</h3>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <div class="text-center">
                                <h5 class="">15th August 2018</h5>
                                <iframe class="newsletter" src="newsletters/15August2018.pdf#toolbar=0" class="img-thumbnail" alt="NewsLetter-IssueNo-34"></iframe>
                                <h3 class="btn btn-warning btn-custom-1" data-toggle="modal" data-target="#myModal15aug18">View PDF</h3>
                            </div>
                        </div>

                        <!-- Modal -->
                        <div id="myModal26jan19" class="modal fade" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-lg">


                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="text-center">NewsLetter 26th January 2019</h4>
                                        <button type="button" class="close" data-dismiss="modal">×</button>

                                    </div>
                                    <div class="modal-body">

                                        <iframe src="newsletters/26January2019.pdf" frameborder="0" width="100%" height="400px" title="Acharya"></iframe>

                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div><!-- end -->

                    <!-- Modal -->
                    <div id="myModal24nov18" class="modal fade" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-lg">


                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="text-center">NewsLetter 24th November 2018</h4>
                                    <button type="button" class="close" data-dismiss="modal">×</button>

                                </div>
                                <div class="modal-body">

                                    <iframe src="newsletters/24November2018.pdf" frameborder="0" width="100%" height="400px" title="Acharya"></iframe>

                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div><!-- end -->

                <!-- Modal -->
                <div id="myModal15aug18" class="modal fade" role="dialog" aria-hidden="true">
                    <div class="modal-dialog modal-lg">


                        <div class="modal-content">
                            <div class="modal-header">
                                <h4 class="text-center">NewsLetter 15th August 2018</h4>
                                <button type="button" class="close" data-dismiss="modal">×</button>

                            </div>
                            <div class="modal-body">

                                <iframe src="newsletters/15August2018.pdf" frameborder="0" width="100%" height="400px" title="Acharya"></iframe>

                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once 'footer.php' ?>
<?php include_once 'scripts.php' ?>