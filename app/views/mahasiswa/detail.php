<div class="card text-center " style="background-color:#ffffff;width:25%;margin-left:35%;">
  <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
    <img src="https://mdbootstrap.com/img/new/avatars/8.jpg" class="img-fluid" />
    <a href="#!">
      <div class="mask" style="background-color: rgba(251, 251, 251, 0.15)"></div>
    </a>
  </div>
  <div class="card-header"><?= $data['mhs']['nama']?></div>
  <div class="card-body">
    <h5 class="card-title"><?= $data['mhs']['pekerjaan']?></h5>
    <p class="card-text">
    <?= $data['mhs']['perusahaan']?>
    </p>
    <a href="<?= BASEURL?>/mahasiswa">
        <button type="button" class="btn btn-primary">Back</button>
    </a>
  </div>
</div>