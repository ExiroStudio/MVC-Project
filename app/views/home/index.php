<header>
  <!-- Intro settings -->
  <style>
    /* Default height for small devices */
    #intro-example {
      height: 400px;
    }

    /* Height for devices larger than 992px */
    @media (min-width: 992px) {
      #intro-example {
        height: 600px;
      }
    }
  </style>


  <!-- Background image -->
  <div
    id="intro-example"
    class="p-5 text-center bg-image"
    style="background-image: url('<?= BASEURL;?>/img/bg.png');"
  >
    <div class="mask" style="background-color: rgba(0, 0, 0, 0.7);">
      <div class="d-flex justify-content-center align-items-center h-100">
        <div class="text-white">
          <h1 class="mb-3">Selamat Datang di website <?= $data['nama'];?></h1>
          <h5 class="mb-4">Anda berada di halaman pembelajaran ExiroInnovis tentang MVC</h5>
          
        </div>
      </div>
    </div>
  </div>
  <!-- Background image -->
</header>