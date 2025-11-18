
     <!-- Footer Start -->
<div class="container-fluid bg-primary text-white mt-5 pt-5 px-sm-3 px-md-5">
    <div class="row pt-5">

        <!-- About WorkHub -->
        <div class="col-lg-3 col-md-6 mb-5">
            <a href="#"><h1 class="text-secondary mb-3"><span class="text-white">Work</span>Hub</h1></a>
            <p>WorkHub connects you with skilled and verified professionals for all your home service needs — fast, reliable, and affordable.</p>
            <div class="d-flex justify-content-start mt-4">
                <a class="btn btn-outline-light rounded-circle text-center me-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center me-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center me-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-linkedin-in"></i></a>
                <a class="btn btn-outline-light rounded-circle text-center me-2 px-0" style="width: 38px; height: 38px;" href="#"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

        <!-- Contact Info -->
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Get In Touch</h4>
            <p>Have a question or need support? We’re here to help you anytime.</p>
            <p><i class="fa fa-map-marker-alt me-2"></i>WorkHub HQ, Lahore, Pakistan</p>
            <p><i class="fa fa-phone-alt me-2"></i>+92 300 1234567</p>
            <p><i class="fa fa-envelope me-2"></i>support@workhub.com</p>
        </div>

        <!-- Quick Links -->
        <div class="col-lg-3 col-md-6 mb-5">
            <h4 class="text-white mb-4">Quick Links</h4>
            <div class="d-flex flex-column justify-content-start">
                <a class="text-white mb-2" href="index.html"><i class="fa fa-angle-right me-2"></i>Home</a>
                <a class="text-white mb-2" href="about.html"><i class="fa fa-angle-right me-2"></i>About Us</a>
                <a class="text-white mb-2" href="services.html"><i class="fa fa-angle-right me-2"></i>Services</a>
                <a class="text-white mb-2" href="team.html"><i class="fa fa-angle-right me-2"></i>Our Team</a>
                <a class="text-white" href="contact.html"><i class="fa fa-angle-right me-2"></i>Contact Us</a>
            </div>
        </div>
<!-- Top Services -->
<div class="col-lg-3 col-md-6 mb-5">
  <h4 class="text-white mb-4">Top Services</h4>
  <ul class="list-unstyled">
    <li class="mb-2"><strong>Home Cleaning</strong> - Fast and professional cleaning services.</li>
    <li class="mb-2"><strong>Plumbing</strong> - Expert plumbing solutions at your doorstep.</li>
    <li class="mb-2"><strong>Car Repair</strong> - Quick and reliable car maintenance.</li>
    <li class="mb-2"><strong>Babysitting</strong> - Trusted babysitters for your kids.</li>
  </ul>
</div>



<!-- Copyright -->
<div class="container-fluid bg-light text-white py-4 px-sm-3 px-md-5">
    <p class="m-0 text-center text-dark">
        &copy; <a class="text-dark fw-bold" href="#">WorkHub</a>. All Rights Reserved. 
        Designed by <a class="text-dark fw-bold" href="#">Laiba & Team</a>
    </p>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

     <!-- footer-end -->


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>



    <!-- Bootstrap JS Bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

<!-- Custom Script -->
<script>
function openForm(formId){
    const modal = new bootstrap.Modal(document.getElementById('authModal'));
    modal.show();
    document.getElementById('customerForm').style.display = (formId === 'customerForm') ? 'block' : 'none';
    document.getElementById('employeeForm').style.display = (formId === 'employeeForm') ? 'block' : 'none';
}

// Customer Password validation
document.getElementById('customerForm').addEventListener('submit', function(e){
    const pass = document.getElementById('custPassword').value;
    const confirm = document.getElementById('custConfirm').value;
    if(pass !== confirm){
        e.preventDefault();
        alert('Passwords do not match!');
    }
});

// Employee Password validation
document.getElementById('employeeForm').addEventListener('submit', function(e){
    const pass = document.getElementById('empPassword').value;
    const confirm = document.getElementById('empConfirm').value;
    if(pass !== confirm){
        e.preventDefault();
        alert('Passwords do not match!');
    }
});
</script>

</body>

</html>