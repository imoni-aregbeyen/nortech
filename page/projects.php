<?php
$projects = get_data('project');
?>
  <section id="what-we-do">
    <div class="container py-5">
      <h2 class="display-5">OUR PROJECTS</h2>
      <div class="border-bottom border-5 mb-3" style="width:64px"></div>
      <div class="row">
        <?php foreach ($projects as $project): ?>
        <div class="col-lg-4">
          <div class="btn card text-bg-dark mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal<?= $project['id'] ?>">
            <img src="img/kelly-sikkema.jpg" class="card-img" alt="...">
            <div class="card-img-overlay">
              <h5 class="card-title display-6"><?= strtoupper($project['name']) ?></h5>
              <p class="lead"><?= $project['services'] ?></p>
            </div>
          </div>
        </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>


<?php foreach ($projects as $project): ?>
<!-- Modal -->
<div class="modal fade" id="exampleModal<?= $project['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"><?= $project['name'] ?></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <p class="lead">Service: <?= $project['services'] ?></p>
        <p class="lead">Location: <?= $project['location'] ?></p>
        <?php if ($project['domain'] != 'N/A'): ?>
        Domain: <a href="<?= $project['domain'] ?>" class="" target="_blank"><?= strtolower($project['domain']) ?></a>
        <?php endif; ?>
      </div>
      
    </div>
  </div>
</div>
<?php endforeach; ?>