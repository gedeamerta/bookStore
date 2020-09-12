<div class="container">
    <div class="row">

        <!-- Left Card Start  -->
        <div class="col-lg-8">
            <?php if ($data['book']) : ?>
                <?php foreach ($data['book'] as $book) : ?>
                    <div class="shadow mt-5">
                        <div class="row">
                            <div class="col-md">
                                <img src="<?= baseurl . '/assets/img/' . $book['image']?>" alt="" srcset="">
                            </div>
                            <div class="col-md-7 m-3">
                                <h2 class="card-title"><?= $book['judul_buku'] ?></h2>
                                <p class="card-text mb-0">
                                    <svg width="23" height="21" viewBox="0 0 23 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M11.5 1.61804L13.6064 8.10081L13.7186 8.4463H14.0819H20.8983L15.3837 12.4529L15.0898 12.6664L15.2021 13.0119L17.3085 19.4947L11.7939 15.4881L11.5 15.2746L11.2061 15.4881L5.69153 19.4947L7.79791 13.0119L7.91017 12.6664L7.61627 12.4529L2.10169 8.4463H8.91809H9.28136L9.39362 8.10081L11.5 1.61804Z" fill="#FFE601" stroke="#FFE601" />
                                    </svg>

                                    <?= $book['rating'] ?></p>
                                <footer class="blockquote-footer"><?= $book['fullname'] ?></footer>

                                <h2 class="card-title mb-0">Sipnosis</h2>
                                <p class="text-muted mt-2"><?= substr($book['sipnosis'], 0, 35) . "...";  ?></p>
                                <a href="<?= baseurl; ?>/home/bookData/<?= $book['id']; ?>" class="btn btn-info">Cek
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.793 8 8.146 5.354a.5.5 0 0 1 0-.708z" />
                                        <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5H11a.5.5 0 0 1 0 1H4.5A.5.5 0 0 1 4 8z" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>
        <!-- End Left Card -->

        <!-- Right Card -->
        <div class="col-lg-4">
            <form class="form-inline mt-5">
                <i class="fas fa-search" aria-hidden="true"></i>
                <input class="form-control form-control-sm ml-3 w-75" type="text" placeholder="Search" aria-label="Search">
            </form>
            <!-- Gugel Maps Start -->
            <div class="shadow p-3 mt-3">
                <p style="color: #999; margin-bottom: 2px; margin-left: 3px;">Google Maps</p>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5143504265466!2d115.15277281436634!3d-8.64253219027644!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd238904731e53b%3A0x750539b5dbc116c6!2sWarung%20Juanda!5e0!3m2!1sid!2sid!4v1597081772608!5m2!1sid!2sid" width="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
            <!-- Gugel Maps End -->

            <div class="row">
                <div class="col">
                    <button type="button" class="btn btn-outline-warning mt-3">NEW</button>

                    <?php foreach ($data['book_limit'] as $book) : ?>
                        <div class="mt-3 shadow rounded">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="card" style="width: auto;">
                                        <img src="<?= baseurl.'/assets/img/'. $book['image']?>" class="card-img-top" alt="...">
                                    </div>
                                </div>
                                <div class="col-md m-3">
                                    <h3 class="card-title"><?= $book['judul_buku'] ?></h2>
                                        <footer class="blockquote-footer mb-3">Ary Pradnya</footer>

                                        <h3 class="card-title">Sipnosis</h2>
                                            <p class="text-muted"><?= substr($book['sipnosis'], 0, 35) . "..." ?></p>
                                            <button type="button" class="btn btn-info mb-3">Check <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-arrow-right-short" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M8.146 4.646a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708-.708L10.793 8 8.146 5.354a.5.5 0 0 1 0-.708z" />
                                                    <path fill-rule="evenodd" d="M4 8a.5.5 0 0 1 .5-.5H11a.5.5 0 0 1 0 1H4.5A.5.5 0 0 1 4 8z" />
                                                </svg>
                                            </button>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        <!--  End Right Card -->
    </div>
</div>