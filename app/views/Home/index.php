<div class="container-fluid">

    <!--Section: Main carousel-->
    <section id="Main_carousel">
        <div class="row">
            <div class="col-md-12">

                <!--Carousel Wrapper-->
                <div id="carousel-example-2" class="carousel slide z-depth-5" data-ride="carousel" >
                    <!--Indicators-->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-2" data-slide-to="0" class="active"></li>
                        <li data-target="#carousel-example-2" data-slide-to="1"></li>
                        <li data-target="#carousel-example-2" data-slide-to="2"></li>
                        <li data-target="#carousel-example-2" data-slide-to="3"></li>
                        <li data-target="#carousel-example-2" data-slide-to="4"></li>
                    </ol>
                    <!--/.Indicators-->

                    <!--Slides-->
                    <div class="carousel-inner" role="listbox">
                        <!--First slide-->
                        <div class="carousel-item active">
                            <!--Mask color-->
                            <div class="view">
                                <img src="<?=$GLOBALS['basePath'];?>/assets/img/slide/slide-1.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                        </div>
                        <!--/First slide-->

                        <!--Second slide-->
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img src="<?=$GLOBALS['basePath'];?>/assets/img/slide/slide-2.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                        </div>
                        <!--/Second slide-->

                        <!--Third slide-->
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img src="<?=$GLOBALS['basePath'];?>/assets/img/slide/slide-3.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                        </div>
                        <!--/Third slide-->

                        <!--Fourth slide-->
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img src="<?=$GLOBALS['basePath'];?>/assets/img/slide/slide-4.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                        </div>
                        <!--/Fourth slide-->

                        <!--Fifth slide-->
                        <div class="carousel-item">
                            <!--Mask color-->
                            <div class="view">
                                <img src="<?=$GLOBALS['basePath'];?>/assets/img/slide/slide-5.jpg" class="img-fluid" alt="">
                                <div class="full-bg-img">
                                </div>
                            </div>
                        </div>
                        <!--/Fifth slide-->
                    </div>
                    <!--/.Slides-->

                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                        <i class="fa fa-chevron-left fa-2x" aria-hidden="true"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                        <i class="fa fa-chevron-right fa-2x" aria-hidden="true"></i>
                        <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
                </div>
                <!--/.Carousel Wrapper-->

            </div>
        </div>
    </section>
    <!--/Section: Main carousel-->

    <!--Section : apa itu nihao-->
    <section id="teaser">
        <div class="divider-new">
            <h2 class="h2-responsive">Apa itu Nihao?</h2>
        </div>

        <h4 class="text-center"><strong>Ni hao</strong> adalah <strong>Rumah Belajar Anak</strong>. dimana kami menyediakan tempat bagi anak-anak untuk belajar <strong>bahasa mandarin</strong>, belajar <strong>membaca menulis</strong> dan <strong>berhitung (calistung)</strong> dan juga membantu anak-anak untuk <strong>mereview pelajaran di sekolah</strong>.</h4>
        <br>
        <hr class="between-sections">
    </section>
    
    <!-- Section : Program Kami-->
    <section id="program_kami">
        <h1 class="text-center"><strong>Program Kami</strong></h1>
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <!--Rotating card-->
                    <div class="card-wrapper">
                        <div id="card-1" class="card-rotating effect__click">

                            <!--Front Side-->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/doodle.jpg" class="img-fluid">
                                </div>
                                <!--Avatar-->
                                <div class="avatar"><img src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/mandarin.jpg" class="rounded-circle img-responsive">
                                </div>
                                <!--Content-->
                                <div class="card-block">
                                    <h4>Bahasa Cina</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <!--Triggering button-->
                                    <a class="rotate-btn btn-material orange" data-card="card-1" style="">Deskripsi Program</a>
                                </div>
                            </div>
                            <!--/.Front Side-->

                            <!--Back Side-->
                            <div class="face back">

                                <!--Content-->
                                <h4>Program Bahasa Cina</h4>
                                <hr>
                                <p>Pembelajaran bahasa mandarin pada rumah belajar Ni Hao sangat menarik untuk anak-anak, terutama bagi yang baru ingin mengenalkan anak-anaknya dengan bahasa mandarin.</p>
                                <hr>
                                <br>
                                <a class="btn-material pink" href="<?= $GLOBALS['basePath'] ?>/Pendaftaran/index">Daftar Sekarang</a>
                                <br>
                                <br>
                                <br>
                                <!--Triggering button-->
                                <a class="rotate-btn" data-card="card-1"><i class="fa fa-undo"></i> Putar Kembali</a>

                            </div>
                            <!--/.Back Side-->

                        </div>
                    </div>
                    <!--/.Rotating card-->
                </div>
                <div class="col-md-4">
                    <!--Rotating card-->
                    <div class="card-wrapper">
                        <div id="card-2" class="card-rotating effect__click">

                            <!--Front Side-->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/doodle.jpg" class="img-fluid">
                                </div>
                                <!--Avatar-->
                                <div class="avatar"><img src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/Math.jpg" class="rounded-circle img-responsive">
                                </div>
                                <!--Content-->
                                <div class="card-block">
                                    <h4>Calistung</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <!--Triggering button-->
                                    <a class="rotate-btn btn-material orange" data-card="card-2" style="">Deskripsi Program</a>
                                </div>
                            </div>
                            <!--/.Front Side-->

                            <!--Back Side-->
                            <div class="face back">

                                <!--Content-->
                                <h4>Program Calistung</h4>
                                <hr>
                                <p>Rumah belajar Ni Hao dapat membantu para orangtua untuk mengajarkan Calistung pada anak-anak. Di rumah belajar Ni Hao, anak-anak bukan saja belajar menulis dan membaca dalam bahasa indonesia, tetapi juga dalam bahasa inggris.</p>
                                <hr>
                                <br>
                                <a class="btn-material pink" href="<?= $GLOBALS['basePath'] ?>/Pendaftaran/index">Daftar Sekarang</a>
                                <br>
                                <br>
                                <br>
                                <!--Triggering button-->
                                <a class="rotate-btn" data-card="card-2"><i class="fa fa-undo"></i> Putar Kembali</a>

                            </div>
                            <!--/.Back Side-->

                        </div>
                    </div>
                    <!--/.Rotating card-->
                </div>
                <div class="col-md-4">
                    <!--Rotating card-->
                    <div class="card-wrapper">
                        <div id="card-3" class="card-rotating effect__click">

                            <!--Front Side-->
                            <div class="face front">

                                <!-- Image-->
                                <div class="card-up">
                                    <img src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/doodle.jpg" class="img-fluid">
                                </div>
                                <!--Avatar-->
                                <div class="avatar"><img src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/Book.jpg" class="rounded-circle img-responsive">
                                </div>
                                <!--Content-->
                                <div class="card-block">
                                    <h4>Bimbingan Belajar</h4>
                                    <br>
                                    <br>
                                    <br>
                                    <!--Triggering button-->
                                    <a class="rotate-btn btn-material orange" data-card="card-3" style="">Deskripsi Program</a>
                                </div>
                            </div>
                            <!--/.Front Side-->

                            <!--Back Side-->
                            <div class="face back">

                                <!--Content-->
                                <h4>Program Bimbingan Belajar</h4>
                                <hr>
                                <p>Rumah belajar Ni Hao membantu anak-anak untuk mereview pelajaran di sekolah dan juga mendampingi anak-anak dalam mengerjakan pekerjaan rumah. Sehingga bisa dibilang program bimbingan belajarnya pun tepat guna.</p>
                                <hr>
                                <br>
                                <a class="btn-material pink" href="<?= $GLOBALS['basePath'] ?>/Pendaftaran/index">Daftar Sekarang</a>
                                <br>
                                <br>
                                <br>
                                <!--Triggering button-->
                                <a class="rotate-btn" data-card="card-3"><i class="fa fa-undo"></i> Putar Kembali</a>

                            </div>
                            <!--/.Back Side-->

                        </div>
                    </div>
                    <!--/.Rotating card-->
                </div>
            </div>     
        </div>
    </section>
    
    <!-- Section : Testimonial -->
    <section id="testimonial">
        <br><hr><br>
        <h1 class="text-center"><strong>Testimonial Dari Parents</strong></h1>
        <br>
        <!--Carousel Wrapper-->
        <div id="carousel-example-1" class="carousel no-flex testimonial-carousel slide" data-ride="carousel" data-interval="false">

            <!--Slides-->
            <div class="carousel-inner" role="listbox">
                <!--First slide-->
                <div class="carousel-item active">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">

                            <img src="<?=$GLOBALS['basePath'];?>/assets/img/testi/fidia.jpeg" class="rounded-circle img-fluid" alt="First sample avatar image">

                        </div>
                        <!--Content-->
                        <p><i class="fa fa-quote-left"></i> Sejak faatih belajar di Nî hâo dia mulai banyak perubahan Mulai dari belajar menulis dan membaca bahasa indonesia dan bahasa inggris menjadi lebih baik perkembangannya setiap harinya. Ditambah lagi ikutan kelas mandarin sekali seminggu atas permintaannya sendiri hahaha sampe beli mini hard book mandarin</p>

                        <h4>Fidia Rima Dina</h4>
                        <h5>Faatih'mom</h5>
                    </div>

                </div>
                <!--/First slide-->

                <!--Second slide-->
                <div class="carousel-item">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">

                            <img src="<?=$GLOBALS['basePath'];?>/assets/img/testi/Yulia.jpeg" class="rounded-circle img-fluid" alt="Second sample avatar image">

                        </div>
                        <!--Content-->
                        <p><i class="fa fa-quote-left"></i> Alhamdulilah sejak Aira join di Ni Hao, hasil2 ulangan dan test di sekolahnya jadi meningkat, tenaga pengajarnya juga sangat humble dengan Aira, pokoknya tidak kecewa join di Ni Hao. </p>

                        <h4>Yulia Pratiwi</h4>
                        <h5>Aira's mom</h5>
                    </div>

                </div>
                <!--/Second slide-->

                <!--Third slide-->
                <div class="carousel-item">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">

                            <img src="<?=$GLOBALS['basePath'];?>/assets/img/testi/Sari.jpeg" class="rounded-circle img-fluid" alt="Third sample avatar image">

                        </div>
                        <!--Content-->
                        <p><i class="fa fa-quote-left"></i>Pokonya membantu banget deh untuk anakku dengan les Ni Hao. belajarnya fun dan yang pasti anakku happy banget ngikutinnya. recomended bgt karena tempatnya juga ada di dalam sekolah.</p>

                        <h4>Sari Blackley</h4>
                        <h5>Clarissa's mom</h5>
                    </div>
                </div>
                <!--/Third slide-->

                <!--Third slide-->
                <div class="carousel-item">

                    <div class="testimonial">
                        <!--Avatar-->
                        <div class="avatar">

                            <img src="<?=$GLOBALS['basePath'];?>/assets/img/testi/Damerika.jpeg" class="rounded-circle img-fluid" alt="Third sample avatar image">

                        </div>
                        <!--Content-->
                        <p><i class="fa fa-quote-left"></i>Pengalaman hafizah selama belajar di nihao alhamdullilah dia jadi lebih semangat belajar. awalnya saya agak ragu takutnya dia bosan karna waktu belajarnya bertambah tapi lihat perkembangannya lebih baik, sy jadi tdk ragu. Hafizah bilang sendiri senang belajar tambahan di nihao dan skrg dia mulai lancar membaca juga berhitung karena dia sangat paham dg cara yg diajarkan missnya, jadi saya dirumah cukup mengawasi dan mengoreksi jika ada homework.</p>

                        <h4>Damerika</h4>
                        <h5>Hafizah's mom</h5>
                    </div>
                </div>
                <!--/Third slide-->
            </div>
            <!--/.Slides-->

            <!--Controls-->
            <a class="carousel-item-prev left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
                <span class="icon-prev" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-item-next right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
                <span class="icon-next" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
            <!--/.Controls-->
        </div>
        <!--/.Carousel Wrapper-->     
    </section>

    <section id="kabar">
        <br><hr><br>
        <h1 class="text-center"><strong>Kabar Terbaru Dari Kami</strong></h1><br>
        <p class="text-center">Ikuti terus perkembangan dan kabar terbaru dari kami dengan berlangganan ke newsletter kami. Anda juga dapat menemukan info dan berita berita menarik dari portal Blog kami.</p><br><br>
        <div class="flex-ctn">
            <a href=""><img class="img-index flex-itm" src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/blog.jpg" alt="blog"></a>
            <a href=""><img class="img-index flex-itm" src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/events.jpg" alt="events"></a>
            <a href=""><img class="img-index flex-itm" src="<?=$GLOBALS['basePath'];?>/assets/img/Icon/newsletter.jpg" alt="newsletter"></a>
        </div>
        <br><br><br>
    </section>


</div>