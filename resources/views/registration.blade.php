<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Test</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

label {
  margin-top: 25px;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

/* Mark the active step: */
.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #04AA6D;
}

button{
  margin-top: 20px;
}
    </style>
</head>
<body>
    <div class="container">
      <div class="card border" style="width: 100%">
        <div class="card-body">
        <form id="regForm" action="">

            <h1>Register:</h1>
            
            <!-- One "tab" for each step in the form: -->
            <div class="tab">
              <h3 class="mb-3">Personal Information</h3>
              <div class="row">
              <div class="col-md-4">
                <label for="" class="form-label">Full Name</label>
                <input type="text" name="name" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">NRC Number</label>
                <input type="text" name="nrc" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Date of Birth</label>
                <input type="text" name="dob" id="" class="form-control mb-5" required>
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label for="" class="form-label">Email</label>
                <input type="email" name="email" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Phone Number</label>
                <input type="number" name="phone" id="" class="form-control mb-5" required>
              </div>
              <div class="col-md-4">
                <label for="" class="form-label">Facebook Link</label>
                <input type="text" name="profile" id="" class="form-control mb-5">
              </div>
            </div>

            <div class="row">
              <div class="col-md-3">
                <label for="" class="form-label">Address</label>
                <input type="text" name="address" id="" class="form-control mb-5">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">City</label>
                <input type="text" name="city" id="" class="form-control mb-5">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">State or Divison</label>
                <input type="text" name="state" id="" class="form-control mb-5">
              </div>
              <div class="col-md-3">
                <label for="" class="form-label">Country</label>
                <input type="text" name="country" id="" class="form-control mb-5">
              </div>
            </div>

            <div class="row">
              <div class="col-md-4">
                <label for="" class="form-label">Race</label><br>
                <input type="radio" name="race" id="">
                <label for="">Myanmar</label><br>
                <input type="radio" name="race" id="">
                <label for="">Other</label>
              </div>
              
              <div class="col-md-4">
                <label for="" class="form-label">Marital Status</label><br>
                <input type="radio" name="marital_sts" id="">
                <label for="">Married</label><br>
                <input type="radio" name="marital_sts" id="">
                <label for="">Single</label><br>
                <input type="radio" name="marital_sts" id="">
                <label for="">Other</label>
              </div>

              <div class="col-md-4">
                <label >Gender</label><br>
                <input type="radio" name="gender" id="">
                <label for="">Male</label><br>
                <input type="radio" name="gender" id="">
                <label for="">Female</label><br>
                <input type="radio" name="gender" id="">
                <label for="">Other</label>
              </div>
            </div>
          </div>
            
            <div class="tab">
              
            </div>
            
            <div class="tab">
              
            </div>
            
            <div class="tab">
              
            </div>
            
            <div class="row">
            <div style="overflow:auto;">
              <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)" class="btn btn-dark">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)" class="btn btn-dark">Next</button>
              </div>
            </div>
          </div>
            
            <!-- Circles which indicates the steps of the form: -->
            <div style="text-align:center;margin-top:40px;">
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
              <span class="step"></span>
            </div>
            
            </form>
          </div>
    </div>
    </div>

    <script>
      var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  // ... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  // ... and run a function that displays the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  // if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form... :
  if (currentTab >= x.length) {
    //...the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

// function validateForm() {
//   // This function deals with validation of the form fields
//   var x, y, i, valid = true;
//   x = document.getElementsByClassName("tab");
//   y = x[currentTab].getElementsByTagName("input");
//   // A loop that checks every input field in the current tab:
//   for (i = 0; i < y.length; i++) {
//     // If a field is empty...
//     if (y[i].value == "") {
//       // add an "invalid" class to the field:
//       y[i].className += " invalid";
//       // and set the current valid status to false:
//       valid = false;
//     }
//   }
//   // If the valid status is true, mark the step as finished and valid:
//   if (valid) {
//     document.getElementsByClassName("step")[currentTab].className += " finish";
//   }
//   return valid; // return the valid status
// }

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class to the current step:
  x[n].className += " active";
}
    </script>
</body>
</html>