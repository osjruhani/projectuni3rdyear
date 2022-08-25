
<?php include 'includes/header.php' ?>


    <section id="contact-us" style="height: 62vh;">
      <div class="container">
        <div class="row">
          <div class="col-12 section-intro">
            <h1>Contact Us</h1>
            <div class="hline"></div>
          </div>
        </div>
        <div class="row d-flex justify-content-center">
          <div class="col-8 ">
            <form action="https://formsubmit.co/f7ab7b04744004c29dd0c26899c2d3ab" method="POST">
              <div class="mb-3">
                <label for="full-name" class="form-label">Your Full-Name</label>
                <input type="text" class="form-control" name="full-name" required>
              </div>
              <div class="mb-3">
                <label for="message" class="form-label">Your Message</label>
                <textarea id="message" class="form-control" name="message" rows="4" required></textarea>
              </div>
              <button type="submit" class="btn btn-brand">Submit</button>
            </form>
          </div>
        </div>
      </div>
    </section>

<?php include 'includes/footer.php' ?>