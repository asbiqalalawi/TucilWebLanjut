</head>

<body class="mt-5">
    <nav class="navbar navbar-expand-lg fixed-top navbar-light">
        <div class="container">
            <a class="navbar-brand" href="#">Quidd</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="<?= base_url('Home'); ?>">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/about'); ?>">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?= base_url('Home/login'); ?>">Log out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center">
            <h1 class="display-4">The latest and most complete news about Indonesian Esports.</h1>
        </div>
    </div>

    <div class="content" id="content">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-4">
                    <img src="<?= base_url('assets'); ?>/iyd.jpg" width="100%" class="image">
                </div>
                <div class="col-md-5">
                    <h3>[BREAKING News] InYourdreaM Officially Quits Tigers! What is the reason?</h3>
                    <br>
                    <p>The shocking news came from the well-known Dota 2 player in Indonesia, Muhammad "inYourdreaM" Rizky. Through his personal account, he decided...</p>
                    <a type="button" class="btn btn-light" href="<?= base_url('Home/inyourdream'); ?>">READ MORE</a>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-4">
                    <img src="<?= base_url('assets'); ?>/wr.jpg" width="100%" class="image">
                </div>
                <div class="col-md-5">
                    <h3>LoL: Wild Rift Ready to Enter Open Beta Phase, Save the Date!</h3>
                    <br>
                    <p>League of Legends: Wild Rift is entering the closed beta test (CBT) period. In the last few days, Riot Games has given access to players who...</p>
                    <a type="button" class="btn btn-light">READ MORE</a>
                </div>
            </div>

            <div class="row justify-content-center mb-5">
                <div class="col-md-4">
                    <img src="<?= base_url('assets'); ?>/lj.jpg" width="100%" class="image">
                </div>
                <div class="col-md-5">
                    <h3>LJ Officially Parted with RRQ, Will Join EVOS Legends?</h3>
                    <br>
                    <p>RRQ surprisingly parted ways with LJ. Rumors about LJ to EVOS Legends grew stronger after...</p>
                    <a type="button" class="btn btn-light">READ MORE</a>
                </div>
            </div>
        </div>
    </div>

    <hr>

    <div class="content text-center">
        <button type="button" class="btn btn-link text-center">MORE NEWS</button>
    </div>