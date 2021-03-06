<!-- Modal -->
<div class="modal fade" id="Registration" tabindex="-1" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-xl">
    <div class="modal-content rounded-corner">
      <div class="modal-header rounded-corner">
        <h5 class="modal-title">Enter Student Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form align="center" method="POST" action="" enctype="multipart/form-data" style="color:white;">
          <div class="row">

            <div class="col-lg-4">
              <label for="recipient-name" class="col-form-label">Select Course</label>
              <select style="color:white" class="form-control" name="CourseID" id="CourseID" required="">
                <option value="">Select</option>
                <?php 
                $query ="SELECT * FROM courses";
                $result = mysqli_query($con, $query);
                if (mysqli_num_rows($result)>0){
                  while($row=mysqli_fetch_assoc($result)){
                    echo '<option value="'.$row['CourseID'].'">'.$row['Course'].'</option>';
                  }}?>
                </select>
              </div>

              <div class="col-lg-4">
                <label for="recipient-name" class="col-form-label">Select Branch</label>
                <select style="color:white" class="form-control" name="BranchID" id="BranchID" required="">
                  <option value="">Select</option>
                </select>
              </div>

              <div class="col-lg-4">
                <label for="recipient-name" class="col-form-label">Student Name</label>
                <input style="color:white" style="color:white" type="text" class="form-control" name="StudentName">
              </div>

              <div class="col-lg-4">
                <label for="recipient-name" class="col-form-label">Father's Name</label>
                <input style="color:white" type="text" class="form-control" name="Father" required="">
              </div>            

              <div class="col-lg-4">
                <label for="recipient-name" class="col-form-label">Mother's Name</label>
                <input style="color:white" type="text" class="form-control" name="Mother" required="">
              </div>
              <div class="col-lg-4">
                <br>
                <label for="recipient-name" class="col-form-label" style="margin-right: 10px;">Gender: </label>
                
                <input style="color:white; margin: 10px;" class="form-check-input" type="radio" name="Gender" id="Gender" value="Male" required="">
                <label class="form-check-label" for="flexRadioDefault1">
                  Male
                </label>
                <input style="color:white; margin: 10px;" class="form-check-input" type="radio" name="Gender" id="Gender" value="Female">
                <label class="form-check-label" for="flexRadioDefault2">
                  Female
                </label>
              </div>
              <div class="col-lg-4">
                <br><br>
                <input class="form-check-input" type="checkbox" name="lateral" value="1" style="margin-right:10px">
                <label class="form-check-label" for="inlineFormCheck">
                  Lateral Entry
                </label>

              </div>

              <div class="col-lg-4">
                <label for="recipient-name" class="col-form-label">AADHAR Card Number</label>
                <input style="color:white" type="number" class="form-control" name="Aadhar" min="0" required="" maxlength="12" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
              </div>
              <div class="col-lg-4">
                <label for="recipient-name" class="col-form-label">Mobile Number</label>
                <input style="color:white" type="number" class="form-control" name="Mobile" min="0" required="" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
              </div>
              <div class="col-lg-4">
                <label for="recipient-name" class="col-form-label">Address</label>
                <input style="color:white" style="color:white" type="text" class="form-control" name="Address">
              </div>

              <div class="col-lg-4" align="center">
                <label for="recipient-name" class="col-form-label">Upload Image</label>
                <input style="color:white" style="color:white" type="file" class="form-control" name = "image" / required="">
                <br>
              </div>
              <div class="col-lg-4" align="center">
                <label for="recipient-name" class="col-form-label">Course Amount</label>
                <input style="color:white" min="0" type="number" class="form-control" name="Amount" required>
                <br>
              </div>
              <div class="col-lg-12" align="center">
                <label for="recipient-name" class="col-form-label">Remark</label>
                <textarea type="text" maxlength="450" row="3" class="form-control" name="Remark" style="color:white"  required></textarea>
              </div>

            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

              <button type="submit" class="btn btn-primary" name="SaveStudent">Save</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>


  <div class="modal fade" id="AddStaff" tabindex="-1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-xl">
      <div class="modal-content rounded-corner">
        <div class="modal-header rounded-corner">
          <h5 class="modal-title">Enter Staff Details</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form align="center" method="POST" action="" enctype="multipart/form-data">
            <div class="row">
              <div class="col-lg-3">
                <label for="recipient-name" class="col-form-label">Select Course</label>
                <select style="color:white" class="form-control" name="CIDAddStaff" id="CIDAddStaff" required="">
                  <option value="">Select</option>
                  <?php 
                  $query ="SELECT * FROM courses";
                  $result = mysqli_query($con, $query);
                  if (mysqli_num_rows($result)>0){
                    while($row=mysqli_fetch_assoc($result)){
                      echo '<option value="'.$row['CourseID'].'">'.$row['Course'].'</option>';
                    }}?>
                  </select>
                </div>

                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Select Branch</label>
                  <select style="color:white" class="form-control" name="BIDAddStaff" id="BIDAddStaff" required="">
                    <option value="">Select</option>
                  </select>
                </div>

                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Name</label>
                  <input style="color:white" type="text" class="form-control" name="StaffName" required>
                </div>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">AADHAAR Card Number</label>
                  <input style="color:white" type="number" class="form-control" name="StaffAadhar" required min="0" maxlength="12" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);">
                </div>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Salary Amount</label>
                  <input style="color:white" type="number" class="form-control" name="SalaryAmount" required min="0" maxlength="16">
                </div>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Gender:</label>
                  <br>
                  <div class="form-check form-check-inline">
                    <input style="color:white" class="form-check-input" type="radio" name="Gender" value="Male" required>
                    <label class="form-check-label" for="flexRadioDefault1">
                      Male
                    </label>
                  </div>
                  <div class="form-check form-check-inline">
                    <input style="color:white" class="form-check-input" type="radio" name="Gender" value="Female">
                    <label class="form-check-label" for="flexRadioDefault2">
                      Female
                    </label>
                  </div>
                </div>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Mobile Number</label>
                  <input style="color:white" type="text" class="form-control" name="StaffNumber" maxlength="10" oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" required>
                </div>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Email</label>
                  <input style="color:white" type="email" class="form-control" name="StaffEmail" required>
                </div>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Address</label>
                  <input style="color:white" type="text" class="form-control" name="StaffAddress" required>
                </div>
                <div class="col-lg-6">
                  <label for="recipient-name" class="col-form-label">Educational Details</label>
                  <textarea style="color:white" class="form-control" name="StaffEducation" required></textarea>
                </div>
                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Upload Resume</label>
                  <input style="color:white" type="file" class="form-control" name = "Resume" />
                </div>   
              </div>
              <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="SaveStaff">Save</button>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="AddSalary" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-corner">
          <div class="modal-header rounded-corner">
            <h5 class="modal-title">Release Salary</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form align="center" id="SalaryForm">
              <div class="row">

                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Select Course</label>
                  <select style="color:white" class="form-control" name="CIDAddSalary" id="CIDAddSalary" required="">
                    <option value="">Select</option>
                    <?php 
                    $query ="SELECT * FROM courses";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result)>0){
                      while($row=mysqli_fetch_assoc($result)){
                        echo '<option value="'.$row['CourseID'].'">'.$row['Course'].'</option>';
                      }}?>
                    </select>
                  </div>

                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Select Branch</label>
                    <select style="color:white" class="form-control" name="BIDAddSalary" id="BIDAddSalary" required="">
                      <option value="">Select</option>
                    </select>
                  </div>

                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Select Staff</label>
                    <select style="color:white" class="form-control" id="StaffIDS">
                      <option value="">Select</option>
                    </select>
                  </div> 
                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Salary Amount</label>
                    <input style="color:white; background-color:black;" type="text" class="form-control" id="SalaryAmount" min="0" disabled="">
                  </div>
                  <!--
                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Enter Amount</label>
                    <input style="color:white" type="number" class="form-control" id="Salary" min="0">
                  </div>  
                -->
              </form>
            </div>
            <div class="table-responsive" style="margin:20px;">
              <table class="table table-hover table-bordered border-primary table-light">
                <thead>
                  <th>Salary Amount</th>
                  <th>Month</th>
                  <th>Pending Amount</th>
                  <th>Release Amount</th>
                  <th>Action</th>
                </thead>
                <tbody id="SalaryData">

                </tbody>
              </table>
            </div>
            <div class="modal-footer">
              <button type="reset" class="btn btn-secondary cl" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal fade" id="Coordinator" tabindex="-1" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered modal-lg">
        <div class="modal-content rounded-corner">
          <div class="modal-header rounded-corner">
            <h5 class="modal-title">Add Coordinator for Branches</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <form align="center" id="CoordinatorForm">
              <div class="row">

                <div class="col-lg-3">
                  <label for="recipient-name" class="col-form-label">Select Course</label>
                  <select style="color:white" class="form-control" name="CODAddCourse" id="CODAddCourse" required="">
                    <option value="">Select</option>
                    <?php 
                    $query ="SELECT * FROM courses";
                    $result = mysqli_query($con, $query);
                    if (mysqli_num_rows($result)>0){
                      while($row=mysqli_fetch_assoc($result)){
                        echo '<option value="'.$row['CourseID'].'">'.$row['Course'].'</option>';
                      }}?>
                    </select>
                  </div>

                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Select Branch</label>
                    <select style="color:white" class="form-control" name="CODAddBanch" id="CODAddBanch" required="">
                      <option value="">Select</option>
                    </select>
                  </div>

                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Select Staff</label>
                    <select style="color:white" class="form-control" id="StaffIDCOD">
                      <option value="">Select</option>
                    </select>
                  </div> 
                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Select Year</label>
                    <select style="color:white" class="form-control" id="CODYear" disabled>
                      <option value="">Select</option>
                      <option value="1">1</option>
                      <option value="2">2</option>
                      <option value="3">3</option>
                      <option value="4">4</option>
                    </select>
                  </div> 
                </form>
              </div>

              <div class="modal-footer">
                <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="modal fade" id="AddFees" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl">
          <div class="modal-content rounded-corner">
            <div class="modal-header rounded-corner">
              <h5 class="modal-title">Enter Fees Details</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <form align="center" id="FeesForm">
                <div class="row">
                  <div class="col-lg-3">
                    <label for="recipient-name" class="col-form-label">Select Course</label>
                    <select style="color:white" class="form-control" id="CourseIDF" required="">
                      <option value="">Select</option>
                      <?php 
                      $query ="SELECT * FROM courses";
                      $result = mysqli_query($con, $query);
                      if (mysqli_num_rows($result)>0){
                        while($row=mysqli_fetch_assoc($result)){
                          echo '<option value="'.$row['CourseID'].'">'.$row['Course'].'</option>';
                        }}?>
                      </select>
                    </div>

                    <div class="col-lg-3">
                      <label for="recipient-name" class="col-form-label">Select Branch</label>
                      <select style="color:white" class="form-control" id="BranchIDF" required="">
                        <option value="">Select</option>
                      </select>
                    </div>
                    <div class="col-lg-3">
                      <label for="recipient-name" class="col-form-label">Select Student</label>
                      <select style="color:white" class="form-control" id="FeesStudent">  
                        <option>Select</option>
                      </select>
                    </div>
                    <div class="col-lg-3">
                      <label for="recipient-name" class="col-form-label">Total Amount</label>
                      <input style="color:white; background-color: black;" type="text" class="form-control" id="TotalAmount" disabled>
                    </div>
                    <div class="col-lg-3">
                      <label for="recipient-name" class="col-form-label">Select Year</label>
                      <select id="year" class="form-control" style="color:white;">
                        <option value="">Select</option>
                        <option value="1">I</option>
                        <option value="2">II</option>
                        <option value="3">III</option>
                        <option value="4">IV</option>
                      </select>
                    </div>

                    <div class="col-lg-3">
                      <label for="recipient-name" class="col-form-label">Paid Amount</label>
                      <input style="color:white; margin-bottom:10px" type="number" class="form-control" id="FeesAmount" min="0">
                    </div>

                    <div class="col-lg-6">
                      <label for="recipient-name" class="col-form-label">Remark</label>
                      <textarea class="form-control" style="color: white;" id="RemarkFees"></textarea>
                    </div>
                  </div>

                  <div class="modal-footer">
                    <button type="reset" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                  </form>
                  <button type="button" class="btn btn-primary SaveFees">Save</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade" id="FeesDetails" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-corner">
              <div class="modal-header rounded-corner">
                <h5 class="modal-title">Fees Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="table-responsive" style="margin:20px;">
                  <table class="table table-hover table-bordered border-primary table-light">
                    <thead>
                      <th>Received Amount</th>
                      <th>Year</th>
                      <th>Received Date</th>
                      <th>Remark</th>
                      <th>Receipt No.</th>
                    </thead>
                    <tbody id="FeesData">

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>


        <div class="modal fade" id="SalaryDetail" tabindex="-1" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content rounded-corner">
              <div class="modal-header rounded-corner">
                <h5 class="modal-title">Salary Details</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">

                <div class="table-responsive" style="margin:20px;">
                  <table class="table table-hover table-bordered border-primary table-light">
                    <thead>
                      <th>Received Amount</th>
                      <th>Month</th>
                      <th>Received Date</th>
                    </thead>
                    <tbody id="SalaryDataS">

                    </tbody>
                  </table>
                </div>
                <div class="modal-footer">
                  <button class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
              </div>
            </div>
          </div>
        </div>
