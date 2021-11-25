<!-- <div id="particles-js"> -->
<div class="container-fluid">

    <!-- Outer Row -->
    <div class="row my-4">
        <div class="col-lg-8">
            <div class="card o-hidden border-0 shadow-lg mb-4 my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="px-5 pb-3 pt-5">
                                <div class="text-center">
                                    <h1 class="h5 text-gray-900 mb-4"><b>PENCARIAN DATA SERTIFIKAT DAN PIAGAM PENGHARGAAN</b></h1>
                                </div>
                                <br>

                                <form method="get" action="<?= base_url('auth'); ?>" class="user">
                                    <div class="row">
                                        <div class="col-lg-11 pr-0">
                                            <div class="form-group ">
                                                <input name="keyword" type="text" class="form-control form-control-user" id="name" placeholder="Nama atau Nomor Identitas atau Nomor Sertifikat" value="<?= set_value('name'); ?>">
                                            </div>
                                        </div>
                                        <div class="col-lg-1 text-center pl-2">
                                            <button type="submit" class="btn btn-primary btn-user">
                                                <svg width="1.75em" height="1.75em" viewBox="0 0 16 16" class="bi bi-search" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M10.442 10.442a1 1 0 0 1 1.415 0l3.85 3.85a1 1 0 0 1-1.414 1.415l-3.85-3.85a1 1 0 0 1 0-1.415z" />
                                                    <path fill-rule="evenodd" d="M6.5 12a5.5 5.5 0 1 0 0-11 5.5 5.5 0 0 0 0 11zM13 6.5a6.5 6.5 0 1 1-13 0 6.5 6.5 0 0 1 13 0z" />
                                                </svg>
                                            </button>

                                        </div>
                                    </div>
                                </form>

                                <?php if ($isi == 0) { ?>
                                    <div class="alert alert-danger" role="alert">Data Tidak Ditemukan</div>
                                <?php } ?>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="px-5 pb-5">

                                <div class="table-responsive">
                                    <?php if ($detail) { ?>
                                        <table class="table table-bordered">
                                            <thead class="text-center">
                                                <tr>
                                                    <th width="1">No</th>
                                                    <th width="50px">Nomor</th>
                                                    <th>Nama</th>
                                                    <th width="20px">Detail</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $no = 1;
                                                foreach ($detail as $dtl) : ?>
                                                    <tr>
                                                        <td><?= $no++ ?></td>
                                                        <td><?= $dtl['no_sertifikat']; ?></td>
                                                        <td><?= $dtl['nama']; ?></td>
                                                        <td class="text-center">
                                                            <div class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal<?= $dtl['no_sertifikat']  ?>"><i class="fa fa-search-plus"></i></div>
                                                        </td>
                                                    </tr>

                                                    <div class="modal fade" id="modal<?= $dtl['no_sertifikat']  ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                        <div class="modal-dialog" style="width:380px">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalLabel">Detail Penerima Nomor</h5>
                                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body justify-content-center">
                                                                    <div class="">
                                                                        <span class="d-inline-block" style="width:135px">
                                                                            Nomor Sertifikat
                                                                        </span>
                                                                        : <?= $dtl['no_sertifikat']; ?>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="d-inline-block" style="width:135px">
                                                                            Nama Penerima
                                                                        </span>
                                                                        : <?= $dtl['nama']; ?>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="d-inline-block" style="width:135px">
                                                                            Nama Kegiatan
                                                                        </span>
                                                                        : <?= $dtl['nama_kegiatan']; ?>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="d-inline-block" style="width:135px">
                                                                            Penyelenggara
                                                                        </span>
                                                                        : <?= $dtl['penyelenggara']; ?>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="d-inline-block" style="width:135px">
                                                                            Tanggal Kegiatan
                                                                        </span>
                                                                        : <?= $dtl['tanggal_kegiatan']; ?>
                                                                    </div>
                                                                    <div class="">
                                                                        <span class="d-inline-block" style="width:135px">
                                                                            Tanggal Terbit
                                                                        </span>
                                                                        : <?= $dtl['tgl_terbit']; ?>
                                                                    </div>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                <?php endforeach; ?>
                                            </tbody>
                                        </table>
                                    <?php } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">

                        <div class="col-lg">
                            <div class="p-5">
                                <div class="text-center">
                                    <img src="<?= base_url('assets/img/logo/logo.png') ?>" alt="" height="80px" style="margin-bottom: 10px;">
                                </div>
                                <div class="text-center">
                                    <h1 class="h5 text-gray-900 mb-4"><b>PENOMORAN SERTIFIKAT DAN PIAGAM PENGHARGAAN</b></h1>
                                </div>
                                <br>

                                <?= $this->session->flashdata('message');  ?>

                                <form method="post" action="<?= base_url('auth'); ?>" class="user">
                                    <div class="form-group">
                                        <input name="name" type="text" class="form-control form-control-user" id="name" placeholder="Email" value="<?= set_value('name'); ?>">
                                        <?= form_error('name', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <div class="form-group">
                                        <input name="password" type="password" class="form-control form-control-user" id="password" placeholder="Password">
                                        <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-user btn-block">
                                        Login
                                    </button>
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a data-toggle="modal" data-target="#modelId" style="cursor: pointer;">Lupa Password?</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

</div>
<!-- </div> -->

<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Lupa Password</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body pb-5">
                <div class="container-fluid">
                    <div class="text-center">
                        <p>Silahkan Hubungi Kantor PUSDIKLAT</p>
                        <p>Bapak Umar Zaky :<a target="_blank"  href="https://wa.link/xyr61w"> +62 857-4320-0650</a> </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>