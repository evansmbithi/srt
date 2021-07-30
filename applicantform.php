
<!-- <div class="form-group">
  <div class="col-md-11">
  <label class="col-md-4 control-label" for=
    "NATIONALID">NationalID:</label>

    <div class="col-md-8"> 
       <input class="form-control " id="NATIONALID" name="NATIONALID" placeholder=
          "00-000000000000" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" >
    </div>
  </div>
</div> -->
<style type="text/css">
.form-control-2 {
  display: inline-block;
  width: 25%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
   
</style>



            <form action="#" class="bg-white p-5 contact-form">
            <div class="container">
              <div class="row">
                <div class="col">
                    <div class="form-group">
                    <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
                    <input class="form-control " id="FNAME" name="FNAME" placeholder=
                        "Firstname" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" >
                    </div>
                    <!-- <div class="form-group">
                      <input  class="form-control " id="MNAME" name="MNAME" placeholder="Middle Name" onkeyup="javascript:capitalize(this.id, this.value);" > 
                    </div> -->
                    <div class="form-group">
                        <input  class="form-control " id="LNAME" name="LNAME" placeholder="Lastname"  onkeyup="javascript:capitalize(this.id, this.value);" >
                    </div>
                    
                    <div class="form-group"> 
                        <textarea class="form-control " id="ADDRESS" name="ADDRESS" placeholder="Location" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" ></textarea>
                    </div>

                    <div class="form-group"> 
                 <input class="form-control " id="TELNO" name="TELNO" placeholder= "Telephone" type="text" any value="" required  onkeyup="javascript:capitalize(this.id, this.value);" >
              </div>
              <!-- <div class="form-group">
                    <select class="form-control " name="CIVILSTATUS" id="CIVILSTATUS">
                        <option value="none" >Select Civil Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow" >Widow</option> 
                    </select> 
                
              </div> -->
              <div class="form-group">
                   <input type="Email" class="form-control " id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address"   autocomplete="false"/>  
              </div>
              <div class="form-group">
                 <input  class="form-control " id="USERNAME" name="USERNAME" placeholder="Username" onkeyup="javascript:capitalize(this.id, this.value);" >
                
              </div>
              <div class="form-group">
                   <input  class="form-control " id="PASS" name="PASS" placeholder="Password" type="password"   onkeyup="javascript:capitalize(this.id, this.value);" > 
                
              </div>
                </div>

              <div class="col">
                  <!--Vehicle description-->
                  <div class="form-group">
                      <input  class="form-control " id="MODEL" name="MODEL" placeholder="Model/Make"    onkeyup="javascript:capitalize(this.id, this.value);" >
                  </div>
                  <div class="form-group">
                      <input  class="form-control " id="YEAR" name="YEAR" placeholder="Year"    onkeyup="javascript:capitalize(this.id, this.value);" >
                  </div>

                  <!--Transmission options-->
                  <div class="form-group">
                      <select class="form-control " name="TRANSMISSION" id="TRANSMISSION">
                          <option value="none" >Transmission</option>
                          <option value="Automatic">Automatic</option>
                          <option value="Manual">Manual</option> 
                      </select> 
                  </div>

                  <!--fuel type-->
                  <div class="form-group">
                      <select class="form-control " name="FUEL" id="FUEL">
                          <option value="none" >Fuel Type</option>
                          <option value="Petrol">Petrol</option>
                          <option value="Diesel">Diesel</option>
                          <option value="Hybrid" >Hybrid</option>
                          <option value="Diesel-Hybrid" >Diesel-Hybrid</option>
                          <option value="Electric" >Electric</option> 
                          <option value="Other" >Other</option> 
                      </select> 
                  </div>

                  <div class="form-group">  
                      <textarea class="form-control " id="DESCRIPTION" name="DESCRIPTION" placeholder= "Vehicle Decription" type="text" value="" required  onkeyup="javascript:capitalize(this.id, this.value);" ></textarea>
                  </div>

                  <!--Attach image-->
                  <div class="form-group"> 
                      Attach images 
                      <input id="picture" name="picture" type="file"  >
                      <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> 
                  </div>  
                  


                  <div class="form-group">
                      <input type="checkbox"> By Sign up you are agree with our <a href="#">terms and condition</a> 
                  </div> 
                  

                  <div class="form-group">
                      <input type="submit" value="Submit Application" name="submit" class="btn btn-primary py-3 px-5">
                  </div>
              </div>
            </div>
          </div>              
        </form>

