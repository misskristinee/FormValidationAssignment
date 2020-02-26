<html>
    <form action="valid.php" method="POST" style="width: 500px; margin: auto">
        <div class="navbar navbar-expand-sm navbar-light bg-light justify-content-around"><h2>Sign Up Form</h2></div>
        <div class="row">
            <div class="col">
                <div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" name="firstname" id="firstname" class="form-control" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="lastname">Last Name</label>
                    <input type="text" name="lastname" id="lastname" class="form-control" required>
                </div>
            </div>
            <div class="col">
                <div class="form-group">
                    <label for="middlename">Middle Name</label>
                    <input type="text" name="middlename" id="middlename" class="form-control" required>
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="address">Address</label>
            <input type="text" name="address" id="address" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="dob">Date of Birth</label>
            <input type="date" name="dob" id="dob" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="pob">Place of Birth</label>
            <input type="text" name="pob" id="pob" class="form-control" required>
        </div>
        <div class="form-group">
            <span>Gender</span> <br>
            <input type="radio" name="gender" id="male" value="male" required>
            <label for="male" class="form-check-label">Male</label>
            <input type="radio" name="gender" id="female" value="female">
            <label for="female" class="form-check-label">Female</label required>
        </div>
        <div class="form-group">
            <label for="guardian">Guardian</label>
            <input type="text" name="guardian" id="guardian" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="contact">Contact Number</label>
            <input type="text" name="contact" id="contact" class="form-control" placeholder="+63xxxxxxxxxx" required>
        </div>
        <div class="form-group">
            <label for="status">Civil Status</label>
            <input type="text" name="status" id="status" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="year">Year Level</label>
            <select name="year" id="year" class="form-control">
                <option value="" disabled selected>Select One</option>
                <option value="first">First Year</option>
                <option value="second">Second Year</option>
                <option value="third">Third Year</option>
                <option value="fourth">Fourth Year</option>
            </select>
        </div>
        <div class="form-group">
            <label for="course">Course</label>
            <select name="course" id="course" class="form-control">
                <option value="" disabled selected>Select One</option>
                <option value="BSIT">BSIT</option>
                <option value="BSTCM">BSTCM</option>
                <option value="BSCpE">BSCpE</option>
                <option value="BSDS">BSDS</option>
            </select>
        </div>
        <div class="form-group">
            <label for="sy">School Year</label>
            <input type="text" name="sy" id="sy" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-primary form-control btn-light">Register</button>
        </div>
    </form>
</html>