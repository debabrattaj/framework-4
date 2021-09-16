<div class="col-md-6 bg-white order-md-3 pt-3">
              

        <div class="container pt-3">

        <div class="container">
            
            <h2 class="text-center pb-5"><?= esc($title) ?></h2>

         <h3 class="text-danger text-center pb-5 text-underline">Browse <a class="text-decoration-none" href="/private/jobs" alt="Browse private Jobs">Private Jobs</a> in India</h3>
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
                      <td><a href="/jobs/<?= esc($jobs_item['slug'], 'url') ?>">Apply</a></td>
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