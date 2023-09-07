<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Form</title>
    <link
      href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css"
      rel="stylesheet"
    />
    <style>
      body {
        margin: 0;
        padding: 0;
        font-family: Arial, sans-serif;
        background-image: url("/Assignment1/CSS/cover.jpg");
        background-size: cover;
      }

      .container {
        max-width: 600px;
        margin: 0 auto;
        padding: 40px 20px;

        border-radius: 10px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
      }

      .form-container {
        text-align: center;
      }

      .form-icon {
        font-size: 36px;
        color: #3498db;
        margin-bottom: 20px;
      }

      .form-input,
      .form-inputs {
        width: 100%;
        padding: 12px;
        margin-bottom: 20px;
        border: 1px solid #ccc;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
      }

      .form-inputs {
        transition: border-color 0.3s;
      }

      .form-inputs:focus {
        border-color: #3498db;
      }

      .form-button {
        background-color: #3498db;
        color: #fff;
        border: none;
        border-radius: 4px;
        padding: 12px 24px;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
      }

      .form-button:hover {
        background-color: #2980b9;
      }

      .navbar {
        margin-bottom: 40px;
        background-color: #fff;
        border-bottom: 1px solid #ccc;
        padding: 10px 0;
        text-align: center;
        font-size: 24px;
      }

      .navbar .nav-container {
        display: flex;
        justify-content: center;
        align-items: center;
        gap: 15px;
      }

      .navbar a {
        color: #000;
        text-decoration: none;
        transition: color 0.3s;
      }

      .navbar a:hover {
        color: #ff5e3a;
      }
      .box {
        display: flex;
        margin:40px;
      }
      .box-center{
        align-items: center;
        justify-content: center;
        display: flex;
      }
      #table-container {
    background-color: #f4f4f4;
    width: 800px;
    margin: 0 auto;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    overflow-x: auto;
}

#table-container table {
    width: 100%;
    border-collapse: collapse;
}

#table-container table th, #table-container table td {
    padding: 10px; /* Adjust cell padding as needed */
    border: 1px solid #ccc;
}

#table-container table th {
    background-color: #3498db;
    color: #fff;
}

#table-container table tr:nth-child(even) {
    background-color: #f2f2f2; /* Alternate row background color */
}

#table-container table th, #table-container table td {
    width: 40%; /* Set the width of table cells */
}
    </style>
  </head>
  <body>
    <?php include 'navbar.html'; ?>
    <div class="container">
      <div class="form-container">
        <div class="form-icon">
          <i class="bx bx-user"></i>
        </div>
        <h2>Enter Student Details</h2>
        <form action="studentprocess.php" method="POST" autocomplete="off">
          <input class="form-input" type="text" name="fullname" placeholder="Full Name" />
          <input
            class="form-input"
            type="text"
            name="StudentId"
            placeholder="Student ID / Roll Number"
          />
          <input
            class="form-inputs"
            placeholder="Date Of Birth"
            type="text"
            name="dob"
            onfocus="(this.type='date')"
            onblur="(this.type='text')"
            id="date"
          />
          <input class="form-input" type="number" name="phone" placeholder="Phone" />
          <input class="form-input" type="email" name="email" placeholder="Email Address" />
          <input class="form-input" type="text" name="program" placeholder="Program" />
          <input class="form-input" type="text" name="dept" placeholder="Department Name" />
          <input class="form-input" type="text" name="major" placeholder="Specialization" />
          <input class="form-input" type="number" name="year" placeholder="Year of Study" />
          <input class="form-input" type="number" name="totcredit" placeholder="Total Credit" />
          <button class="form-button" type="submit">Submit</button>
        </form>
      </div>
    </div>
    
    
  </body>
</html>
