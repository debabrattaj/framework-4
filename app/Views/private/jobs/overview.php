<div class="col-md-6 bg-white order-md-3 pt-3">
              

        <div class="container-fluid pt-3">

        <div class="container-fluid">
            

            <h2 class="font-weight-bold pb-3 text-center text-danger">Are you an employer? You can post your job for free!</h2>
            <div class="container pt-3 pb-3 text-center">
            <p class="font-weight-bold"><a class="text-center text-decoration-none" href="/private/jobs/create" alt="Register">Register </a> for free</p>     
            <p class="pt-1">
            <span>Already Registered? </span>
            <a class="btn btn-link text-center text-decoration-none" href="/private/jobs/create" alt="Login">Login</a> 

            </p>
          </div>

              <?php if (! empty($jobs) && is_array($jobs)) : ?>
                    <div class="table table-responsive">
                    <table class="table table-striped w-100">
                  <thead>
                    <tr>
                      <th class="text-left">Post name</th>
                      <th class="text-left">Qualification</th>
                      <th class="text-left">Vacancy </th>
                      <th class="text-left">Details</th>
                    </tr>
                  </thead>
                  <tbody>
                  <?php foreach ($jobs as $jobs_item): ?>
                    <tr>
                      <td><?= esc($jobs_item['title']) ?></td>
                      <td><?= esc($jobs_item['min-qualification']) ?></td>
                      <td><?= esc($jobs_item['vacancy']) ?></td>
                      <td><a class="text-decoration-none" href="/private/jobs/<?= esc($jobs_item['slug'], 'url') ?>">Apply</a></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table> 
                </div> 
            

              <?php else : ?>

                  <h3>No jobs</h3>

                  <p>Unable to find any jobs for you.</p>

              <?php endif ?>

            </div>
                  
               
        </div>

              
</div>