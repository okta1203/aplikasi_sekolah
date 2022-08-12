<!DOCTYPE html>
<html lang="en">

<head>
    <?php $this->load->view('admin/components/header');?>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">

        <!-- Preloader -->
        <div class="preloader flex-column justify-content-center align-items-center">
            <img class="animation__shake" src="<?= base_url();?>assets/admin_lte/dist/img/AdminLTELogo.png"
                alt="AdminLTELogo" height="60" width="60">
        </div>

        <!-- Navbar -->
        <?php $this->load->view('admin/components/navbar');?>
        <!-- /.navbar -->

        <!-- Main Sidebar Container -->

        <?php $this->load->view('admin/components/sidebar');?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Data Siswa</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Siswa</li>
                            </ol>
                        </div><!-- /.col -->
                        <button type="button" class="btn btn-primary ml-2 mt-3" data-toggle="modal"
                            data-target="#tambah">
                            Tambah Siswa
                        </button>
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12">

                            <!-- /.card -->

                            <div class="card">

                                <!-- /.card-header -->
                                <div class="card-body">
                                    <table id="example1" class="table table-bordered table-striped">
                                        <thead>
                                            <tr>
                                                <th>No</th>
                                                <th>Id User</th>
                                                <th>Username</th>
                                                <th>Email</th>
                                                <th>Password</th>
                                                <th>Id User Level</th>
                                                <th>Id User Detail</th>
                                                <th>Nama Lengkap</th>
                                                <th>Alamat</th>
                                                <th>Tempat Lahir</th>
                                                <th>Tanggal Lahir</th>
                                                <th>Agama</th>
                                                <th>NIK</th>
                                                <th>Jenis Kelamin</th>
                                                <th>NIDN</th>
                                                <th>SKHUN</th>
                                                <th>Ijazah</th>
                                                <th>Foto</th>
                                                <th>Kelas</th>
                                                <th>Nilai IPa</th>
                                                <th>Nilai IPS</th>
                                                <th>Nilai Matematika</th>
                                                <th>Nilai Bahasa Inggris</th>
                                                <th>Nilai Bahasa indonesia</th>
                                                <th>Id Lulus Verifikasi</th>
                                                <th>Id Status Lulus</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                        $no = 0;
                                        foreach($siswa as $i)
                                        :
                                        $no++;
                                        $id_user = $i['id_user'];
                                        $username = $i['username'];
                                        $email = $i['email'];
                                        $password = $i['password'];
                                        $id_user_level = $i['id_user_level'];
                                        $id_user_detail = $i['id_user_detail'];
                                        $nama_lengkap = $i['nama_lengkap'];
                                        $alamat = $i['alamat'];
                                        $tempat_lahir = $i['tempat_lahir'];
                                        $tanggal_lahir = $i['tanggal_lahir'];
                                        $agama = $i['agama'];
                                        $nik = $i['nik'];
                                        $jenis_kelamin = $i['jenis_kelamin'];
                                        $nidn = $i['nidn'];
                                        $skhun = $i['skhun'];
                                        $ijazah = $i['ijazah'];
                                        $foto = $i['foto'];
                                        $kelas = $i['kelas'];
                                        $nilai_ipa = $i['nilai_ipa'];
                                        $nilai_ips = $i['nilai_ips'];
                                        $nilai_matematika = $i['nilai_matematika'];
                                        $nilai_bahasa_inggris= $i['nilai_bahasa_inggris'];
                                        $nilai_bahasa_indonesia = $i['nilai_bahasa_indonesia'];
                                        $id_status_verifikasi = $i['id_status_verifikasi'];
                                        $id_status_lulus = $i['id_status_lulus'];
                                        ?>
                                            <tr>
                                                <td><?=$no?></td>
                                                <td><?=$id_user?></td>
                                                </td><?=$username?></td>
                                                <td><?=$email?></td>
                                                <td><?=$password?></td>
                                                <td><?=$id_user_level?></td>
                                                <td><?=$id_user_detail?></td>
                                                <td><?=$nama_lengkap?></td>
                                                <td><?=$alamat?></td>
                                                </td><?=$tempat_lahir?></td>
                                                <td><?=$tanggal_lahir?></td>
                                                <td><?=$agama?></td>
                                                <td><?=$nik?></td>
                                                <td><?=$jenis_kelamin?></td>
                                                <td><?=$nidn?></td>
                                                <td><?=$skhun?></td>
                                                <td><?=$ijazah?></td>
                                                <td><?=$foto?></td>
                                                <td><?=$kelas?></td>
                                                <td><?=$nilai_ipa?></td>
                                                <td><?=$nilai_ips?></td>
                                                </td><?=$nilai_matematika?></td>
                                                <td><?=$nilai_bahasa_inggris?></td>
                                                <td><?=$nilai_bahasa_indonesia?></td>
                                                <td><?=$id_status_verifikasi?></td>
                                                <td><?=$id_status_lulus?></td>
                                                <td>aksi</td>
                                                <td>
                                                <td>
                                                <td>
                                                    <div class="table-renponsive">
                                                        <div class="table table-striped table-hove">
                                                            <a type="button" class="btn btn-primary" data-toggle="modal"
                                                                data-target="#edit">
                                                                Edit <i class="fas fa-edit"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <div class="table-renponsive">
                                                        <div class="table table-striped table-hove">
                                                            <a type="button" class="btn btn-danger" data-toggle="modal"
                                                                data-target="#hapus">
                                                                Hapus <i class="fas fa-trash"></i>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </td>

                                            </tr>
                                            <!-- Modal Edit Siswa -->
                                            <div class="modal fade" id="edit" tabindex="-1"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel">Edit Siswa
                                                            </h5>
                                                            <button type="button" class="close" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form action="<?=base_url();?>Data_siswa/edit_siswa"
                                                                enctype="multipart/form-data" method="POST">
                                                                <div class="form-group">
                                                                    <label for="username">Username</label>
                                                                    <input type="text" class="form-control"
                                                                        id="username" name="username"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="email">Email</label>
                                                                    <textarea class="form-control" id="email"
                                                                        name="email" rows="3" required></textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="password">Password</label>
                                                                    <input type="file" class="form-control"
                                                                        id="password" name="password"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nama_lengkap">Nama Lengkap</label>
                                                                    <input type="date" class="form-control"
                                                                        id="nama_lengkap" name="nama_lengkap"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="alamat">Alamat</label>
                                                                    <input type="text" class="form-control" id="alamat"
                                                                        name="alamat" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tempat_lahir">Tempat Lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tempat_lahir" name="tempat_lahir"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="tanggal_lahir">Tanggal Lahir</label>
                                                                    <input type="text" class="form-control"
                                                                        id="tanggal_lahir" name="tanggal_lahir"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="agama">Agama</label>
                                                                    <input type="text" class="form-control" id="agama"
                                                                        name="agama" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nik">Nik</label>
                                                                    <input type="text" class="form-control" id="nik"
                                                                        name="nik" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="jenis_kelamin">Jenis Kelamin</label>
                                                                    <input type="text" class="form-control"
                                                                        id="jenis_kelamin" name="jenis kelamin"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nidn">Nidn</label>
                                                                    <input type="text" class="form-control" id="nidn"
                                                                        name="nidn" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="skhun">Skhun</label>
                                                                    <input type="text" class="form-control" id="skhun"
                                                                        name="skhun" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="ijazah">Ijazah</label>
                                                                    <input type="text" class="form-control" id="ijazah"
                                                                        name="ijazah" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="foto">Foto</label>
                                                                    <input type="text" class="form-control" id="foto"
                                                                        name="foto" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="kelas">Kelas</label>
                                                                    <input type="text" class="form-control" id="kelas"
                                                                        name="kelas" aria-describedby="emailHelp"
                                                                        required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nilai_ipa">Nilai Ipa</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nilai_ipa" name="nilai_ipa"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nilai_ips">Nilai Ips</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nilai_ips" name="nilai_ips"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nilai_matematika">Nilai
                                                                        Matematika</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nilai_matematika" name="nilai_matematika"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nilai_bahasa_inggris">Nilai Bahasa
                                                                        Inggris</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nilai_bahasa_inggris"
                                                                        name="nilai_bahasa_inggris"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>
                                                                <div class="form-group">
                                                                    <label for="nilai_bahasa_indonesia">Nilai Bahasa
                                                                        Indonesia</label>
                                                                    <input type="text" class="form-control"
                                                                        id="nilai_bahasa_indonesia"
                                                                        name="nilai_bahasa_indonesia"
                                                                        aria-describedby="emailHelp" required>

                                                                </div>

                                                                    <input type="text" class="<?=$id_user?>"
                                                                        data-dismiss="foto_siswa_old" hidden>
                                                                    <button type="button" class="<?=$id_user?>">
                                                                       name="id_siswa" hidden>

                                                                          <button type="submit"
                                                                class="btn btn-primary">Submit</butto>
                                                                </form>
                                                            
                                                        </div>
                                                    </div>
                                                </div> <!-- Modal Hapus Siswa -->
                                                <div class="modal fade" id="hapus" tabindex="-1"
                                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h5 class="modal-title" id="exampleModalLabel">Hapus
                                                                    Siswa
                                                                </h5>
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                            </div>
                                                            <div class="modal-body">
                                                                <form action="<?=base_url();?>Data_Siswa/hapus_siswa"
                                                                    enctype="multipart/form-data" method="POST">
                                                                    <div class="row">
                                                                        <div class="col">
                                                                            <input type="text" name="id_siswa"
                                                                                value="<?=$id_siswa?>" hidden>
                                                                            <input type="text" name="foto_siswa_old"
                                                                                value="<?=$foto_siwa?>" hidden>
                                                                            <p>Apakah kamu yakin ingin menghapus data
                                                                                ini?</i><b></p>
                                                                        </div>
                                                                    </div>
                                                                    <div class="modal-footer">
                                                                        <button type="button" class="btn btn-secondary"
                                                                            data-dismiss="modal">Close</button>
                                                                        <button type="button"
                                                                            class="btn btn-primary">Save
                                                                            changes</button>
                                                                    </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <?php endforeach;?>
                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.card-body -->
                            </div>
                            <!-- /.card -->
                        </div>
                        <!-- Modal Tambah siswa -->
                        <div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Tambah Siswa
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="<?=base_url();?>Data_siswa/tambah_siswa"
                                            enctype="multipart/form-data" method="POST">
                                            <div class="form-group">
                                                <label for="username">Username</label>
                                                <input type="text" class="form-control" id="username" name="username"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <textarea class="form-control" id="email" name="email" rows="3"
                                                    required></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="file" class="form-control" id="password" name="password"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nama_lengkap">Nama Lengkap</label>
                                                <input type="date" class="form-control" id="nama_lengkap"
                                                    name="nama_lengkap" aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="alamat">Alamat</label>
                                                <input type="text" class="form-control" id="alamat" name="alamat"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="tempat_lahir">Tempat Lahir</label>
                                                <input type="text" class="form-control" id="tempat_lahir"
                                                    name="tempat_lahir" aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                                <input type="text" class="form-control" id="tanggal_lahir"
                                                    name="tanggal_lahir" aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="agama">Agama</label>
                                                <input type="text" class="form-control" id="agama" name="agama"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nik">Nik</label>
                                                <input type="text" class="form-control" id="nik" name="nik"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                                <input type="text" class="form-control" id="jenis_kelamin"
                                                    name="jenis kelamin" aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nidn">Nidn</label>
                                                <input type="text" class="form-control" id="nidn" name="nidn"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="skhun">Skhun</label>
                                                <input type="text" class="form-control" id="skhun" name="skhun"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="ijazah">Ijazah</label>
                                                <input type="text" class="form-control" id="ijazah" name="ijazah"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="foto">Foto</label>
                                                <input type="text" class="form-control" id="foto" name="foto"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="kelas">Kelas</label>
                                                <input type="text" class="form-control" id="kelas" name="kelas"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_ipa">Nilai Ipa</label>
                                                <input type="text" class="form-control" id="nilai_ipa" name="nilai_ipa"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_ips">Nilai Ips</label>
                                                <input type="text" class="form-control" id="nilai_ips" name="nilai_ips"
                                                    aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_matematika">Nilai Matematika</label>
                                                <input type="text" class="form-control" id="nilai_matematika"
                                                    name="nilai_matematika" aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_bahasa_inggris">Nilai Bahasa Inggris</label>
                                                <input type="text" class="form-control" id="nilai_bahasa_inggris"
                                                    name="nilai_bahasa_inggris" aria-describedby="emailHelp" required>

                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_bahasa_indonesia">Nilai Bahasa Indonesia</label>
                                                <input type="text" class="form-control" id="nilai_bahasa_indonesia"
                                                    name="nilai_bahasa_indonesia" aria-describedby="emailHelp" required>

                                            </div>

                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>

                                </div>
                            </div>
                            <!-- /.col -->
                        </div>
                        <!-- /.row -->
                    </div>
                    <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <footer class="main-footer">
            <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong>
            All rights reserved.
            <div class="float-right d-none d-sm-inline-block">
                <b>Version</b> 3.2.0
            </div>
        </footer>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    <?php $this->load->view('admin/components/js');?>
</body>

</html>