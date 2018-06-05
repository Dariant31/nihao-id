<!-- Judul Section -->
<div class="row">
    <div class="col-md-3 hidden-xs-down"></div>
    <div class="col-md-6" style="margin: 0px 15px 0px 15px;">
        <div class="alert danger-color z-depth-4" role="alert" style="border-radius: 25px;">
            <h1 class="text-center text-white" style="margin: 13px;"><strong>Kumpulan Foto</strong></h1>
        </div>
    </div>
    <div class="col-md-3 hidden-xs-down"></div>
</div>

<hr>

<!-- Gallery -->
<div class="row">
    <div class="col-md-12">

        <div id="mdb-lightbox-ui"></div>

        <?php 
            $fi = new FilesystemIterator('assets/img/gallery', FilesystemIterator::SKIP_DOTS);
            $sum= iterator_count($fi)/2;
         ?>

        <div class="mdb-lightbox">
            <?php for ($i=0; $i < $sum; $i++) : ?>
            <figure class="col-md-4">
                <a href="<?= $GLOBALS['basePath'] ?>/assets/img/gallery/<?= $i ?>.jpg" data-size="1600x1067">
                    <img src="<?= $GLOBALS['basePath'] ?>/assets/img/gallery/<?= $i ?>_tb.jpg" class="img-fluid">
                </a>
            </figure>
            <?php endfor; ?>

        </div>

    </div>
</div>

