                        <div class="col-lg-13 p-lg-7">
                            <!-- Basic Card Example -->
                            <div class="card shadow mb-5">
                                <div class="card-header py-5">
                                    <h6 class="m-0 font-weight-bold text-secondary text-center" style="font-size: xx-large;">Selamat Datang <?= $_SESSION['nama'] ?> (<?= $_SESSION['level'] ?>)</h6>
                                </div>

                                <?php if ($_SESSION['level']=="Admin") { ?>
                                <div class="card-body text-center">
                                    Software ini dibuat bertujuan untuk mengelola berbagai macam proses dalam kegiatan yang berkaitan erat dengan Sistem Informasi Manajemen (SIM) dan Database. Terutama pada software aplikasi ini yang sudah menerapkan fungsi pengimplementasian CRUD (Create, Read, Update dan Delete) yang memudahkan dalam setiap aktivitasnya.
                                </div>
                                <?php } ?>
                            </div>
                        </div>