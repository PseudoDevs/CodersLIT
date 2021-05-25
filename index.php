<?php

include_once 'includes/header.php';

?>

<body>

<?php

include_once 'includes/topbar.php';

?>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                    <div class="col-md-3">
                            <div class="card">
                                <img class="card-img-top img-fluid" src="https://image.freepik.com/free-vector/web-development-programmer-engineering-coding-website-augmented-reality-interface-screens-developer-project-engineer-programming-software-application-design-cartoon-illustration_107791-3863.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <h4 class="card-title font-16 mt-0 text-center">Joshua Lopez</h4>
                                    <p class="card-text text-muted text-center">@IamPseudoX</p>
                                </div>
                            </div>

                        <p style="font-weight: bold;"><strong> MENU </strong></p>

                        <div class="card border-5 text-center p-2 rounded">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                <ul class="list-group list-group-flush text-left">
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-home font-20 mr-2"></i> HOME</a></li>
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-code font-20 mr-2"></i> CODERS</a></li>
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-news font-20 mr-2"></i> CODES FEED</a></li>
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-cog font-20 mr-2"></i> SETTINGS</a></li>
                                </ul>
                               
                                </div>
                            </div>
                        </div>
                        
                        <p style="font-weight: bold;"><strong> PAGES </strong></p>
                        <div class="card text-center p-2 rounded">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                <ul class="list-group list-group-flush text-left">
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-home font-20 mr-2"></i> ASK ME</a></li>
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-code font-20 mr-2"></i> CODE SHARE</a></li>
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-news font-20 mr-2"></i> CODING GAMES </a></li>
                                    <li class="list-group-item">  <a class="nav-link" href="index.html"><i class="typcn typcn-cog font-20 mr-2"></i>  CODEFLOW</a></li>
                                </ul>
                                
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="col-md-6">
                    <div class="card p-2 border-5">
                            <div class="row">
                                <div class="col-md-2">
                                    <img src="assets/images/users/user-1.jpg" height="75px" width="75px" alt="user" class="rounded-circle">
                                </div>
                                <div class="col-md-8 p-3">
                                <textarea id="textarea" class="form-control" style="resize:none; overflow: hidden; height: 0px auto; padding: 10px;" maxlength="225" rows="3" placeholder="How was your day?"></textarea>
                                </div>
                                <div class="col-md-2">
                                <button type="button" class="btn btn-secondary waves-effect">Secondary</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-3">
                    <p style="font-weight: bold;"><strong> REQUESTS </strong></p>
                        <div class="card text-center p-2 rounded">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                    <button class="btn btn-info btn-lg rounded-pill"> Accept </button>
                                    <button class="btn btn-outline-dark btn-lg rounded-pill"> Decline </button>
                                
                                </div>
                            </div>
                        </div>

                        <p style="font-weight: bold;"><strong> FRIENDS </strong></p>
                        <div class="card text-center p-2 rounded">
                            <div class="row align-items-center">
                                <div class="col-md-12">
                                <div class="media mb-5">
                                        <img class="d-flex align-self-start rounded mr-3" src="assets/images/users/user-3.jpg" alt="" height="64">
                                        <h5 class="mt-0 font-14 align-self-start">Top-aligned media</h5>
                                    </div>
                                
                                </div>
                            </div>
                        </div>

                    </div>
            </div>
        </div>
    </div>

            
    <?php

include_once 'includes/footer.php';

?>
