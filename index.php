<?php
require "config.php";
?>

<DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $config['title']; ?></title>
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
    <header>
        <div class="container1">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="logo-menu">
                    <a class="navbar-brand" href="/"><?php echo $config2['title']; ?></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent"
                            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                </div>
                <?php include "header.php" ?>
            </nav>
            <div class="block1-text">
                <h1>Lorem ipsum dolor sit amet</h1>
                <p>Nunc vel nibh tempor, pharetra lectus congue, luctus orci.</p>
                <?php echo $config4['title']; ?>
            </div>
            <div class="block1-img">
                <a href="#"><img src="src/img/scroll.png"></a>
            </div>
        </div>
    </header>
    <section>
        <div class="block1-bg3">
            <div class="block1-img1">
                <div>
                    <?php echo $config5['title']; ?>
                    <?php echo $config4['title']; ?>
                </div>
            </div>
            <div class="block1-img2">
                <div>
                    <?php echo $config5['title']; ?>
                    <?php echo $config4['title']; ?>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="container1">
            <div>
                <h1>What we do?</h1>
            </div>
            <div class="block2-content">
                <div class="block2 bl2-1">
                    <div>
                        <a href="#"><img src="src/img/11.png"></a>
                    </div>
                    <div class="bl1">
                        <p><b>Web design</b></p>
                        <?php echo $config3['title']; ?>
                    </div>
                </div>
                <div class="block2 bl2-2">
                    <div>
                        <a href="#"><img src="src/img/22.png"></a>
                    </div>
                    <div class="bl1">
                        <p><b>Web Applications</b></p>
                        <?php echo $config3['title']; ?>
                    </div>
                </div>
            </div>
            <div class="block2-content">
                <div class="block2">
                    <div>
                        <a href="#"><img src="src/img/33.png"></a>
                    </div>
                    <div class="bl1">
                        <p><b>Digital paiting</b></p>
                        <?php echo $config3['title']; ?>
                    </div>
                </div>
                <div class="block2">
                    <div>
                        <a href="#"><img src="src/img/44.png"></a>
                    </div>
                    <div class="bl1">
                        <p><b>Desktop Applications</b></p>
                        <?php echo $config3['title']; ?>
                    </div>
                </div>
            </div>
            <div class="button-block2">
                <?php echo $config4['title']; ?>
            </div>
        </div>
    </section>
    <section>
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="bl3">
                        <div class="bl3-1"></div>
                        <div class="bl3-2">
                            <h1>Neptune template</h1>
                            <?php echo $config3['title']; ?>
                            <button type="button" class="button1 bl3-button">Watch more</button>
                        </div>
                        <div class="bl3-3"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bl3">
                        <div class="bl3-3"></div>
                        <div class="bl3-2">
                            <h1>Neptune template</h1>
                            <?php echo $config3['title'];
                            echo $config4['title']; ?>
                        </div>
                        <div class="bl3-1"></div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="bl3">
                        <div class="bl3-1"></div>
                        <div class="bl3-3"></div>
                        <div class="bl3-2">
                            <h1>Neptune template</h1>
                            <?php echo $config3['title'];
                            echo $config4['title']; ?>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </section>
    <section>
        <div class="bg-block4">
            <div class="container1">
                <div class="block4-headline">
                    <h2>About us!</h2>
                    <?php echo $config3['title']; ?>
                </div>
                <div class="block4">
                    <div class="row">
                        <div class="col-md-3">
                            <ul>
                                <li>
                                    <a href="#"><img src="src/img/p1.png"></a>
                                    <h2>John Doe</h2>
                                    <p>Curabitur ullamcorper auctor<br>
                                        mauris, placerat fermentum.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li>
                                    <a href="#"><img src="src/img/p2.png"></a>
                                    <h2>John Doe</h2>
                                    <p>Aliquam sagittis neque in lectus<br>
                                        semper, arcu scelerisque. </p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li>
                                    <a href="#"><img src="src/img/p3.png"></a>
                                    <h2>John Doe</h2>
                                    <p>Curabitur ullamcorper auctor<br>
                                        mauris, placerat fermentum.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-3">
                            <ul>
                                <li>
                                    <a href="#"><img src="src/img/p4.png"></a>
                                    <h2>John Doe</h2>
                                    <p>Neque in lectus semper, nec<br>
                                        elementum arcu scelerisque. </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="button-bl4">
                        <button type="button" class="button1">Watch more</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="bg-block5">
            <div class="location">
                <img src="src/img/pin.png"></div>
        </div>
    </section>
    <footer>
        <div>
            <p>Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.<br>
                Try awsome tool for desgners <a href="#">symu.co</a></p>
        </div>
    </footer>
    <script src="assets/js/libs.js"></script>
    <script src="assets/js/main.js"></script>
    </body>
    </html>

