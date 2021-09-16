<div class="col-md-6 bg-white order-md-3 pt-3">
              

              <div class="container pt-3">
              <div class="container">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
            <h2 class="text-center"><strong><?= esc($title) ?></strong></h2>

                    <?= \Config\Services::validation()->listErrors() ?>

                    <form action="/jobs/create" method="post" >
                        <?= csrf_field() ?>

                        <label for="title">Job Title</label>
                        <input type="input" name="title" class="form-control" placeholder="Maximum 50 characters" /><br />

                        <label for="desc">Description</label>
                        <textarea name="description" id="input" placeholder="Max 115 characters....." class="form-control"></textarea><span id="count">0</span><br />
                        
                        <label for="min-qualification">Minimum qualification</label>
                        <textarea name="min-qualification" id="input" placeholder="Enter minimum qualification" class="form-control"></textarea>
                        
                        <label for="body">Job Details</label>
                        <textarea name="body" id="input" class="form-control"></textarea><br>
                       
                        <label for="vacancy">Vacancy</label>
                        <input type="number" name="vacancy" class="form-control"><br>
                        
                        <label for="date">Start date of Application</label>
                        <input type="date" name="sdate" class="form-control"> <br>

                        <label for="date">Last date of Application</label>
                        <input type="date" name="ldate" class="form-control"> <br>

                        <label for="application-fee">Application Fee</label>
                        <input type="number" name="application-fee" class="form-control"> <br>

                        <input type="submit" name="submit" class="form-control" value="Submit" />
                         
                    </form>
                    <script>
                        $("#input").on("input", function() {
                            $("#count").text(this.value.length);
                        });
                    </script>
            </div>                  
          </div>
        </div>