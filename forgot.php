<?php

include_once 'includes/header.php';

?>

<body>

    <div class="wrapper-page">

        <div class="container">
            <div class="row row justify-content-center">
                <div class="col-lg-5">
                    <div class="card card-pages mt-4">
                        <div class="card-body">
                            <div class="text-center mt-0 mb-3">
                                <a href="" class="logo logo-admin">
                                    <!-- <img src="assets/images/logo-dark.png" class="mt-3" alt="" height="26"></a> -->
                                <p class="text-muted mx-auto mb-4 mt-4">Enter your email address and we'll send you an email with instructions to reset your password.</p>
                            </div>

                            <form class="form-horizontal mt-4" action="#">

                                <div class="col-12">
                                    <div class="alert alert-danger alert-dismissible">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                                        Enter your <b>Email</b> and instructions will be sent to you!
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="col-12">
                                        <label for="email">Email</label>
                                        <input class="form-control" type="text" required="" id="email" placeholder="Email">
                                    </div>
                                </div>

                                <div class="form-group text-center mt-3">
                                    <div class="col-12">
                                        <button class="btn btn-primary btn-block waves-effect waves-light" type="submit">Send Email</button>
                                    </div>
                                </div>

                                <div class="row mt-4">
                                    <div class="col-12 text-center">
                                        <p class="text-muted mb-2">Back to <a href="login" class="ml-1"><b>Log in</b></a></p>
                                    </div>
                                    <!-- end col -->
                                </div>

                            </form>

                        </div>

                    </div>

                </div>
            </div>
            <!-- end row -->
        </div>
    </div>



<?php

include_once 'includes/footer.php';

?>

