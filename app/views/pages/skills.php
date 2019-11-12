<?php require PATH_APP . '/views/inc/header.php'; ?>
<p><?php echo $data['title'];?></p>
<div class="container py-5">

<div class="row text-center text-white mb-5">
    <div class="col-lg-7 mx-auto">
      <h1 class="display-4">Skills list</h1>
      <p class="lead mb-0">Selecciona la skill que quieres para tu Bot.</p>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-8 mx-auto">

      <!-- List group-->
      <ul class="list-group shadow">
    <?php foreach($data['Skills'] as $skill): ?>
        <!-- list group item-->
        <li class="list-group-item">
          <!-- Custom content-->
          <div class="media align-items-lg-center flex-column flex-lg-row p-3">
            <div class="media-body order-2 order-lg-1">
              <h5 class="mt-0 font-weight-bold mb-2"><?php echo $skill->name; ?></h5>
              <p class="font-italic text-muted mb-0 small">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Suscipit fuga autem maiores necessitatibus.</p>
              <div class="d-flex align-items-center justify-content-between mt-1">
                <h6 class="font-weight-bold my-2"><?php echo $skill->price; ?></h6>
                <ul class="list-inline small">
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star text-success"></i></li>
                  <li class="list-inline-item m-0"><i class="fa fa-star-o text-gray"></i></li>
                </ul>
              </div>
            </div><img src="https://res.cloudinary.com/mhmd/image/upload/v1556485076/shoes-1_gthops.jpg" alt="Generic placeholder image" width="200" class="ml-lg-5 order-1 order-lg-2">
          </div>
          <!-- End -->
        </li>
        <!-- End -->
    <?php endforeach; ?>
    </ul>
      <!-- End -->
    </div>
  </div>
</div>

<?php require PATH_APP . '/views/inc/footer.php'; ?>
