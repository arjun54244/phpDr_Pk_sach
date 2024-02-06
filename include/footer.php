<?php 
include("connection.php")
?>
<footer>
      <section class="footer-bg">
         <div class="footer-area">
            <div class="container">
               <div class="footer-grid b-b">
                  <div class="footer-widget-2 footer-col-1">
                     <div class="footer-logo mb-35">
                        <a href="index.html">
                           <img src="assets/imgs/logo/logo-white.svg" alt="image bnot found">
                        </a>
                     </div>
                     <p>It helps designers plan out where the content will sit, the content to be written and approved.
                     </p>
                     <div>
                        <div class="newsletter__input">
                           <form action="#" method="post">
                              <div class="input-wrapper mb-20 p-relative">
                                 <input type="email" name="news_email" placeholder="Enter Email Address" required>
                                 <button class="footer-round-btn" type="submit" name="news_letter"><i
                                       class="fa-regular fa-paper-plane"></i></button>
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="footer-widget-2 footer-col-2">
                     <div class="footer-widget-title">
                        <h4>Resources</h4>
                     </div>
                     <div class="footer-link">
                        <ul>
                           <li><a href="#">My enquiry list</a></li>
                           <li><a href="#">FAQ</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Testimonial</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="footer-widget-2 footer-col-3">
                     <div class="footer-widget-title">
                        <h4>Company</h4>
                     </div>
                     <div class="footer-link">
                        <ul>
                           <li><a href="#">Home</a></li>
                           <li><a href="#">About Us</a></li>
                           <li><a href="#">How its work</a></li>
                           <li><a href="#">Pages</a></li>
                           <li><a href="#">Blog</a></li>
                           <li><a href="#">Contact us</a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="footer-widget-2 footer-col-4">
                     <div class="footer-widget-title">
                        <h4>Social</h4>
                     </div>
                     <div class="theme-social">
                        <a href="https://www.facebook.com/profile.php?id=100093133420853"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-twitter"></i></a>
                        <a href="https://www.linkedin.com/company/dr-p-k-sachdeva-neurosurgeon/?viewAsMember=true"><i class="fa-brands fa-linkedin-in"></i></a>
                        <a href="https://www.instagram.com/dr.p.ksachdeva/"><i class="fa-brands fa-instagram"></i></a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="footer-copyright-area">
            <div class="container">
               
            <div class="footer-copyright-wrapper">
                  <div class="footer-copyright-text">
                     <p class="mb-0">© All Copyright 2023 by <a target="_blank" href="#">DOGRI</a></p>
                  </div>
                  <div class="footer-conditions">
                     <ul>
                        <li><a href="#">Terms & Condition</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </section>
   </footer>
   <?php 
   if(isset($_POST['news_letter'])){
      $news_email = $_POST['news_email'];
      $news_sql = "INSERT INTO `emails`(`email`) VALUES ('$news_email')";
      try {
          mysqli_query($conn, $news_sql);
      }catch(mysqli_sql_exception){
          echo "Email already exists.";
      }
  }
   ?>