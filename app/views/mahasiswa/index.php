<h1 class="display-3 text-center" style="font-weight:bold;">Daftar Pekerja</h1>
<div class="row">
  <div class="col-lg-6">
    <?php Flasher::flash(); ?>
  </div>
</div>
<div class="row mb-3">
  <div class="col-lg-6">
    <form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Cari mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" autocomplete="off">
        <button class="btn btn-primary" type="submit" id="tombolCari">Search</button>
      </div>
    </form>
  </div>
</div>
<table class="table align-middle mb-0 bg-white">
  <thead class="bg-light">
    <tr>
      <th>Name</th>
      <th>Title</th>
      <th>Status</th>
      <th>Position</th>
      <th>Actions</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($data['mhs'] as $mhs) : ?>
      <tr>
        <td>
          <div class="d-flex align-items-center">
            <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" alt="" style="width: 45px; height: 45px" class="rounded-circle" />
            <div class="ms-3">
              <p class="fw-bold mb-1"><?= $mhs['nama']; ?></p>
              <p class="text-muted mb-0"><?= $mhs['email']; ?></p>
            </div>
          </div>
        </td>
        <td>
          <p class="fw-normal mb-1"><?= $mhs['pekerjaan']; ?></p>
          <p class="text-muted mb-0"><?= $mhs['perusahaan']; ?></p>
        </td>
        <td>
          <?php
          if ($mhs['status'] == "active") {
            echo '<span class="badge badge-success rounded-pill d-inline">' . $mhs['status'] . '</span>';
          } else {
            echo '<span class="badge badge-danger rounded-pill d-inline">' . $mhs['status'] . '</span>';
          }
          ?>
        </td>
        <td><?= $mhs['posisi']; ?></td>
        <td>
          <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>">
            <button type="button" class="btn btn-link btn-sm btn-rounded">
              Detail
            </button>
          </a>
          <button data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#tambahData" type="button" class="btn btn-link btn-sm btn-rounded edit" data-id="<?= $mhs['id'] ?>">
            Edit
          </button>
        </td>
        <td>
          <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>">
            <button type="submit" class="btn btn-danger" data-mdb-ripple-init>Delete</button>
          </a>
        </td>
      </tr>
    <?php endforeach; ?>

  </tbody>

</table>

<a class="tambah" href="#">
  <div data-mdb-ripple-init data-mdb-modal-init data-mdb-target="#tambahData" class="text-center" style="height: 90px;width:100%;background-color:rgba(0,100,150,0.2);font-size:60px;">
    +</div>
</a>

<div class="modal fade" id="tambahData" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalLabel">Tambah Data</h5>
        <button type="button" class="btn-close" data-mdb-ripple-init data-mdb-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL ?>/mahasiswa/tambah" method="post">
          <input type="hidden" name="id" id="id">
          <div class="row mb-4">
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="text" id="nama" class="form-control" name="nama" />
                <label class="form-label" for="form6Example1">Nama</label>
              </div>
            </div>
            <div class="col">
              <div data-mdb-input-init class="form-outline">
                <input type="text" id="pekerjaan" class="form-control" name="pekerjaan" />
                <label class="form-label" for="form6Example2">Pekerjaan</label>
              </div>
            </div>
          </div>

          <!-- Text input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="perusahaan" class="form-control" name="perusahaan" />
            <label class="form-label" for="form6Example3">Perusahaan</label>
          </div>

          <!-- Text input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="email" id="email" class="form-control" name="email" />
            <label class="form-label" for="form6Example4">Email</label>
          </div>

          <!-- Email input -->
          <div data-mdb-input-init class="form-outline mb-4">
            <input type="text" id="posisi" class="form-control" name="posisi" />
            <label class="form-label" for="form6Example5">Posisi</label>
          </div>
          <!-- Default radio -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="radio1" value="active" checked />
            <label class="form-check-label" for="flexRadioDefault1"> active </label>
          </div>

          <!-- Default checked radio -->
          <div class="form-check">
            <input class="form-check-input" type="radio" name="status" id="radio2" value="inactive" />
            <label class="form-check-label" for="flexRadioDefault2"> inactive </label>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-mdb-ripple-init data-mdb-dismiss="modal">Kembali</button>
        <button type="submit" class="btn btn-primary" data-mdb-ripple-init>Tambah</button>
        </form>
      </div>
    </div>
  </div>
</div>