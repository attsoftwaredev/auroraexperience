<?php
include 'header.php';	
?>
    <section id="donationBanner">
    <form id="signUpForm" action="#!">
        <!-- start step indicators -->
        <div class="form-header d-flex mb-4">
            <span class="stepIndicator"></span>
            <span class="stepIndicator"></span>
        </div>
        <!-- end step indicators -->
    
        <!-- step one -->
        <div class="step">
        <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
             <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home-tab-pane" type="button" role="tab" aria-controls="home-tab-pane" aria-selected="true">ONE TIME GIFT</button>
          </li>
          <li class="nav-item" role="presentation">
             <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile-tab-pane" type="button" role="tab" aria-controls="profile-tab-pane" aria-selected="false">RESCUE PARTNER MONTHLY GIVING</button>
          </li>
         </ul>
        <div class="tab-content accordion" id="myTabContent">

         <div class="tab-pane fade show active accordion-item" id="home-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
    <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
      <div class="accordion-body">
      <div class="col-md-12">
              <p class="fw-bold fs-4 text-black">Donation Amount:<p>
            </div> 
            <div class="row">
            <div class="col-md-2 mb-lg-5">
            <input type="radio" name="donation_amount" id="amount50" value="$50"/>
             <label for="amount50">$50</label>
            </div>
            <div class="col-md-2 mb-lg-5">
            <input type="radio" name="donation_amount" id="amount100" value="$100"/>
             <label for="amount100">$100</label>
            </div>
            <div class="col-md-2 mb-lg-5">
            <input type="radio" name="donation_amount" id="amount150" value="$150"/>
             <label for="amount150">$150</label>
            </div>
            <div class="col-md-6 mb-lg-5">
            <input type="radio" name="donation_amount" id="rescue_child" value="$1500"/>
             <label for="rescue_child">$1500 Rescues a Child</label>
          </div>  
        </div>
      </div>
    </div>
  </div>

  <div class="tab-pane fade accordion-item" id="profile-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
    <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
      <div class="accordion-body">
      <div class="col-md-12">
              <p class="fw-bold fs-4 text-black">Monthly Donation Amount:<p>
            </div> 
            <div class="row">
            <div class="col-md-2 mb-lg-5">
            <input type="radio" name="monthly_donation_amount" id="monthly_amount50" value="$50"/>
             <label for="monthly_amount50">$50</label>
            </div>
            <div class="col-md-2 mb-lg-5">
            <input type="radio" name="monthly_donation_amount" id="monthly_amount100" value="$100"/>
             <label for="monthly_amount100">$100</label>
            </div>
            <div class="col-md-2 mb-lg-5">
            <input type="radio" name="monthly_donation_amount" id="monthly_amount150" value="$150"/>
             <label for="monthly_amount150">$150</label>
            </div>
            <div class="col-md-6 mb-lg-5">
            <input type="radio" name="monthly_donation_amount" id="monthly_rescue_child" value="$1500"/>
             <label for="monthly_rescue_child">$1500 Rescues a Child</label>
          </div>  
        </div>
      </div>
    </div>
  </div>

</div>
        </div>
    
        <!-- step two
        <div class="step">
            <div class="row">
              <div class="col-md-4 mb-lg-4">
              <input type="radio" name="giving_as" id="giving_as_individual" value="small" checked />
             <label for="giving_as_individual">GIVING AS AN INDIVIDUAL</label>
              </div>  
              <div class="col-md-4 mb-lg-4">
              <input type="radio" name="giving_as" id="giving_as_business" value="small" checked />
             <label for="giving_as_business">GIVING AS A BUSINESS</label>
              </div>
              <div class="col-md-4 mb-lg-4">
              <input type="radio" name="giving_as" id="giving_as_church" value="small" checked />
             <label for="giving_as_church">GIVING AS A CHURCH</label>
              </div>
             </div>  
             <div class="col-md-12">
              <p class="fw-bold fs-4 text-black">Donor Information:<p>
            </div>
            <div class="row secondForm">
              <div class="col-md-6 mb-3">
                <label>First Name*</label>
                <input type="text" value="" name="first_name" required>
              </div>  
              <div class="col-md-6 mb-3">
                <label>Last Name*</label>
                <input type="text" value="" name="last_name" required>
              </div> 

              <div class="col-md-6 mb-3">
                <label>Email Address*</label>
                <input type="email" value="" name="first_name" required>
              </div>  
              <div class="col-md-6 mb-3">
                <label>Phone Number</label>
                <input type="tel" value="" name="last_name" required>
              </div> 
            </div>   
        </div> -->
    
        <!-- step three 
        <div class="step">
            <div class="row">
              <div class="col-md-6 mb-lg-4">
              <input type="radio" name="payment_method" id="payment_method_creditcard" value="small" checked />
             <label for="payment_method_creditcard">CREDIT CARD</label>
              </div>  
              <div class="col-md-6 mb-lg-4">
              <input type="radio" name="payment_method" id="payment_method_bank_transfer" value="small" checked />
             <label for="payment_method_bank_transfer">BANK TRANSFER</label>
              </div>
             </div>  
             <div class="col-md-12">
              <p class="fw-bold fs-4 text-black">Billing Information:<p>
            </div>
            <div class="row secondForm">
              <div class="col-md-6 mb-3">
                <label>Billing Address*</label>
                <input type="text" value="" name="first_name" required>
              </div>  
              <div class="col-md-6 mb-3">
                <label>Address Line 2</label>
                <input type="text" value="" name="last_name" required>
              </div> 

              <div class="col-md-6 mb-3">
                <label>City*</label>
                <input type="email" value="" name="first_name" required>
              </div>  
              <div class="col-md-6 mb-3">
                <label>State*</label>
                <input type="tel" value="" name="last_name" required>
              </div> 

              <div class="col-md-6 mb-3">
                <label>Zip Code*</label>
                <input type="tel" value="" name="last_name" required>
              </div> 
              <div class="col-md-6 mb-3">
                <label>Country*</label>
                <select id="billing_country" name="billing_country" data-required="true">
                    <option value="">Select Country</option>
                    <option value="AF">Afghanistan</option>
                    <option value="AX">Aland Islands</option>
                    <option value="AL">Albania</option>
                    <option value="DZ">Algeria</option>
                    <option value="AS">American Samoa</option>
                    <option value="AD">Andorra</option>
                    <option value="AO">Angola</option>
                    <option value="AI">Anguilla</option>
                    <option value="AQ">Antarctica</option>
                    <option value="AG">Antigua and Barbuda</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="AT">Austria</option>
                    <option value="AZ">Azerbaijan</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="BY">Belarus</option>
                    <option value="BE">Belgium</option>
                    <option value="BZ">Belize</option>
                    <option value="BJ">Benin</option>
                    <option value="BM">Bermuda</option>
                    <option value="BT">Bhutan</option>
                    <option value="BO">Bolivia</option>
                    <option value="BA">Bosnia and Herzegovina</option>
                    <option value="BW">Botswana</option>
                    <option value="BV">Bouvet Island</option>
                    <option value="BR">Brazil</option>
                    <option value="VG">British Virgin Islands</option>
                    <option value="IO">British Indian Ocean Territory</option>
                    <option value="BN">Brunei Darussalam</option>
                    <option value="BG">Bulgaria</option>
                    <option value="BF">Burkina Faso</option>
                    <option value="BI">Burundi</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="CV">Cape Verde</option>
                    <option value="KY">Cayman Islands</option>
                    <option value="CF">Central African Republic</option>
                    <option value="TD">Chad</option>
                    <option value="CL">Chile</option>
                    <option value="CN">China</option>
                    <option value="HK">Hong Kong</option>
                    <option value="MO">Macao</option>
                    <option value="CX">Christmas Island</option>
                    <option value="CC">Cocos (Keeling) Islands</option>
                    <option value="CO">Colombia</option>
                    <option value="KM">Comoros</option>
                    <option value="CG">Congo-Brazzaville</option>
                    <option value="CD">Congo, Democratic Republic of the</option>
                    <option value="CK">Cook Islands</option>
                    <option value="CR">Costa Rica</option>
                    <option value="HR">Croatia</option>
                    <option value="CU">Cuba</option>
                    <option value="CY">Cyprus</option>
                    <option value="CZ">Czech Republic</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="DO">Dominican Republic</option>
                    <option value="EC">Ecuador</option>
                    <option value="EG">Egypt</option>
                    <option value="SV">El Salvador</option>
                    <option value="GQ">Equatorial Guinea</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FK">Falkland Islands (Malvinas)</option>
                    <option value="FO">Faroe Islands</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GF">French Guiana</option>
                    <option value="PF">French Polynesia</option>
                    <option value="TF">French Southern Territories</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="DE">Germany</option>
                    <option value="GH">Ghana</option>
                    <option value="GI">Gibraltar</option>
                    <option value="GR">Greece</option>
                    <option value="GL">Greenland</option>
                    <option value="GD">Grenada</option>
                    <option value="GP">Guadeloupe</option>
                    <option value="GU">Guam</option>
                    <option value="GT">Guatemala</option>
                    <option value="GG">Guernsey</option>
                    <option value="GN">Guinea</option>
                    <option value="GW">Guinea-Bissau</option>
                    <option value="GY">Guyana</option>
                    <option value="HT">Haiti</option>
                    <option value="HM">Heard Island and Mcdonald Islands</option>
                    <option value="VA">Holy See (Vatican City State)</option>
                    <option value="HN">Honduras</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="IR">Iran, Islamic Republic of</option>
                    <option value="IQ">Iraq</option>
                    <option value="IE">Ireland</option>
                    <option value="IM">Isle of Man</option>
                    <option value="IL">Israel</option>
                    <option value="IT">Italy</option>
                    <option value="JM">Jamaica</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="KP">Korea, Democratic People’s Republic of</option>
                    <option value="KR">Korea, Republic of</option>
                    <option value="KW">Kuwait</option>
                    <option value="KG">Kyrgyzstan</option>
                    <option value="LA">Lao PDR</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="LR">Liberia</option>
                    <option value="LY">Libya</option>
                    <option value="LI">Liechtenstein</option>
                    <option value="LT">Lithuania</option>
                    <option value="LU">Luxembourg</option>
                    <option value="MK">Macedonia, Republic of</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="MV">Maldives</option>
                    <option value="ML">Mali</option>
                    <option value="MT">Malta</option>
                    <option value="MH">Marshall Islands</option>
                    <option value="MQ">Martinique</option>
                    <option value="MR">Mauritania</option>
                    <option value="MU">Mauritius</option>
                    <option value="YT">Mayotte</option>
                    <option value="MX">Mexico</option>
                    <option value="FM">Micronesia, Federated States of</option>
                    <option value="MD">Moldova</option>
                    <option value="MC">Monaco</option>
                    <option value="MN">Mongolia</option>
                    <option value="ME">Montenegro</option>
                    <option value="MS">Montserrat</option>
                    <option value="MA">Morocco</option>
                    <option value="MZ">Mozambique</option>
                    <option value="MM">Myanmar</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="NL">Netherlands</option>
                    <option value="AN">Netherlands Antilles</option>
                    <option value="NC">New Caledonia</option>
                    <option value="NZ">New Zealand</option>
                    <option value="NI">Nicaragua</option>
                    <option value="NE">Niger</option>
                    <option value="NG">Nigeria</option>
                    <option value="NU">Niue</option>
                    <option value="NF">Norfolk Island</option>
                    <option value="MP">Northern Mariana Islands</option>
                    <option value="NO">Norway</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PS">Palestinian Territory, Occupied</option>
                    <option value="PA">Panama</option>
                    <option value="PG">Papua New Guinea</option>
                    <option value="PY">Paraguay</option>
                    <option value="PE">Peru</option>
                    <option value="PH">Philippines</option>
                    <option value="PN">Pitcairn</option>
                    <option value="PL">Poland</option>
                    <option value="PT">Portugal</option>
                    <option value="PR">Puerto Rico</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Réunion</option>
                    <option value="RO">Romania</option>
                    <option value="RU">Russian Federation</option>
                    <option value="RW">Rwanda</option>
                    <option value="BL">Saint-Barthélemy</option>
                    <option value="SH">Saint Helena</option>
                    <option value="KN">Saint Kitts and Nevis</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="MF">Saint-Martin (French part)</option>
                    <option value="PM">Saint Pierre and Miquelon</option>
                    <option value="VC">Saint Vincent and Grenadines</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="ST">Sao Tome and Principe</option>
                    <option value="SA">Saudi Arabia</option>
                    <option value="SN">Senegal</option>
                    <option value="RS">Serbia</option>
                    <option value="SC">Seychelles</option>
                    <option value="SL">Sierra Leone</option>
                    <option value="SG">Singapore</option>
                    <option value="SK">Slovakia</option>
                    <option value="SI">Slovenia</option>
                    <option value="SB">Solomon Islands</option>
                    <option value="SO">Somalia</option>
                    <option value="ZA">South Africa</option>
                    <option value="GS">South Georgia and the South Sandwich Islands</option>
                    <option value="SS">South Sudan</option>
                    <option value="ES">Spain</option>
                    <option value="LK">Sri Lanka</option>
                    <option value="SD">Sudan</option>
                    <option value="SR">Suriname</option>
                    <option value="SJ">Svalbard and Jan Mayen Islands</option>
                    <option value="SZ">Swaziland</option>
                    <option value="SE">Sweden</option>
                    <option value="CH">Switzerland</option>
                    <option value="SY">Syrian Arab Republic (Syria)</option>
                    <option value="TW">Taiwan, Republic of China</option>
                    <option value="TJ">Tajikistan</option>
                    <option value="TZ">Tanzania</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="TK">Tokelau</option>
                    <option value="TO">Tonga</option>
                    <option value="TT">Trinidad and Tobago</option>
                    <option value="TN">Tunisia</option>
                    <option value="TR">Turkey</option>
                    <option value="TM">Turkmenistan</option>
                    <option value="TC">Turks and Caicos Islands</option>
                    <option value="TV">Tuvalu</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="AE">United Arab Emirates</option>
                    <option value="GB">United Kingdom</option>
                    <option value="US">United States of America</option>
                    <option value="UM">United States Minor Outlying Islands</option>
                    <option value="UY">Uruguay</option>
                    <option value="UZ">Uzbekistan</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VE">Venezuela (Bolivarian Republic of)</option>
                    <option value="VN">Viet Nam</option>
                    <option value="VI">Virgin Islands, US</option>
                    <option value="WF">Wallis and Futuna Islands</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
              </div> 
            </div>   
        </div> -->


         <!-- step two -->
         <div class="step">
         <ul class="nav nav-tabs d-none d-lg-flex" id="myTab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="credit-tab" data-bs-toggle="tab" data-bs-target="#credit-tab-pane" type="button" role="tab" aria-controls="credit-tab-pane" aria-selected="true">CREDIT CARD</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="bank-tab" data-bs-toggle="tab" data-bs-target="#bank-tab-pane" type="button" role="tab" aria-controls="bank-tab-pane" aria-selected="false">BANK TRANSFER</button>
  </li>
</ul>
<div class="tab-content accordion" id="myTabContent">
  <div class="tab-pane fade show active accordion-item" id="credit-tab-pane" role="tabpanel" aria-labelledby="credit-tab" tabindex="0">
    <div id="collapseOne" class="accordion-collapse collapse show  d-lg-block" aria-labelledby="headingOne" data-bs-parent="#myTabContent">
      <div class="accordion-body">
      <div class="col-md-12 secondForm">
             <label>Name on Card*</label>
                <input type="text" value="" name="name_card" required>
            </div>
            <div class="col-md-12 secondForm">
            <div id="card-element" class="StripeElement StripeElement--empty"><div class="__PrivateStripeElement" style="margin: 0px !important; padding: 0px !important; border: none !important; display: block !important; background: transparent !important; position: relative !important; opacity: 1 !important;"><iframe name="__privateStripeFrame4856" frameborder="0" allowtransparency="true" scrolling="no" role="presentation" allow="payment *" src="https://js.stripe.com/v3/elements-inner-card-3f1dc6dccf75fce268f106acf1b9cf98.html#wait=false&amp;mids[guid]=NA&amp;mids[muid]=ad85afa2-db83-4f72-b144-ff705d045cce85f828&amp;mids[sid]=NA&amp;style[base][fontSmoothing]=antialiased&amp;style[base][::placeholder][color]=%23aab7c4&amp;style[invalid][color]=%23fa755a&amp;style[invalid][iconColor]=%23fa755a&amp;rtl=false&amp;componentName=card&amp;keyMode=live&amp;apiKey=pk_live_51H4rJWHu36HaRXAKN5dmeOr88454qzJhqxsWvVvxy5JyvsFRqU9C3WptCLkgfLmGtVKrKidWk9NkF0CFoLkbTu7g00so30cUlX&amp;referrer=https%3A%2F%2Fwww.destinyrescue.org%2Fdonate%2F&amp;controllerId=__privateStripeController4851" title="Secure card payment input frame" style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; user-select: none !important; transform: translate(0px) !important; color-scheme: light only !important; height: 16.8px;"></iframe><input class="__PrivateStripeElement-input" aria-hidden="true" aria-label=" " autocomplete="false" maxlength="1" style="border: none !important; display: block !important; position: absolute !important; height: 1px !important; top: -1px !important; left: 0px !important; padding: 0px !important; margin: 0px !important; width: 100% !important; opacity: 0 !important; background: transparent !important; pointer-events: none !important; font-size: 16px !important;"></div></div>
            </div> 
            <div class="col-md-12">
            <input class="toggle-box" id="identifier-1" type="checkbox">
            <label for="identifier-1" class="link"><i class="bi bi-caret-right-fill"></i> Leave a note:</label>
            </input>
            <div class="hidden-input">
            <textarea id="donation-notes" name="donation_note" rows="4"></textarea>
             </div>
            </div>
      </div>
    </div>

  </div>
  <div class="tab-pane fade accordion-item" id="bank-tab-pane" role="tabpanel" aria-labelledby="bank-tab" tabindex="0">
    <div id="collapseTwo" class="accordion-collapse collapse d-lg-block" aria-labelledby="headingTwo" data-bs-parent="#myTabContent">
      <div class="accordion-body">
      <div class="row secondForm">
              <div class="col-md-12 mb-3">
                <label>Account Type*</label>
                <select name="account_type" data-required="true">
                    <option value="">Select Account Type</option>
                    <option value="c">Checking</option>
                    <option value="s">Savings</option>
                    <option value="pc">Personal Checking</option>
                    <option value="ps">Personal Savings</option>
                    <option value="bc">Business Checking</option>
                    <option value="bs">Business Savings</option>
                  </select>
              </div>  
              <div class="col-md-12 mb-3">
                <label>Routing Number*</label>
                <input type="text" value="" name="routing_number" required>
              </div> 

              <div class="col-md-12 mb-3">
                <label>Account Number*</label>
                <input type="text" value="" name="account_number" required>
              </div>  
            </div> 
      </div>
    </div>
  </div>
</div>
        </div>
    
        <!-- start previous / next buttons -->
        <div class="row form-footer">
          <div class="col-md-6">
            <input type="text" placeholder="amount USD" id="amount_text" name="amount_text">
            <p id="giving_amount">Giving $<span>1500</span></p>
            <button type="button" id="prevBtn" onclick="nextPrev(-1)">(edit amount)</button>
           </div> 
           <div class="col-md-6"> 
            <button type="button" id="nextBtn" onclick="nextPrev(1)" class="w-100">Next</button>
          </div> 
        </div>
        <!-- end previous / next buttons -->
    </form> 
    </section>  


   <section class="p-5">
    <div class="container p-5">
      <h2 class="fw-normal text-center fs-1">Meaningful Ways to Give</h2>
      <hr style="width:10%;border:2px solid #f37121;margin:30px auto;opacity:1;background:#f37121;">
    
      <div class="row py-4" id="meaning-way-card">
        <div class="col-lg-4 col-md-12 mb-3">
           <div class="card mx-3 h-100">
           <img class="card-img-top" src="./images/portal-giving-rescue-partner.jpg" alt="portal-giving-rescue-partner">
           <div class="card-body">
           <h3 class="text-center fw-bold fs-3">Fund a Rescue</h3>
           <hr style="width:15%;border:1px solid #f37121;margin:30px auto 60px;opacity:1;background:#f37121;">
           <p class="card-text px-4 text-center py-3">Help rescue children out of slavery and give them the care they need.</p>
           </div>
        </div>
        </div>



        <div class="col-lg-4 col-md-12 mb-3">
           <div class="card mx-3 h-100">
           <img class="card-img-top" src="./images/portal-giving-fund-rescue.jpg" alt="portal-giving-fund-rescue">
           <div class="card-body">
           <h3 class="text-center fw-bold fs-3">Rescue Partner</h3>
           <hr style="width:15%;border:1px solid #f37121;margin:30px auto 60px;opacity:1;background:#f37121;">
           <p class="card-text px-4 text-center py-3">Help provide freedom and empower bright and safe futures.</p>
           </div>
        </div>
            </div>

        <div class="col-lg-4 col-md-12 mb-3">
           <div class="card mx-3 h-100">
           <img class="card-img-top" src="./images/portal-giving-help-her-stay-free.jpg" alt="portal-giving-help-her-stay-free">
           <div class="card-body">
           <h3 class="text-center fw-bold fs-3">Help Her Stay Free</h3>
           <hr style="width:15%;border:1px solid #f37121;margin:30px auto 60px;opacity:1;background:#f37121;">
           <p class="card-text px-4 text-center py-3">Help a child stay free to pursue her dreams by helping to fund her path to freedom.</p>
           </div>
        </div>
    </div>  
   </section> 


   <section class="py-5" id="donate-confidence" style="background-color:#e8e8e8">
    <div class="container py-5">
      <div class="row">
      <div class="col-lg-6 col-md-12">
        <h3>Donate with confidence</h3>
        <h4 class="fw-bold" style="color: #e26826;">Over the last three years, 80.4% of every dollar we spent was used for programs that benefit the children we defend.</h4>
        <p class="fs-4">Destiny Rescue is recognized by Guidestar, Charity Navigator and the Better Business Bureau for our commitment to transparency, accountability and financial integrity.</p>
        <ul>
          <li><img src="./images/badge-1.png"></li>
          <li><img src="./images/badge-2.png"></li>
          <li><img src="./images/badge-3.png"></li>
        </ul>  
      </div>  
      
      <div class="col-lg-6 col-md-12">
        <img src="./images/pie-chart.png" class="w-75 mx-auto">
        <h5 class="text-left">We are grateful for your generosity and promise to use your donation in the most effective way possible. All donations designated for specific funds will be applied to those projects and to administering the gifts. At least 80 percent of your designated gift will go to programs that defend kids. Gifts that cannot be used for a particular project, due to over or under-funding, will be directed to Destiny Rescue’s most urgent needs. Contributions are solicited with the understanding that Destiny Rescue has control over the use of all donated funds.</h5>
      </div> 
    </div>
    </div>  
   </section> 














    <script>var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab
        
        function showTab(n) {
          // This function will display the specified tab of the form...
          var x = document.getElementsByClassName("step");
          x[n].style.display = "block";
          //... and fix the Previous/Next buttons:
          if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
          } else {
            document.getElementById("prevBtn").style.display = "inline";
          }
          if (n == 0) {
            document.getElementById("amount_text").style.display = "inline";
          } else {
            document.getElementById("amount_text").style.display = "none";
          }
          if (n == 0) {
            document.getElementById("giving_amount").style.display = "none";
          } else {
            document.getElementById("giving_amount").style.display = "block";
          }
          if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Give Freedom";
          } else {
            document.getElementById("nextBtn").innerHTML = "Give Freedom";
          }
          //... and run a function that will display the correct step indicator:
          fixStepIndicator(n)
        }
        
        function nextPrev(n) {
          // This function will figure out which tab to display
          var x = document.getElementsByClassName("step");
          // Exit the function if any field in the current tab is invalid:
          if (n == 1 && !validateForm()) return false;
          // Hide the current tab:
          x[currentTab].style.display = "none";
          // Increase or decrease the current tab by 1:
          currentTab = currentTab + n;
          // if you have reached the end of the form...
          if (currentTab >= x.length) {
            // ... the form gets submitted:
            document.getElementById("signUpForm").submit();
            return false;
          }
          // Otherwise, display the correct tab:
          showTab(currentTab);
        }
        
        function validateForm() {
          // This function deals with validation of the form fields
          var x, y, i, valid = true;
          x = document.getElementsByClassName("step");
          y = x[currentTab].getElementsByTagName("input");
          // A loop that checks every input field in the current tab:
          for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
              // add an "invalid" class to the field:
              y[i].className += " invalid";
              // and set the current valid status to false
              valid = false;
            }
          }
          // If the valid status is true, mark the step as finished and valid:
          if (valid) {
            document.getElementsByClassName("stepIndicator")[currentTab].className += " finish";
          }
          return valid; // return the valid status
        }
        
        function fixStepIndicator(n) {
          // This function removes the "active" class of all steps...
          var i, x = document.getElementsByClassName("stepIndicator");
          for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
          }
          //... and adds the "active" class on the current step:
          x[n].className += " active";
        }
        </script>
    
<?php
include 'footer.php';
?>  