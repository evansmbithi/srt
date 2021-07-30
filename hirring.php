
  <div class="hero-wrap js-fullheight" style="background-image: url('<?php echo web_root; ?>plugins/jobportal/images/bg_2.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start" data-scrollax-parent="true">
          <div class="col-md-8 ftco-animate text-center text-md-left mb-5" data-scrollax=" properties: { translateY: '70%' }">
            <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-3"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Recent Posts</span></p>
            <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Recent Posts</h1>
          </div>
        </div>
      </div>
    </div>

<section class="ftco-section bg-light">
            <div class="container">
    
                <div class="row">

                  <?php

                        $sql = "select * from tblusers";
                        $fetch = mysqli_query($con,$sql);
                        While($row=mysqli_fetch_array($fetch)){

                            ?>



          <div class="col-md-12 ftco-animate">

            <div class="job-post-item bg-white p-4 d-block d-md-flex align-items-center">

              <div class="mb-4 mb-md-0 mr-5">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3"><?php echo $row['model'] ?></h2>
                  <div class="badge-wrap">
                   <span class="<?php if($row['status']!=''){echo 'bg-success';}else{echo 'bg-danger';} ?> text-white badge py-2 px-3"><?php if($row['status']==''){echo 'Pending';}else{echo $row['status'];} ?></span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $row['firstName'].' '.$row['lastName'] ?></a></div>
                  <div><span class="icon-my_location"></span> <span><?php echo $row['address'] ?></span></div>
                </div>
              </div>

              <div class="ml-auto d-flex">
                <!-- <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>&view=personalinfo" class="btn btn-primary py-2 mr-1">Apply Job</a> -->
                <img style="display: block; max-width: 15rem; height: 10rem;" src="img/listing_img3.jpg" class="img-responsive" alt="Image">
              </div>
            </div>
          </div><!-- end -->
 <?php } ?>
         
         </div>

<!--Paging-->
          <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> 
            </div>
        </section>




 