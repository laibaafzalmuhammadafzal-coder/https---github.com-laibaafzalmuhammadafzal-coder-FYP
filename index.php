<?php include 'header.php'; ?>

    <!-- Carousel Start -->
<div class="container-fluid p-0">
    <div id="header-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            <!-- FIRST SLIDE -->
            <div class="carousel-item active">
                <img class="w-100" src="home1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white mb-3">Find Trusted Services Near You</h2>
                        <p class="text-white mb-4">Hire professionals or register as a service provider</p>

                        <!-- Buttons -->
                        <button class="btn btn-primary btn-lg me-2 " onclick="openForm('serviceForm')">
                            Hire a Service
                        </button>

                        <button class="btn btn-primary btn-lg" onclick="openForm('employeeForm')">
                            Register as Employee
                        </button>
                    </div>
                </div>
            </div>

            <!-- SECOND SLIDE (Same as original) -->
            <div class="carousel-item">
                <img class="w-100" src="home1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white mb-3">Find Trusted Services Near You</h2>
                        <p class="text-white mb-4">Hire professionals or register as a service provider</p>

                        <!-- Buttons -->
                        <button class="btn btn-primary btn-lg me-2 " onclick="openForm('serviceForm')">
                            Hire a Service
                        </button>

                        <button class="btn btn-primary btn-lg" onclick="openForm('employeeForm')">
                            Register as Employee
                        </button>
                    </div>
                </div>
            </div>

        
        <!-- Third SLIDE (Same as original) -->
            <div class="carousel-item">
                <img class="w-100" src="home1.jpg" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <h2 class="text-white mb-3">Find Trusted Services Near You</h2>
                        <p class="text-white mb-4">Hire professionals or register as a service provider</p>

                        <!-- Buttons -->
                        <button class="btn btn-primary me-2" data-bs-toggle="modal" data-bs-target="#serviceModal">Hire a Service</button>
                        <button class="btn btn-warning" data-bs-toggle="modal" data-bs-target="#employeeModal">Register as Employee</button>
                    </div>
                </div>
            </div>

        </div>

        <!-- CONTROLS -->
        <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-prev-icon mb-n2"></span>
            </div>
        </a>

        <a class="carousel-control-next" href="#header-carousel" data-slide="next">
            <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                <span class="carousel-control-next-icon mb-n2"></span>
            </div>
        </a>

    </div>
</div>


<!-- Bootstrap Modal: Hire a Service -->
<div class="modal fade" id="serviceModal" tabindex="-1" aria-labelledby="serviceModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="serviceModalLabel">Hire a Service</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" novalidate>
        <div class="modal-body">
          <div class="mb-3">
            <label for="serviceName" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="serviceName" placeholder="Enter your name" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="mb-3">
            <label for="serviceType" class="form-label">Service Needed</label>
            <input type="text" class="form-control" id="serviceType" placeholder="Type of service" required>
            <div class="invalid-feedback">Please specify the service you need.</div>
          </div>
          <div class="mb-3">
            <label for="serviceLocation" class="form-label">Location</label>
            <input type="text" class="form-control" id="serviceLocation" placeholder="Enter your location" required>
            <div class="invalid-feedback">Please enter your location.</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-primary">Submit Request</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Bootstrap Modal: Register as Employee -->
<div class="modal fade" id="employeeModal" tabindex="-1" aria-labelledby="employeeModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-warning text-dark">
        <h5 class="modal-title" id="employeeModalLabel">Register as Employee</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <form class="needs-validation" novalidate>
        <div class="modal-body">
          <div class="mb-3">
            <label for="employeeName" class="form-label">Your Name</label>
            <input type="text" class="form-control" id="employeeName" placeholder="Enter your name" required>
            <div class="invalid-feedback">Please enter your name.</div>
          </div>
          <div class="mb-3">
            <label for="employeeSkill" class="form-label">Skill / Profession</label>
            <input type="text" class="form-control" id="employeeSkill" placeholder="Your skill or profession" required>
            <div class="invalid-feedback">Please enter your skill.</div>
          </div>
          <div class="mb-3">
            <label for="employeeExperience" class="form-label">Experience (Years)</label>
            <input type="number" class="form-control" id="employeeExperience" placeholder="Number of years" min="0" required>
            <div class="invalid-feedback">Please enter your experience.</div>
          </div>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-warning">Register</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        </div>
      </form>
    </div>
  </div>
</div>



   





    <!-- Services Start -->
    <div class="container py-5  ">
        <div class="section-title text-center ">
                <h1 class="display-5 mb-5 text-dark">Our Services</h1>
            </div>

  <!-- ✅ ROW 1 -->
  <div class="row g-4 ">

    <div class="col-md-3">
      <div class="service-card ">
        <img src="cleaner.jpg">
        <div class="card-body">
          <h5 class="text-primarys">Home Cleaning</h5>
          <p class="text-muted small">Professional home cleaning service.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="service-card">
        <img src="plumber.jpg">
        <div class="card-body">
          <h5 class="text-primary">Plumbing</h5>
          <p class="text-muted small">All types of plumbing repairs.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="service-card">
        <img src="electrition.jpg">
        <div class="card-body">
          <h5 class="text-primary">Electrician</h5>
          <p class="text-muted small">Electrical wiring & installations.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="service-card">
        <img src="carmachanic.jpg">
        <div class="card-body">
          <h5 class="text-primary">Carmachanic</h5>
          <p class="text-muted small">AC repair & maintenance.</p>
        </div>
      </div>
    </div>

  </div>


  <!-- ✅ ROW 2 -->
  <div class="row g-4 mt-3">

    <div class="col-md-3">
      <div class="service-card">
        <img src="driver.jpg">
        <div class="card-body">
          <h5 class="text-primary">Driver</h5>
          <p class="text-muted small">Woodwork & furniture repair.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="service-card">
        <img src="baby.jpg">
        <div class="card-body">
          <h5 class="text-primary">Baby Sitter</h5>
          <p class="text-muted small">Professional home painting.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="service-card">
        <img src="cook.jpg">
        <div class="card-body">
          <h5 class="text-primary">Cooking & Catering</h5>
          <p class="text-muted small">Deep sofa & upholstery cleaning.</p>
        </div>
      </div>
    </div>

    <div class="col-md-3">
      <div class="service-card">
        <img src="pest.jpg">
        <div class="card-body">
          <h5 class="text-primary">Pest Control</h5>
          <p class="text-muted small">Safe & effective pest treatment.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="service-card">
        <img src="beutition.jpg">
        <div class="card-body">
          <h5 class="text-primary">Beautition</h5>
          <p class="text-muted small">Deep sofa & upholstery cleaning.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="service-card">
        <img src="security.jpg">
        <div class="card-body">
          <h5 class="text-primary">Security Gard</h5>
          <p class="text-muted small">Deep sofa & upholstery cleaning.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="service-card">
        <img src="tailor.jpg">
        <div class="card-body">
          <h5 class="text-primary">Tailor</h5>
          <p class="text-muted small">Deep sofa & upholstery cleaning.</p>
        </div>
      </div>
    </div>
    <div class="col-md-3">
      <div class="service-card">
        <img src="shifting.jpg">
        <div class="card-body">
          <h5 class="text-primary">Moving Crew</h5>
          <p class="text-muted small">Deep sofa & upholstery cleaning.</p>
        </div>
      </div>
    </div>
    
    
    

  </div>

</div>

    <!-- SERVICES End -->
<!-- About start -->
<div class="container-fluid py-5 ">
    <div class="container pt-0 pt-lg-4">
        <div class="row align-items-center">
            <div class="col-lg-5">
                <img class="img-fluid" src="choose.jpg" alt="" style="width: auto; height: 400px;">
            </div>
            <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                <h1 class=" text-dark mb-3">Learn About Us</h1>
                <h2 class="mb-4 text-primary  font-weight-medium">We Provide Reliable Home Services In Your City</h2>
                
                <p class="mb-2">
                     WorkHub is a trusted service platform offering verified company workers for all types of home services. Customers can easily book services, track tasks, and make secure payments.
                                        Our system ensures transparent pricing, fast response, and high-quality service delivery. Each worker is verified by our company, and tasks are assigned based on skill and availability. WorkHub makes home services simple, safe, and reliable for everyone.

                </p>
                <div class="row">
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">Verified Company Workers</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">Fast & Easy Booking</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">Real-Time Service Updates</p>
                        </div>
                    </div>
                    <div class="col-sm-6 pt-3">
                        <div class="d-flex align-items-center">
                            <i class="fa fa-check text-primary mr-2"></i>
                            <p class="text-dark font-weight-medium m-0">100% Customer Satisfaction</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> 
</div>
   
     


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h1 class="mb-4 text-dark">Why Choose Workhub?</h1>
                    <p>At <strong>WorkHub</strong> we connect you with trusted professionals for every home and office service. 
          From plumbing to cleaning and electrical repairs — our verified experts ensure quality, reliability, 
          and convenience, all at your fingertips.</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">10</h1>
                            <h5 class="font-weight-bold text-dark">Verified Professionals</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">250</h1>
                            <h5 class="font-weight-bold text-dark">Happy Customers</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">1250</h1>
                            <h5 class="font-weight-bold text-dark">Available Services</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-primary" data-toggle="counter-up">9550</h1>
                            <h5 class="font-weight-bold text-dark">Customer Support</h5>
                        </div>
                    </div>
                </div>
                <!-- Right Side - Image Box -->
      <div class="col-lg-5">
        <div class="position-relative h-100">
          <img 
            src="team" style="height: 300px;" width="auto";
            alt="WorkHub Professionals" 
            class="img-fluid rounded shadow-lg h-100 w-100 object-fit-cover"
          >
          
        </div>
</div>
        </div>
    </div>
    <!-- Features End -->


    <!-- WORKING PROCESS - WorkHub -->
<!-- HOW IT WORKS - WorkHub -->
<section class="py-5 bg-light">
  <div class="container text-center">
    <h1 class="mb-5 text-dark">How It Works</h1>
    
    <div class="row g-4">
      <!-- Step 1 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow text-white">
          <div class="card-body py-5">
            <h3 class="card-title mb-3 text-dark">Request a Service</h3>
            <p class="card-text text-primary">Select the service you need and book online in minutes.</p>
          </div>
        </div>
      </div>

      <!-- Step 2 -->
      <div class="col-lg-4 col-md-6">
        <div class="card h-100 border-0 shadow text-white" >
          <div class="card-body py-5">
            <h3 class="card-title mb-3 text-dark"> We Assign a Provider</h3>
            <p class="card-text text-primary">Our system finds the best available expert near you.</p>
          </div>
        </div>
      </div>

      <!-- Step 3 -->
      <div class="col-lg-4 col-md-6 mx-auto">
        <div class="card h-100 border-0 shadow text-white">
          <div class="card-body py-5">
            <h3 class="card-title mb-3 text-dark"> Service at Your Doorstep</h3>
            <p class="card-text text-primary">Provider comes to your location and completes the job.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- WORKING PROCESS END -->


    <!-- Pricing Plan Start -->
    
    <!-- Pricing Plan End -->


    <!-- Testimonial Start -->
   <!-- CLIENT TESTIMONIALS - WORKHUB -->
<div class="container-fluid py-5 bg-light">
  <div class="container">
    <h1 class="display-4 text-center mb-5 text-dark">What Our Clients Say</h1>
    
    <div class="owl-carousel testimonial-carousel">
      <!-- Testimonial 1 -->
      <div class="testimonial-item">
        <img class="position-relative rounded-circle bg-white shadow mx-auto" 
             src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=200&q=80" 
             style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="Client">
        <div class="bg-white text-center p-4 pt-0 rounded shadow-sm">
          <h5 class="font-weight-bold mt-5 text-dark">Ayesha Khan</h5>
          <p class="text-muted font-italic">Homeowner</p>
          <p class="m-0 text-primary">
            “WorkHub made it super easy to find a plumber the same day! 
            The worker was polite and professional. Highly recommended!”
          </p>
        </div>
      </div>

      <!-- Testimonial 2 -->
      <div class="testimonial-item">
        <img class="position-relative rounded-circle bg-white shadow mx-auto" 
             src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=200&q=80" 
             style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="Client">
        <div class="bg-white text-center p-4 pt-0 rounded shadow-sm">
          <h5 class="font-weight-bold mt-5 text-dark">Usman Raza</h5>
          <p class="text-muted font-italic">Office Manager</p>
          <p class="m-0 text-primary">
            “Booked an electrician through WorkHub — service was fast and reliable. 
            The platform is really easy to use!”
          </p>
        </div>
      </div>

      <!-- Testimonial 3 -->
      <div class="testimonial-item">
        <img class="position-relative rounded-circle bg-white shadow mx-auto" 
             src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?auto=format&fit=crop&w=200&q=80" 
             style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="Client">
        <div class="bg-white text-center p-4 pt-0 rounded shadow-sm">
          <h5 class="font-weight-bold mt-5 text-dark">Sara Malik</h5>
          <p class="text-muted font-italic">Apartment Resident</p>
          <p class="m-0 text-primary">
            “Loved the experience! I booked a cleaner through WorkHub — 
            she did a great job and I’ll definitely use it again.”
          </p>
        </div>
      </div>

      <!-- Testimonial 4 -->
      <div class="testimonial-item">
        <img class="position-relative rounded-circle bg-white shadow mx-auto" 
             src="https://images.unsplash.com/photo-1529626455594-4ff0802cfb7e?auto=format&fit=crop&w=200&q=80" 
             style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="Client">
        <div class="bg-white text-center p-4 pt-0 rounded shadow-sm">
          <h5 class="font-weight-bold mt-5 text-dark">Ali Ahmed</h5>
          <p class="text-muted font-italic">Restaurant Owner</p>
          <p class="m-0 text-primary">
            “Very professional workers! WorkHub helped me find reliable maintenance 
            staff for my restaurant. Great service!”
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- END TESTIMONIALS -->

    <!-- Testimonial End -->


    <!-- Blog Start -->
<!-- <div class="container-fluid mt-5 pb-2">
  <div class="container">
    <h1 class="display-5 text-center mb-5 text-dark">Latest Tips & Insights</h1>

    <div class="row">
      
      <div class="col-lg-4 mb-4">
        <div class="shadow rounded overflow-hidden bg-white">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/blog-1.jpg" alt="Home Cleaning Tips">
            <span class="position-absolute top-0 start-0 bg-warning text-dark px-3 py-1 small fw-bold">Cleaning</span>
          </div>
          <div class="p-4">
            <h5 class="fw-bold text-dark">Top 5 Tips for Keeping Your Home Clean</h5>
            <p class="text-muted small mb-3">
              <i class="fa fa-calendar text-warning"></i> Nov 10, 2025 
              &nbsp; | &nbsp; 
              <i class="fa fa-user text-warning"></i> WorkHub Team
            </p>
            <p class="text-primary">
              Learn quick and easy cleaning tricks from our professionals to keep your home spotless and fresh all week long.
            </p>
            <a href="#" class="btn btn-sm btn-warning text-dark fw-bold">Read More</a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-4 mb-4">
        <div class="shadow rounded overflow-hidden bg-white">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/blog-2.jpg" alt="Plumbing Maintenance">
            <span class="position-absolute top-0 start-0 bg-warning text-dark px-3 py-1 small fw-bold">Plumbing</span>
          </div>
          <div class="p-4">
            <h5 class="fw-bold text-dark">How to Avoid Common Plumbing Issues</h5>
            <p class="text-muted small mb-3">
              <i class="fa fa-calendar text-warning"></i> Oct 29, 2025 
              &nbsp; | &nbsp; 
              <i class="fa fa-user text-warning"></i> WorkHub Experts
            </p>
            <p class="text-primary">
              Save money and stress by learning simple preventive steps to keep your home’s plumbing in perfect shape.
            </p>
            <a href="#" class="btn btn-sm btn-warning text-dark fw-bold">Read More</a>
          </div>
        </div>
      </div>

      
      <div class="col-lg-4 mb-4">
        <div class="shadow rounded overflow-hidden bg-white">
          <div class="position-relative">
            <img class="img-fluid w-100" src="img/blog-3.jpg" alt="Home Service Safety">
            <span class="position-absolute top-0 start-0 bg-warning text-dark px-3 py-1 small fw-bold">Safety</span>
          </div>
          <div class="p-4">
            <h5 class="fw-bold text-dark">Safety First: How We Ensure Secure Services</h5>
            <p class="text-muted small mb-3">
              <i class="fa fa-calendar text-warning"></i> Oct 15, 2025 
              &nbsp; | &nbsp; 
              <i class="fa fa-user text-warning"></i> Admin
            </p>
            <p class="text-primary">
              At WorkHub, customer safety is our priority. Learn how our team verifies and monitors every professional.
            </p>
            <a href="#" class="btn btn-sm btn-warning text-dark fw-bold">Read More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
<!-- Blog End -->

   

<?php include 'footer.php'; ?>
   