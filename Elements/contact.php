
<!--Modal: Contact form-->
<div class="modal fade" id="modalContactForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog cascading-modal" role="document">
        <!--Content-->
        <div class="modal-content">
            <!--Header-->
            <div class="modal-header danger-color darken-3 white-text">
                <button type="button" class="close waves-effect waves-light" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                <h4 class="title"><i class="fa fa-pencil"></i> Contact form</h4>
                
            </div>
            <!--Body-->
            <?php if ($_POST && $suspect): ?>
                <br><p class="red-text"><strong>&nbsp &nbsp &nbsp Sorry your mail couldn't be sent ( suspicious name / email )</strong></p>
            <?php elseif ($errors || $missing) : ?>
                <br> <div style="background-color: #ffcdd2; padding:5px; margin: 10px; border-radius: 10px; width: 300px;"><p class="red-text" style="margin: 10px;"><strong>&nbsp &nbsp &nbsp Tolong isi kolom yg dibutuhkan</strong></p></div>
            <?php endif; ?>
            <form method="post" action="">
                <div class="modal-body mb-0">
                    <?php if ($missing && in_array('name', $missing) ): ?>
                        <p class="red-text"><strong>Tolong masukan Nama anda</strong></p>
                    <?php endif; ?>
                    <div class="md-form form-sm">
                        <i class="fa fa-tag prefix"></i>
                        <input type="text" class="form-control" name="name" id="name"
                            <?php if ($errors || $missing) {
                                echo 'value="' . htmlentities($name) .'"';
                            } ?>
                        >
                        <label for="name">Nama Anda</label>
                    </div>

                    <?php if ($missing && in_array('email', $missing) ): ?>
                        <p class="red-text"><strong>Tolong masukan alamat email anda</strong></p>
                    <?php elseif (isset($errors['email'])) : ?>
                        <p class="red-text"><strong>alamat email tidak valid</strong></p>
                    <?php endif; ?>
                    <div class="md-form form-sm">
                        <i class="fa fa-envelope prefix"></i>
                        <input type="email" id="email" class="form-control" name="email"
                            <?php if ($errors || $missing) {
                                echo 'value="' . htmlentities($email) .'"';
                            } ?>
                        >
                        <label for="email">Email Anda</label>
                    </div>
                    
                    <?php if ($missing && in_array('comments', $missing) ): ?>
                        <p class="red-text"><strong>Tolong masukan pesan anda</strong></p>
                    <?php endif; ?>
                    <div class="md-form form-sm">
                        <i class="fa fa-pencil prefix"></i>
                        <textarea type="text" id="comments" class="md-textarea mb-0" name="comments"><?php 

                        if ($errors || $missing) {
                            echo htmlentities($comments);
                        }

                         ?></textarea>
                        <label for="comments">Pesan Anda</label>
                    </div>

                    <div class="text-center mt-1-half">
                        <button class="btn btn-info mb-2" type="submit" value="text" id="send" name="send">Send <i class="fa fa-send ml-1"></i></button>
                    </div>
                    <?php if ($mailsent) : ?>
                        <br> <div style="background-color: #dcedc8; padding:5px; margin: 10px; border-radius: 10px; width: 300px;"><p class="green-text" style="margin: 10px;"><strong>&nbsp &nbsp &nbsp Terima Kasih ! Pesan anda sudah terkirim</strong></p></div>
                    <?php endif; ?>

                </div>
            </form>
        </div>

        <pre></pre>

        <!--/.Content-->
    </div>
</div>
<!--Modal: Contact form-->