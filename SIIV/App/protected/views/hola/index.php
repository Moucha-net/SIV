<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/select2/select2.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/validation/jquery.validate.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/validation/additional-methods.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/plugins/bootstrap-wizard/jquery.bootstrap.wizard.min.js',CClientScript::POS_END); ?>
<?php Yii::app()->clientScript->registerScriptFile(Yii::app()->theme->baseUrl.'/assets/js/demo/form_wizard.js',CClientScript::POS_END); ?>

<!-- Breadcrumbs line -->
<div class="crumbs">
	<ul id="breadcrumbs" class="breadcrumb">
		<li>
			<i class="icon-home"></i>
			<a href="index">Dashboard</a>
		</li>
		<li class="current">
			<a href="#" title="">Calendar</a>
		</li>
	</ul>
</div>
<!-- /Breadcrumbs line -->

<!--=== Page Content ===-->
<div class="row">
        <!--=== Form Wizard ===-->
        <div class="col-md-12">
                <div class="widget box" id="form_wizard">
                        <div class="widget-header">
                                <h4><i class="icon-reorder"></i> Form Wizard with Validation - <span class="step-title">Step 1 of 4</span></h4>
                                <div class="toolbar no-padding">
                                        <div class="btn-group">
                                                <span class="btn btn-xs widget-collapse"><i class="icon-angle-down"></i></span>
                                        </div>
                                </div>
                        </div>
                        <div class="widget-content">
                                <form class="form-horizontal" id="sample_form" action="#">
                                        <div class="form-wizard">
                                                <div class="form-body">

                                                        <!--=== Steps ===-->
                                                        <ul class="nav nav-pills nav-justified steps">
                                                                <li>
                                                                        <a href="#tab1" data-toggle="tab" class="step">
                                                                                <span class="number">1</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Basic Information</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#tab2" data-toggle="tab" class="step">
                                                                                <span class="number">2</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Your Profile</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#tab3" data-toggle="tab" class="step active">
                                                                                <span class="number">3</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Billing Setup</span>
                                                                        </a>
                                                                </li>
                                                                <li>
                                                                        <a href="#tab4" data-toggle="tab" class="step">
                                                                                <span class="number">4</span>
                                                                                <span class="desc"><i class="icon-ok"></i> Confirmation</span>
                                                                        </a>
                                                                </li>
                                                        </ul>
                                                        <!-- /Steps -->

                                                        <!--=== Progressbar ===-->
                                                        <div id="bar" class="progress progress-striped" role="progressbar">
                                                                <div class="progress-bar progress-bar-success"></div>
                                                        </div>
                                                        <!-- /Progressbar -->

                                                        <!--=== Tab Content ===-->
                                                        <div class="tab-content">

                                                                <!--=== Available On All Tabs ===-->
                                                                <div class="alert alert-danger hide-default">
                                                                        <button class="close" data-dismiss="alert"></button>
                                                                        You missed some fields. They have been highlighted.
                                                                </div>
                                                                <div class="alert alert-success hide-default">
                                                                        <button class="close" data-dismiss="alert"></button>
                                                                        Good job! :-)
                                                                </div>
                                                                <!-- /Available On All Tabs -->

                                                                <!--=== Basic Information ===-->
                                                                <div class="tab-pane active" id="tab1">
                                                                        <h3 class="block padding-bottom-10px">Please fill in your account details</h3>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Username <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <input type="text" class="form-control required" name="username"/>
                                                                                        <span class="help-block">Enter your username.</span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Password <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <input type="password" class="form-control required" name="password" id="submit_form_password"/>
                                                                                        <span class="help-block">Enter your password.</span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Confirm Password <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <input type="password" class="form-control required" name="rpassword"/>
                                                                                        <span class="help-block">Confirm your password.</span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Email <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <input type="text" class="form-control required email" name="email"/>
                                                                                        <span class="help-block">Enter your email address.</span>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- /Basic Information -->

                                                                <!--=== Your Profile ===-->
                                                                <div class="tab-pane" id="tab2">
                                                                        <h3 class="block padding-bottom-10px">We want to know more about you</h3>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Fullname <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <input type="text" class="form-control required" name="fullname"/>
                                                                                        <span class="help-block">Provide your full name</span>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <div class="radio-list">
                                                                                                <label>
                                                                                                        <input type="radio" name="gender" value="M" data-title="Male" class="required" />
                                                                                                        Male
                                                                                                </label>
                                                                                                <label>
                                                                                                        <input type="radio" name="gender" value="F" data-title="Female"/>
                                                                                                        Female
                                                                                                </label>
                                                                                        </div>
                                                                                        <label for="gender" class="has-error help-block" generated="true" style="display:none;"></label>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Country</label>
                                                                                <div class="col-md-4">
                                                                                        <select name="country" id="country_list" class="select2 full-width-fix required">
                                                                                                <option value=""></option>
                                                                                                <option value="AF">Afghanistan</option>
                                                                                                <option value="AL">Albania</option>
                                                                                                <option value="DZ">Algeria</option>
                                                                                                <option value="AS">American Samoa</option>
                                                                                                <option value="AD">Andorra</option>
                                                                                                <option value="AO">Angola</option>
                                                                                                <option value="AI">Anguilla</option>
                                                                                                <option value="AQ">Antarctica</option>
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
                                                                                                <option value="BA">Bosnia and Herzegowina</option>
                                                                                                <option value="BW">Botswana</option>
                                                                                                <option value="BV">Bouvet Island</option>
                                                                                                <option value="BR">Brazil</option>
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
                                                                                                <option value="CX">Christmas Island</option>
                                                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                                                <option value="CO">Colombia</option>
                                                                                                <option value="KM">Comoros</option>
                                                                                                <option value="CG">Congo</option>
                                                                                                <option value="CD">Congo, the Democratic Republic of the</option>
                                                                                                <option value="CK">Cook Islands</option>
                                                                                                <option value="CR">Costa Rica</option>
                                                                                                <option value="CI">Cote d'Ivoire</option>
                                                                                                <option value="HR">Croatia (Hrvatska)</option>
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
                                                                                                <option value="GN">Guinea</option>
                                                                                                <option value="GW">Guinea-Bissau</option>
                                                                                                <option value="GY">Guyana</option>
                                                                                                <option value="HT">Haiti</option>
                                                                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                                                                <option value="VA">Holy See (Vatican City State)</option>
                                                                                                <option value="HN">Honduras</option>
                                                                                                <option value="HK">Hong Kong</option>
                                                                                                <option value="HU">Hungary</option>
                                                                                                <option value="IS">Iceland</option>
                                                                                                <option value="IN">India</option>
                                                                                                <option value="ID">Indonesia</option>
                                                                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                                                                <option value="IQ">Iraq</option>
                                                                                                <option value="IE">Ireland</option>
                                                                                                <option value="IL">Israel</option>
                                                                                                <option value="IT">Italy</option>
                                                                                                <option value="JM">Jamaica</option>
                                                                                                <option value="JP">Japan</option>
                                                                                                <option value="JO">Jordan</option>
                                                                                                <option value="KZ">Kazakhstan</option>
                                                                                                <option value="KE">Kenya</option>
                                                                                                <option value="KI">Kiribati</option>
                                                                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                                                                <option value="KR">Korea, Republic of</option>
                                                                                                <option value="KW">Kuwait</option>
                                                                                                <option value="KG">Kyrgyzstan</option>
                                                                                                <option value="LA">Lao People's Democratic Republic</option>
                                                                                                <option value="LV">Latvia</option>
                                                                                                <option value="LB">Lebanon</option>
                                                                                                <option value="LS">Lesotho</option>
                                                                                                <option value="LR">Liberia</option>
                                                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                                                <option value="LI">Liechtenstein</option>
                                                                                                <option value="LT">Lithuania</option>
                                                                                                <option value="LU">Luxembourg</option>
                                                                                                <option value="MO">Macau</option>
                                                                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
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
                                                                                                <option value="MD">Moldova, Republic of</option>
                                                                                                <option value="MC">Monaco</option>
                                                                                                <option value="MN">Mongolia</option>
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
                                                                                                <option value="RE">Reunion</option>
                                                                                                <option value="RO">Romania</option>
                                                                                                <option value="RU">Russian Federation</option>
                                                                                                <option value="RW">Rwanda</option>
                                                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                                                <option value="LC">Saint LUCIA</option>
                                                                                                <option value="VC">Saint Vincent and the Grenadines</option>
                                                                                                <option value="WS">Samoa</option>
                                                                                                <option value="SM">San Marino</option>
                                                                                                <option value="ST">Sao Tome and Principe</option>
                                                                                                <option value="SA">Saudi Arabia</option>
                                                                                                <option value="SN">Senegal</option>
                                                                                                <option value="SC">Seychelles</option>
                                                                                                <option value="SL">Sierra Leone</option>
                                                                                                <option value="SG">Singapore</option>
                                                                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                                                                <option value="SI">Slovenia</option>
                                                                                                <option value="SB">Solomon Islands</option>
                                                                                                <option value="SO">Somalia</option>
                                                                                                <option value="ZA">South Africa</option>
                                                                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                                                                <option value="ES">Spain</option>
                                                                                                <option value="LK">Sri Lanka</option>
                                                                                                <option value="SH">St. Helena</option>
                                                                                                <option value="PM">St. Pierre and Miquelon</option>
                                                                                                <option value="SD">Sudan</option>
                                                                                                <option value="SR">Suriname</option>
                                                                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
                                                                                                <option value="SZ">Swaziland</option>
                                                                                                <option value="SE">Sweden</option>
                                                                                                <option value="CH">Switzerland</option>
                                                                                                <option value="SY">Syrian Arab Republic</option>
                                                                                                <option value="TW">Taiwan, Province of China</option>
                                                                                                <option value="TJ">Tajikistan</option>
                                                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                                                <option value="TH">Thailand</option>
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
                                                                                                <option value="US">United States</option>
                                                                                                <option value="UM">United States Minor Outlying Islands</option>
                                                                                                <option value="UY">Uruguay</option>
                                                                                                <option value="UZ">Uzbekistan</option>
                                                                                                <option value="VU">Vanuatu</option>
                                                                                                <option value="VE">Venezuela</option>
                                                                                                <option value="VN">Viet Nam</option>
                                                                                                <option value="VG">Virgin Islands (British)</option>
                                                                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                                                                <option value="WF">Wallis and Futuna Islands</option>
                                                                                                <option value="EH">Western Sahara</option>
                                                                                                <option value="YE">Yemen</option>
                                                                                                <option value="ZM">Zambia</option>
                                                                                                <option value="ZW">Zimbabwe</option>
                                                                                        </select>
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Remarks</label>
                                                                                <div class="col-md-4">
                                                                                        <textarea class="form-control required" rows="3" name="remarks"></textarea>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- /Your Profile -->

                                                                <!--=== Billing Setup ===-->
                                                                <div class="tab-pane" id="tab3">
                                                                        <h3 class="block padding-bottom-10px">Provide your billing and credit card details</h3>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Card Holder Name <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <input type="text" class="form-control required" name="card_name" />
                                                                                </div>
                                                                        </div>

                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Card Number <span class="required">*</span></label>
                                                                                <div class="col-md-4">
                                                                                        <input type="text" class="form-control required" name="card_number"/>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- /Billing Setup -->

                                                                <!--=== Confirmation ===-->
                                                                <div class="tab-pane" id="tab4">
                                                                        <h3 class="block padding-bottom-10px">Confirm your account</h3>
                                                                        <h4 class="form-section">Account</h4>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Username:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="username"></p>
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Email:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="email"></p>
                                                                                </div>
                                                                        </div>
                                                                        <h4 class="form-section">Profile</h4>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Fullname:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="fullname"></p>
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Gender:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="gender"></p>
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Country:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="country"></p>
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Remarks:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="remarks"></p>
                                                                                </div>
                                                                        </div>
                                                                        <h4 class="form-section">Billing</h4>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Card Holder Name:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="card_name"></p>
                                                                                </div>
                                                                        </div>
                                                                        <div class="form-group">
                                                                                <label class="control-label col-md-3">Card Number:</label>
                                                                                <div class="col-md-4">
                                                                                        <p class="form-control-static" data-display="card_number"></p>
                                                                                </div>
                                                                        </div>
                                                                </div>
                                                                <!-- /Confirmation -->
                                                        </div>
                                                        <!-- /Tab Content -->
                                                </div>

                                                <!--=== Form Actions ===-->
                                                <div class="form-actions fluid">
                                                        <div class="row">
                                                                <div class="col-md-12">
                                                                        <div class="col-md-offset-3 col-md-9">
                                                                                <a href="javascript:void(0);" class="btn button-previous">
                                                                                        <i class="icon-angle-left"></i> Back
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="btn btn-primary button-next">
                                                                                        Continue <i class="icon-angle-right"></i>
                                                                                </a>
                                                                                <a href="javascript:void(0);" class="btn btn-success button-submit">
                                                                                        Submit <i class="icon-angle-right"></i>
                                                                                </a>
                                                                        </div>
                                                                </div>
                                                        </div>
                                                </div>
                                                <!-- /Form Actions -->
                                        </div>
                                </form>
                        </div>
                </div>
                <!-- /Form Wizard -->
        </div>
<!-- /Page Content -->
</div>