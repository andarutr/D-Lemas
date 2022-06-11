<div class="main-wrapper">
  <?php $this->load->view('template/panel/navbar'); ?>
  <?php $this->load->view('template/panel/sidebar'); ?>

  <!-- Main Content -->
  <div class="main-content">
    <section class="section">
      <div class="section-header">
        <h1>Update Data Siswa</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="<?= base_url('admin/dashboard'); ?>">Dashboard</a></div>
          <div class="breadcrumb-item">Update Data Siswa</div>
        </div>
      </div>
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-md-6 col-lg-12">
            <div class="card">
              <div class="card-header">
                <h4>Update Data Siswa</h4>
              </div>
              <?php foreach($student->result() as $siswa){ ?>
              <?= form_open_multipart('admin/students/update/'.$siswa->id);?>
              <div class="card-body">
                <div class="form-group">
                  <label>Nama Siswa</label>
                  <input type="text" class="form-control" name="nama" value="<?= $siswa->nama; ?>">
                  <p class="text-danger"><?php echo form_error('nama'); ?></p>
                </div>
                <div class="form-group">
                  <label>NIS</label>
                  <input type="text" class="form-control" name="nis" value="<?= $siswa->nis; ?>">
                  <p class="text-danger"><?php echo form_error('nis'); ?></p>
                </div>
                <div class="form-group">
                  <label>Jenis Kelamin</label>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Pria">
                    <label class="form-check-label" for="jenis_kelamin">
                      Pria
                    </label>
                  </div>
                  <div class="form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_kelamin" value="Wanita">
                    <label class="form-check-label" for="jenis_kelamin">
                      Wanita
                    </label>
                  </div>
                  <p class="text-danger"><?php echo form_error('jenis_kelamin'); ?></p>
                </div>
                <div class="form-group">
                  <label>Agama</label>
                  <select class="form-control" name="agama">
                    <option value="<?= $siswa->agama; ?>"><?= $siswa->agama; ?></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Budha">Budha</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Konghucu">Konghucu</option>
                  </select>
                  <p class="text-danger"><?php echo form_error('agama'); ?></p>
                </div>
                <div class="form-group">
                  <label>Kelas</label>
                  <input type="text" class="form-control" name="kelas" value="<?= $siswa->kelas; ?>">
                  <p class="text-danger"><?php echo form_error('kelas'); ?></p>
                </div>
                <div class="form-group">
                  <label>Tgl Lahir</label>
                  <input type="text" class="form-control" name="tgl_lahir" value="<?= $siswa->tgl_lahir; ?>">
                  <p class="text-danger"><?php echo form_error('tgl_lahir'); ?></p>
                </div>
                <div class="form-group">
                  <label>Tempat Lahir</label>
                  <input type="text" class="form-control" name="tempat_lahir" value="<?= $siswa->tempat_lahir; ?>">
                  <p class="text-danger"><?php echo form_error('tempat_lahir'); ?></p>
                </div>
                <div class="form-group">
                  <label>Alamat</label>
                  <input type="text" class="form-control" name="alamat" value="<?= $siswa->alamat; ?>">
                  <p class="text-danger"><?php echo form_error('alamat'); ?></p>
                </div>
                <button type="submit" class="btn btn-success">Update</button>
              </div>
              <?= form_close(); ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <?php $this->load->view('template/panel/copyright'); ?>
</div>