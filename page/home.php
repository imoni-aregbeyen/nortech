  <div class="bg-dark text-secondary py-5 text-center bg-img">
    <div class="container py-5">
      <h1 class="display-4 text-white"><?= strtoupper($hero_h) ?></h1>
      <div class="col-lg-10 mx-auto">
        <p class="lead text-white mb-4"><?= $hero_p ?></p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center">
          <a href="#contact-us" class="btn btn-outline-light btn-lg px-4 rounded-0">
            <span>GET STARTED</span> <span>&rarr;</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <section id="who-we-are" class="">
    <div class="container py-5">
      <h2 class="display-5">WHO WE ARE</h2>
      <div class="border-bottom border-5 mb-3" style="width:64px"></div>
      <div class="row">
        <div class="col-lg-8">
          <p class="lead">Nortech Digital is an indigenous Information Technology Company with an established team of skilled and highly trained professionals located in Kaduna State.</p>
          <p class="lead">Nortech Digital is a startup company in the business of Information Technology Solution such as web development and maintenance, software development, desktop application, graphic designs, consultancy and more.</p>
          <p class="lead">We undertake corporate offers in the line of procurement and installation of computer and computer accessories in line with the needs of different companies. We aim at providing exquisite and unheard services in the concept of web technology.</p>
        </div>
        <div class="col-lg-4">
          <video class="w-100 img-thumbnail" controls autoplay muted>
            <source src="../nortech/img/3d.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </section>

  <?php
  $services = get_data('services');
  ?>
  <section id="what-we-do" class="">
    <div class="container py-5">
      <h2 class="display-5">WHAT WE DO</h2>
      <div class="border-bottom border-5 mb-3" style="width:64px"></div>
      <div class="row">
        <?php foreach ($services as $service): ?>
        <div class="col-lg-4">
          <div class="btn card text-bg-dark mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $service['id'] ?>">
            <img src="../nortech/img/<?= $service['image'] ?>" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title display-6"><?= strtoupper($service['service']) ?></h5>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="contact-us" class="bg-green">
    <div class="container py-5">
      <h2 class="display-5">LET'S WORK ON YOUR PROJECT</h2>
      <div class="border-bottom border-5 border-primary" style="width:64px"></div>
      <p class="lead">Fill and send the following form and we will contact shortly</p>
      <form>
        <div class="row">
          <div class="col-lg">
            <div class="mb-3">
              <input name="name" type="text" class="form-control rounded-0 border border-4" placeholder="Your name" required>
            </div>
          </div>
          <div class="col-lg">
            <div class="mb-3">
              <input name="phone" type="tel" class="form-control rounded-0 border border-4" placeholder="Phone number" required>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <textarea name="work" placeholder="Project description" rows="4" class="form-control rounded-0 border border-4"></textarea>
        </div>
        <div class="d-flex justify-content-end d-lg-block">
          <button type="submit" class="btn btn-primary rounded-0 px-4">SEND</button>
        </div>
      </form>
    </div>
  </section>