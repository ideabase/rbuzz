<!DOCTYPE html>
<!-- Include Header.php -->
  <?php include("partials/header.html") ?>


      <main class="signup-page row clearfix">

         <div class="column row clearfix">
           <div class="row column clearfix">

             <div class="signup-text">
                 <h1>Connect with Reading Buzz Today!</h1>
                 </div>

                 <p class="small-12 small-offset-0 medium-10 medium-offset-1 columns clearfix">Have a question or interested in signing up? Connect with Reading Buzz today by sending an email to <a href="mailto:readingbuzz@gmail.com">readingbuzz@gmail.com</a>  or completing the form below.</p>
            </div>

             <div class="forms clearfix">
                <form action="action_page.php">
                  <div class="fname">
                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname">
                  </div>

                  <div class="lname">
                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname">
                  </div>

                  <div class="email">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email">
                  </div>

                  <label for="subject">Subject</label>
                  <input type="text" id="subject" name="subject">

                  <label for="message">Message</label>
                  <textarea type="text" rows="10" id="message" name="message"></textarea>

                  <div class="submit-form">
                    <input type="submit" value="Send">
                  </div>
                </form>
            </div>


      </main>


        <!-- Include Footer.html -->
        <?php include("partials/footer.html") ?>
