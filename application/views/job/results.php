    <header class="header-result">
            <div class="header-content">
            <div class="header-content-inner">
                <h1>Find Jobs</h1>
                <hr>
                <p>Search jobs across multiple websites!</p>
                   
                    <!-- <============================> -->
                    <!-- SEARCH FORM -->

                    <form action="<?php echo site_url('job/search');?>" method="post">
                        <div class="form-group col-md-4 col-md-offset-4">
                            <input type="text" class="form-control" id="searchtext" name="Keywords" placeholder="Find Jobs">
                        </div>
                    </form>

                    <!-- <============================> -->

            </div>
        </div>
    </header>

    

<section>
        <div class="container">
           
            <div class="col-lg-12 text-center">
                    <h2 class="section-heading">SEARCH RESULTS for '<?php echo $keyword;?>'!</h2>
                    <hr class="primary">
            </div> 

            <!-- JOBSNEPAL TABLE -->
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>SN.</th>
                    <th>Job Title</th>
                    <th>Company</th>
                </tr>
               
                 <h2><a href="http://jobsnepal.com">JobsNepal.com</a></h2>
                <?php
                foreach($job_matches1[3] as $key=>$value){
                ?>
               
                <tr>
                    <td> <?php echo $key+1;?> </td>
                    <td><a href="<?php echo $job_matches1[2][$key];?>"><?php echo $value; ?></a></td>
                    <td><a href="<?php echo $job_matches1[2][$key];?>"><?php echo $comp_matches1[2][$key];?></a></td>
                </tr>
            
                <?php
                }
                ?>
            </table>  

            <!-- RAMROJOB TABLE -->
            <table class="table table-hover table-striped table-bordered">
                <tr>
                    <th>SN.</th>
                    <th>Job Title</th>
                    <th>Company</th>
                </tr>

                <h2><a href="http://ramrojob.com">RamroJob.com</a></h2>
                <?php
                foreach($job_matches2[2] as $key=>$value){
                ?>
               
                <tr>
                    <td> <?php echo $key+1;?> </td>
                    <td><a href="<?php echo $job_matches2[1][$key];?>"><?php echo $value; ?></a></td>
                    <td><a href="<?php echo $comp_matches2[1][$key];?>"><?php echo $comp_matches2[2][$key];?></a></td>
                </tr>

                <?php
                }
                ?>
            </table>

        </div>

      
       
         <div class="text-center">
            <a href="javascript:void(0);" id="btn-sub" class="btn btn-primary btn-lg">SUBSCRIBE</a>
            <br/>
            <p id="writing"> Get mails according to your keywords searched, periodically! </p>
            <form id="sub-form" action="<?php echo site_url('job/subscribe');?>" method="post">
                <div class="form-group col-md-4 col-md-offset-4">
                <input class="form-control" type="email" name="useremail" id="useremail" placeholder="Enter your email address">
                <input type="hidden" name="keyword" value="<?php echo $keyword;?>">
                </div>
              
                <div class="form-group col-md-4 col-md-offset-4">
                <input type="submit" id="submit-btn" class="btn btn-info brn-sm" name="submit" value="submit">
                </div>
            </form>
            <br/>
           
            <br/>
        </div>
    </section>


