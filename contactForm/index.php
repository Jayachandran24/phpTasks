<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <section class="p-5">
      <h1 class="text-center p-3">Contact Us</h1>
      <form method="post" action="mailto.php">
        <div class="row p-2">
          <div class="col">
            <label for="firstname">First Name</label>
            <input
              type="text"
              class="form-control"
              placeholder="Enter Your First name"
              id="fname"
              name="fname"
            />
          </div>
          <div class="col">
            <label for="Email">Email</label>
            <input
              type="email"
              class="form-control"
              placeholder="Enter Your Email"
              id="email"
              name="email"
            />
          </div>
        </div>
        <div class="row p-2">
          <div class="col">
            <label for="phonenumber">Phone Number</label>
            <input
              type="number"
              class="form-control"
              placeholder="Enter Your Phone Number"
              id="number"
              name="number"
            />
          </div>
          <div class="col">
            <label for="Message">Message</label>
            <textarea class="form-control" id="message" rows="3" name="message"></textarea>
          </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-1">
            <button
              class="button rounded-2 px-4 py-2 bg-success text-white"
              type="submit"
              value="submit"
            >
              Submit
            </button>
          </div>
        </div>
      </form>
    </section>
  </body>
</html>
