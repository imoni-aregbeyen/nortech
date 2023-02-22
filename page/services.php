<?php
$services = get_data('services');
?>
  <section id="what-we-do">
    <div class="container py-5">
      <h2 class="display-5">OUR SERVICES</h2>
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


<?php foreach ($services as $service): ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $service['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $service['service'] ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?= $service['description'] ?>
      </div>
      
    </div>
  </div>
</div>
<?php endforeach; ?>