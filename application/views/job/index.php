    <header>
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

    
   <section id="contact">
       
        <div class="col-lg-8 col-lg-offset-2 text-center">
            <h2 class="section-heading">Contact Us!</h2>
            <hr class="primary">
        </div>
        <div class="container">
            <div class="row">
               
                    <form action="<?php echo site_url('job/contact');?>" method="post" class="col-md-4 col-md-offset-4">  
                   
                    <div class="form-group">
                        <label>Email:</label> 
                        <input type="email" name="email" class="form-control" placeholder="Email address"> 
                    </div>
                    
                    <div class="form-group">
                        <label>Subject:</label> 
                        <input type="text" name="subject" class="form-control" placeholder="Subject"> 
                    </div>
                
                    <div class="form-group">
                        <label>Message:</label> 
                        <textarea class="form-control" name="message" placeholder="Message" rows="5"></textarea>
                    </div>
                    <div class="form-group">
                        <input class="form-control btn-primary" type="submit" name="submit" value="Send">
                    </div>
                </form>
            
        </div>
       
    </section>
