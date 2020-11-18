</head>

<body class="mt-5">
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Quidd</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('Home'); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/about'); ?>">About <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/login'); ?>">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid">
        <div class="container text-center">
            <!-- <img src="<?= base_url('assets'); ?>/hash.jpg" width="25%" class="rounded-circle img-thumbnail"> -->
            <h1 class="display-4">About this Website</h1>
        </div>
    </div>

    <section id="about" class="about mt-5">
        <div class="container">
            <div class="row justify-content-center text-justify">
                <div class="col-md-5">
                    <p>Esports is currently very popular with teenagers. Many of them spend a lot of time playing games or watching the tournament games they play. With the rise of esports in Indonesia, there will be a lot of information needed related to esports itself. This website was created to provide information related to the world of esports, especially in Indonesia.</p>
                </div>
                <div class="col-md-5">
                    <p>In addition, this website is also used as an assignment for advanced web programming courses. As a substitute for the scores from the mid-lab exam I decided to create this website. Hopefully the website can be useful again later, can be developed into a final project or can be used as learning material in advanced web programming.</p>
                </div>
            </div>
        </div>
    </section>


    <section class="portfolio bg-light pb-3" id="portfolio">
        <div class="container">
            <div class="row mb-2 pt-2">
                <div class="col text-center">
                    <h3>About Me</h3>
                </div>
            </div>
            <div class="row mb-3 text-center">
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/img1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Front End</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/asbiq.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Database</p>
                        </div>
                    </div>
                </div>
                <div class="col-md">
                    <div class="card">
                        <img src="<?= base_url('assets'); ?>/asbiq3.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <p class="card-text">Back End</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="contact pt-3 bg-light">
        <div class="container">
            <div class="row">
                <div class="col text-center">
                    <h3>Contact Me</h3>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="card text-dark bg-light mb-3 text-center">
                        <div class="card-body">
                            <h5 class="card-title">Address</h5>
                            <p class="card-text">Jl. Prof. Dr. Ir. Sumantri Brojonegoro No.1, Gedong Meneng, Kec. Rajabasa, Kota Bandar Lampung, Lampung 35144</p>
                        </div>
                    </div>
                    <ul class="list-group text-center">
                        <li class=" list-group-item">
                            <h4>My Social Media</h4>
                        </li>
                        <li class="list-group-item">Email : asbiqalalawi@gmail.com</li>
                        <li class="list-group-item">Instagram : asbiqalalawi</li>
                        <li class="list-group-item">Facebook : Asbiq Al Alawi</li>
                        <li class="list-group-item">LinkLn : Asbiq Al Alawi</li>
                    </ul>
                </div>
                <div class="col-md-6">
                    <form>
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" class="form-control" id="email">
                        </div>
                        <div class="form-group">
                            <label for="notelp">Phone Number</label>
                            <input type="text" class="form-control" id="notelp">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Message</label>
                            <textarea type="text" class="form-control" id="pesan"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="button" class="btn btn-dark">Send</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>