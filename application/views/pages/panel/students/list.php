<div class="main-wrapper">
  <?php $this->load->view('template/panel/navbar'); ?>
  <?php $this->load->view('template/panel/sidebar'); ?>

  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Siswa</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></div>
          <div class="breadcrumb-item">Siswa</div>
        </div>
      </div>

      <div class="section-body">
        <h2 class="section-title">Daftar List Siswa</h2>
        <div class="row">
          <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4><a href="<?= base_url('admin/students_add'); ?>" class="btn btn-outline-primary">+Tambah Data Siswa</a></h4>
              </div>
              <div class="card-body">
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">NIS</th>
                      <th scope="col">Nama Siswa</th>
                      <th scope="col">Jenis Kelamin</th>
                      <th scope="col">Kelas</th>
                      <th scope="col">Agama</th>
                      <th scope="col">Tgl Lahir</th>
                      <th scope="col">Tempat Lahir</th>
                      <th scope="col">Alamat</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php foreach($students->result() as $student){ ?>
                    <tr>
                      <td><?= $student->nis; ?></td>
                      <td><?= $student->nama; ?></td>
                      <td><?= $student->jenis_kelamin; ?></td>
                      <td><?= $student->kelas; ?></td>
                      <td><?= $student->agama; ?></td>
                      <td><?= $student->tgl_lahir; ?></td>
                      <td><?= $student->tempat_lahir; ?></td>
                      <td><?= $student->alamat; ?></td>
                      <td>
                        <a href="<?= base_url('admin/students/update/'); ?><?= $student->id; ?>" class="btn btn-success"><i class="fas fa-edit"></i></a>
                        <a href="<?= base_url('admin/students/delete/'); ?><?= $student->id; ?>" class="btn btn-danger" onclick="return confirm('Apa yakin ingin menghapus data?')"><i class="fas fa-trash"></i></a>
                      </td>
                    </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php $this->load->view('template/panel/copyright'); ?>
</div>