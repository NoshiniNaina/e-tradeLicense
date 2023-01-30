@extends('welcome')
<div class="container-fluid justify-content-center">
    <div class="card" style="width: 48rem; padding:20px; margin-left:280px; margin-top:100px;">
        <form action="store" method="POST">
          {{ csrf_field() }}
            <div class="form-group">
              <label for="issueDate">Issue Date</label>
              <input type="date" class="form-control" name="issueDate" id="issueDate" aria-describedby="emailHelp" >
            </div>

            <div class="form-group">
              <label for="issueTime">Issue Time</label>
              <input type="time" class="form-control" name="issueTime" id="issueTime" aria-describedby="emailHelp" >
            </div>

            <div class="form-group">
              <label for="license_No">License No</label>
              <input type="text" class="form-control" name="license_No" id="license_No" aria-describedby="emailHelp" >
            </div>
            <div class="form-group">
              <label for="institution_Name">Business Institution Name</label>
              <input type="text" class="form-control" name="institution_Name" id="institution_Name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="owner_Name">Institutions Owner Name</label>
              <input type="text" class="form-control" name="owner_Name" id="owner_Name" aria-describedby="emailHelp">
            </div>
            <div class="form-group">
              <label for="father_Name">Father/husband Name</label>
              <input type="text" class="form-control" name="father_Name" id="father_Name" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="mother_Name">Mother Name</label>
              <input type="text" class="form-control" name="mother_Name" id="mother_Name" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="business_Nature">Business nature</label>
              <input type="text" class="form-control" name="business_Nature" id="business_Nature" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="business_Type">Business type</label>
              <input type="text" class="form-control" name="business_Type" id="business_Type" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="address">Address</label>
              <input type="text" class="form-control" name="address" id="address" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="area">Area</label>
              <input type="text" class="form-control" name="area" id="area" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="ward">Ward/Market</label>
              <input type="text" class="form-control" name="ward" id="ward" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="nid">NID/Passport/Birth certificate</label>
              <input type="text" class="form-control" name="nid" id="nid" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="BNI_No">BNI No</label>
              <input type="text" class="form-control" name="BNI_No" id="BNI_No" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="email">Email address</label>
              <input type="text" class="form-control" name="email" id="email" aria-describedby="emailHelp">
            </div>

            <div class="form-group">
              <label for="fiscal_year">Fiscal year</label>
              <input type="text" class="form-control" name="fiscal_year" id="fiscal_year" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
              <p>Present Address</p>
              <label for="holding_No">Holding No</label>
              <input type="text" class="form-control" name="holding_No" id="holding_No" aria-describedby="emailHelp">
              <label for="road_No">Road No</label>
              <input type="text" class="form-control" name="road_No" id="road_No" aria-describedby="emailHelp">
              <label for="village">Village</label>
              <input type="text" class="form-control" name="village" id="village" aria-describedby="emailHelp">
              <label for="postCard">Post Card</label>
              <input type="text" class="form-control" name="postCard" id="postCard" aria-describedby="emailHelp">
              <label for="thana">Thana</label>
              <input type="text" class="form-control" name="thana" id="thana" aria-describedby="emailHelp">
              <label for="division">Division</label>
              <input type="text" class="form-control" name="division" id="division" aria-describedby="emailHelp">
              <label for="district">District</label>
              <input type="text" class="form-control" name="district" id="district" aria-describedby="emailHelp">
            </div>
            
            <div class="form-group">
              <p>Permanent Address</p>
              <label for="holding_No_p">Holding No</label>
              <input type="text" class="form-control" name="holding_No_p" id="holding_No_p aria-describedby="emailHelp">
              <label for="road_No_p">Road No</label>
              <input type="text" class="form-control" name="road_No_p" id="road_No_p" aria-describedby="emailHelp">
              <label for="village_p">Village</label>
              <input type="text" class="form-control" name="village_p" id="village_p" aria-describedby="emailHelp">
              <label for="postCard_p">Post Card</label>
              <input type="text" class="form-control" name="postCard_p" id="postCard_p" aria-describedby="emailHelp">
              <label for="thana_p">Thana</label>
              <input type="text" class="form-control" name="thana_p" id="thana_p" aria-describedby="emailHelp">
              <label for="division_p">Division</label>
              <input type="text" class="form-control" name="division_p" id="division_p" aria-describedby="emailHelp">
              <label for="district_p">District</label>
              <input type="text" class="form-control" name="district_p" id="district_p" aria-describedby="emailHelp">
            </div>
           
            <div class="form-group">
              <p>Trade-License/Renewal Fees(annual)</p>
              <label for="renewal_Fees">License/Renewal Fees</label>
              <input type="text" class="form-control" name="renewal_Fees" id="renewal_Fees" aria-describedby="emailHelp">
              <label for="signBoard_Tax">SignBoard Tax</label>
              <input type="text" class="form-control" name="signBoard_Tax" id="signBoard_Tax" aria-describedby="emailHelp">
              <label for="fertilizer_Charges">Fertilizer charges**</label>
              <input type="text" class="form-control" name="fertilizer_Charges" id="fertilizer_Charges" aria-describedby="emailHelp">
              <label for="Vat">Vat</label>
              <input type="text" class="form-control" name="Vat" id="Vat" aria-describedby="emailHelp">
              <label for="tax">Tax</label>
              <input type="text" class="form-control" name="tax" id="tax" aria-describedby="emailHelp">
              <label for="book_Fee">Book Fee</label>
              <input type="text" class="form-control" name="book_Fee" id="book_Fee" aria-describedby="emailHelp">
              <label for="due">Due</label>
              <input type="text" class="form-control" name="due" id="due" aria-describedby="emailHelp">
              <label for="form_Fee">Form Fee</label>
              <input type="text" class="form-control" name="form_Fee" id="form_Fee" aria-describedby="emailHelp">
              <label for="solution_Fee">Solution Fee</label>
              <input type="text" class="form-control" name="solution_Fee" id="solution_Fee" aria-describedby="emailHelp">
              <label for="others_Fee">Others Fee</label>
              <input type="text" class="form-control" name="others_Fee" id="others_Fee" aria-describedby="emailHelp">
              <label for="total">Total</label>
              <input type="text" class="form-control" name="total" id="total" aria-describedby="emailHelp">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
