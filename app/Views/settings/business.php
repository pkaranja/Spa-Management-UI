<?= $this->extend('layouts/settings') ?>

<?= $this->section('settings') ?>

<?= print_r($data); ?>
<div class="row">
  <div class="col-12">
      <form action="<?= site_url('business/update'); ?>" method="POST" accept-charset="UTF-8">
        <?= csrf_field() ?>
        <div class="row">
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="businessname" class="form-label fw-semibold">Business Name *</label>
                <input type="text" class="form-control" id="businessname" name="businessname" value="" required placeholder="Business Name">
              </div>
              <div class="mb-4">
                <label for="phone" class="form-label fw-semibold">Phone number *</label>
                <input type="tel" class="form-control" id="phone" name="phone" required placeholder="Phone number">
              </div>
              <div class="mb-4">
                <label for="mobile" class="form-label fw-semibold">Mobile</label>
                <input type="text" class="form-control" id="mobile" name="mobile" required placeholder="Mobile">
              </div>
              <div class="mb-4">
                <label for="city" class="form-label fw-semibold">City</label>
                <input type="text" class="form-control" id="city" name="city" required placeholder="City">
              </div>
              <div class="mb-4">
                <label for="days" class="form-label fw-semibold">Days open</label>
                <select class="form-control multiselect" id="days" name="days" multiple required>
                  <option value="Monday" label="Monday">Monday</option>
                  <option value="Tuesday" label="Tuesday">Tuesday</option>
                  <option value="Wednesday" label="Wednesday">Wednesday</option>
                  <option value="Thursday" label="Thursday">Thursday</option>
                  <option value="Friday" label="Friday">Friday</option>
                  <option value="Saturday" label="Saturday">Saturday</option>
                  <option value="Sunday" label="Sunday">Sunday</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="opening" class="form-label fw-semibold">Opening time</label>
                <input type="time" class="form-control" id="opening" name="opening" placeholder="Opening time">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="mb-4">
                <label for="logo" class="form-label fw-semibold">Logo *</label>
                <input type="file" class="form-control" id="logo" name="logo" required placeholder="Upload logo">
              </div>
              <div class="mb-4">
                <label for="email" class="form-label fw-semibold">Email address *</label>
                <input type="email" class="form-control" id="email" name="email" required placeholder="Email address">
              </div>
              <div class="mb-4">
                <label for="currency" class="form-label fw-semibold">Currency *</label>
                <select class="form-control" id="currency" name="currency" required>
                  <option value="TZS" selected="selected" label="Tanzanian shilling">TZS</option>
                  <option value="USD" label="US dollar">USD</option>
                  <option value="EUR" label="Euro">EUR</option>
                  <option value="JPY" label="Japanese yen">JPY</option>
                  <option value="GBP" label="Pound sterling">GBP</option>
                  <option disabled>──────────</option>
                  <option value="AED" label="United Arab Emirates dirham">AED</option>
                  <option value="AFN" label="Afghan afghani">AFN</option>
                  <option value="ALL" label="Albanian lek">ALL</option>
                  <option value="AMD" label="Armenian dram">AMD</option>
                  <option value="ANG" label="Netherlands Antillean guilder">ANG</option>
                  <option value="AOA" label="Angolan kwanza">AOA</option>
                  <option value="ARS" label="Argentine peso">ARS</option>
                  <option value="AUD" label="Australian dollar">AUD</option>
                  <option value="AWG" label="Aruban florin">AWG</option>
                  <option value="AZN" label="Azerbaijani manat">AZN</option>
                  <option value="BAM" label="Bosnia and Herzegovina convertible mark">BAM</option>
                  <option value="BBD" label="Barbadian dollar">BBD</option>
                  <option value="BDT" label="Bangladeshi taka">BDT</option>
                  <option value="BGN" label="Bulgarian lev">BGN</option>
                  <option value="BHD" label="Bahraini dinar">BHD</option>
                  <option value="BIF" label="Burundian franc">BIF</option>
                  <option value="BMD" label="Bermudian dollar">BMD</option>
                  <option value="BND" label="Brunei dollar">BND</option>
                  <option value="BOB" label="Bolivian boliviano">BOB</option>
                  <option value="BRL" label="Brazilian real">BRL</option>
                  <option value="BSD" label="Bahamian dollar">BSD</option>
                  <option value="BTN" label="Bhutanese ngultrum">BTN</option>
                  <option value="BWP" label="Botswana pula">BWP</option>
                  <option value="BYN" label="Belarusian ruble">BYN</option>
                  <option value="BZD" label="Belize dollar">BZD</option>
                  <option value="CAD" label="Canadian dollar">CAD</option>
                  <option value="CDF" label="Congolese franc">CDF</option>
                  <option value="CHF" label="Swiss franc">CHF</option>
                  <option value="CLP" label="Chilean peso">CLP</option>
                  <option value="CNY" label="Chinese yuan">CNY</option>
                  <option value="COP" label="Colombian peso">COP</option>
                  <option value="CRC" label="Costa Rican colón">CRC</option>
                  <option value="CUC" label="Cuban convertible peso">CUC</option>
                  <option value="CUP" label="Cuban peso">CUP</option>
                  <option value="CVE" label="Cape Verdean escudo">CVE</option>
                  <option value="CZK" label="Czech koruna">CZK</option>
                  <option value="DJF" label="Djiboutian franc">DJF</option>
                  <option value="DKK" label="Danish krone">DKK</option>
                  <option value="DOP" label="Dominican peso">DOP</option>
                  <option value="DZD" label="Algerian dinar">DZD</option>
                  <option value="EGP" label="Egyptian pound">EGP</option>
                  <option value="ERN" label="Eritrean nakfa">ERN</option>
                  <option value="ETB" label="Ethiopian birr">ETB</option>
                  <option value="EUR" label="EURO">EUR</option>
                  <option value="FJD" label="Fijian dollar">FJD</option>
                  <option value="FKP" label="Falkland Islands pound">FKP</option>
                  <option value="GBP" label="British pound">GBP</option>
                  <option value="GEL" label="Georgian lari">GEL</option>
                  <option value="GGP" label="Guernsey pound">GGP</option>
                  <option value="GHS" label="Ghanaian cedi">GHS</option>
                  <option value="GIP" label="Gibraltar pound">GIP</option>
                  <option value="GMD" label="Gambian dalasi">GMD</option>
                  <option value="GNF" label="Guinean franc">GNF</option>
                  <option value="GTQ" label="Guatemalan quetzal">GTQ</option>
                  <option value="GYD" label="Guyanese dollar">GYD</option>
                  <option value="HKD" label="Hong Kong dollar">HKD</option>
                  <option value="HNL" label="Honduran lempira">HNL</option>
                  <option value="HRK" label="Croatian kuna">HRK</option>
                  <option value="HTG" label="Haitian gourde">HTG</option>
                  <option value="HUF" label="Hungarian forint">HUF</option>
                  <option value="IDR" label="Indonesian rupiah">IDR</option>
                  <option value="ILS" label="Israeli new shekel">ILS</option>
                  <option value="IMP" label="Manx pound">IMP</option>
                  <option value="INR" label="Indian rupee">INR</option>
                  <option value="IQD" label="Iraqi dinar">IQD</option>
                  <option value="IRR" label="Iranian rial">IRR</option>
                  <option value="ISK" label="Icelandic króna">ISK</option>
                  <option value="JEP" label="Jersey pound">JEP</option>
                  <option value="JMD" label="Jamaican dollar">JMD</option>
                  <option value="JOD" label="Jordanian dinar">JOD</option>
                  <option value="JPY" label="Japanese yen">JPY</option>
                  <option value="KES" label="Kenyan shilling">KES</option>
                  <option value="KGS" label="Kyrgyzstani som">KGS</option>
                  <option value="KHR" label="Cambodian riel">KHR</option>
                  <option value="KID" label="Kiribati dollar">KID</option>
                  <option value="KMF" label="Comorian franc">KMF</option>
                  <option value="KPW" label="North Korean won">KPW</option>
                  <option value="KRW" label="South Korean won">KRW</option>
                  <option value="KWD" label="Kuwaiti dinar">KWD</option>
                  <option value="KYD" label="Cayman Islands dollar">KYD</option>
                  <option value="KZT" label="Kazakhstani tenge">KZT</option>
                  <option value="LAK" label="Lao kip">LAK</option>
                  <option value="LBP" label="Lebanese pound">LBP</option>
                  <option value="LKR" label="Sri Lankan rupee">LKR</option>
                  <option value="LRD" label="Liberian dollar">LRD</option>
                  <option value="LSL" label="Lesotho loti">LSL</option>
                  <option value="LYD" label="Libyan dinar">LYD</option>
                  <option value="MAD" label="Moroccan dirham">MAD</option>
                  <option value="MDL" label="Moldovan leu">MDL</option>
                  <option value="MGA" label="Malagasy ariary">MGA</option>
                  <option value="MKD" label="Macedonian denar">MKD</option>
                  <option value="MMK" label="Burmese kyat">MMK</option>
                  <option value="MNT" label="Mongolian tögrög">MNT</option>
                  <option value="MOP" label="Macanese pataca">MOP</option>
                  <option value="MRU" label="Mauritanian ouguiya">MRU</option>
                  <option value="MUR" label="Mauritian rupee">MUR</option>
                  <option value="MVR" label="Maldivian rufiyaa">MVR</option>
                  <option value="MWK" label="Malawian kwacha">MWK</option>
                  <option value="MXN" label="Mexican peso">MXN</option>
                  <option value="MYR" label="Malaysian ringgit">MYR</option>
                  <option value="MZN" label="Mozambican metical">MZN</option>
                  <option value="NAD" label="Namibian dollar">NAD</option>
                  <option value="NGN" label="Nigerian naira">NGN</option>
                  <option value="NIO" label="Nicaraguan córdoba">NIO</option>
                  <option value="NOK" label="Norwegian krone">NOK</option>
                  <option value="NPR" label="Nepalese rupee">NPR</option>
                  <option value="NZD" label="New Zealand dollar">NZD</option>
                  <option value="OMR" label="Omani rial">OMR</option>
                  <option value="PAB" label="Panamanian balboa">PAB</option>
                  <option value="PEN" label="Peruvian sol">PEN</option>
                  <option value="PGK" label="Papua New Guinean kina">PGK</option>
                  <option value="PHP" label="Philippine peso">PHP</option>
                  <option value="PKR" label="Pakistani rupee">PKR</option>
                  <option value="PLN" label="Polish złoty">PLN</option>
                  <option value="PRB" label="Transnistrian ruble">PRB</option>
                  <option value="PYG" label="Paraguayan guaraní">PYG</option>
                  <option value="QAR" label="Qatari riyal">QAR</option>
                  <option value="RON" label="Romanian leu">RON</option>
                  <option value="RSD" label="Serbian dinar">RSD</option>
                  <option value="RUB" label="Russian ruble">RUB</option>
                  <option value="RWF" label="Rwandan franc">RWF</option>
                  <option value="SAR" label="Saudi riyal">SAR</option>
                  <option value="SEK" label="Swedish krona">SEK</option>
                  <option value="SGD" label="Singapore dollar">SGD</option>
                  <option value="SHP" label="Saint Helena pound">SHP</option>
                  <option value="SLL" label="Sierra Leonean leone">SLL</option>
                  <option value="SLS" label="Somaliland shilling">SLS</option>
                  <option value="SOS" label="Somali shilling">SOS</option>
                  <option value="SRD" label="Surinamese dollar">SRD</option>
                  <option value="SSP" label="South Sudanese pound">SSP</option>
                  <option value="STN" label="São Tomé and Príncipe dobra">STN</option>
                  <option value="SYP" label="Syrian pound">SYP</option>
                  <option value="SZL" label="Swazi lilangeni">SZL</option>
                  <option value="THB" label="Thai baht">THB</option>
                  <option value="TJS" label="Tajikistani somoni">TJS</option>
                  <option value="TMT" label="Turkmenistan manat">TMT</option>
                  <option value="TND" label="Tunisian dinar">TND</option>
                  <option value="TOP" label="Tongan paʻanga">TOP</option>
                  <option value="TRY" label="Turkish lira">TRY</option>
                  <option value="TTD" label="Trinidad and Tobago dollar">TTD</option>
                  <option value="TVD" label="Tuvaluan dollar">TVD</option>
                  <option value="TWD" label="New Taiwan dollar">TWD</option>
                  <option value="UAH" label="Ukrainian hryvnia">UAH</option>
                  <option value="UGX" label="Ugandan shilling">UGX</option>
                  <option value="USD" label="United States dollar">USD</option>
                  <option value="UYU" label="Uruguayan peso">UYU</option>
                  <option value="UZS" label="Uzbekistani soʻm">UZS</option>
                  <option value="VES" label="Venezuelan bolívar soberano">VES</option>
                  <option value="VND" label="Vietnamese đồng">VND</option>
                  <option value="VUV" label="Vanuatu vatu">VUV</option>
                  <option value="WST" label="Samoan tālā">WST</option>
                  <option value="XAF" label="Central African CFA franc">XAF</option>
                  <option value="XCD" label="Eastern Caribbean dollar">XCD</option>
                  <option value="XOF" label="West African CFA franc">XOF</option>
                  <option value="XPF" label="CFP franc">XPF</option>
                  <option value="ZAR" label="South African rand">ZAR</option>
                  <option value="ZMW" label="Zambian kwacha">ZMW</option>
                  <option value="ZWB" label="Zimbabwean bonds">ZWB</option>
              </select>
              </div>
              <div class="mb-4">
                <label for="country" class="form-label fw-semibold">Country *</label>
                <select id="country" name="country" class="form-control" required>
                    <option value="Afghanistan">Afghanistan</option>
                    <option value="Aland Islands">Aland Islands</option>
                    <option value="Albania">Albania</option>
                    <option value="Algeria">Algeria</option>
                    <option value="American Samoa">American Samoa</option>
                    <option value="Andorra">Andorra</option>
                    <option value="Angola">Angola</option>
                    <option value="Anguilla">Anguilla</option>
                    <option value="Antarctica">Antarctica</option>
                    <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                    <option value="Argentina">Argentina</option>
                    <option value="Armenia">Armenia</option>
                    <option value="Aruba">Aruba</option>
                    <option value="Australia">Australia</option>
                    <option value="Austria">Austria</option>
                    <option value="Azerbaijan">Azerbaijan</option>
                    <option value="Bahamas">Bahamas</option>
                    <option value="Bahrain">Bahrain</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Barbados">Barbados</option>
                    <option value="Belarus">Belarus</option>
                    <option value="Belgium">Belgium</option>
                    <option value="Belize">Belize</option>
                    <option value="Benin">Benin</option>
                    <option value="Bermuda">Bermuda</option>
                    <option value="Bhutan">Bhutan</option>
                    <option value="Bolivia">Bolivia</option>
                    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                    <option value="Botswana">Botswana</option>
                    <option value="Bouvet Island">Bouvet Island</option>
                    <option value="Brazil">Brazil</option>
                    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
                    <option value="Brunei Darussalam">Brunei Darussalam</option>
                    <option value="Bulgaria">Bulgaria</option>
                    <option value="Burkina Faso">Burkina Faso</option>
                    <option value="Burundi">Burundi</option>
                    <option value="Cambodia">Cambodia</option>
                    <option value="Cameroon">Cameroon</option>
                    <option value="Canada">Canada</option>
                    <option value="Cape Verde">Cape Verde</option>
                    <option value="Cayman Islands">Cayman Islands</option>
                    <option value="Central African Republic">Central African Republic</option>
                    <option value="Chad">Chad</option>
                    <option value="Chile">Chile</option>
                    <option value="China">China</option>
                    <option value="Christmas Island">Christmas Island</option>
                    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Comoros">Comoros</option>
                    <option value="Congo">Congo</option>
                    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option>
                    <option value="Cook Islands">Cook Islands</option>
                    <option value="Costa Rica">Costa Rica</option>
                    <option value="Cote D'ivoire">Cote D'ivoire</option>
                    <option value="Croatia">Croatia</option>
                    <option value="Cuba">Cuba</option>
                    <option value="Cyprus">Cyprus</option>
                    <option value="Czech Republic">Czech Republic</option>
                    <option value="Denmark">Denmark</option>
                    <option value="Djibouti">Djibouti</option>
                    <option value="Dominica">Dominica</option>
                    <option value="Dominican Republic">Dominican Republic</option>
                    <option value="Ecuador">Ecuador</option>
                    <option value="Egypt">Egypt</option>
                    <option value="El Salvador">El Salvador</option>
                    <option value="Equatorial Guinea">Equatorial Guinea</option>
                    <option value="Eritrea">Eritrea</option>
                    <option value="Estonia">Estonia</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
                    <option value="Faroe Islands">Faroe Islands</option>
                    <option value="Fiji">Fiji</option>
                    <option value="Finland">Finland</option>
                    <option value="France">France</option>
                    <option value="French Guiana">French Guiana</option>
                    <option value="French Polynesia">French Polynesia</option>
                    <option value="French Southern Territories">French Southern Territories</option>
                    <option value="Gabon">Gabon</option>
                    <option value="Gambia">Gambia</option>
                    <option value="Georgia">Georgia</option>
                    <option value="Germany">Germany</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Gibraltar">Gibraltar</option>
                    <option value="Greece">Greece</option>
                    <option value="Greenland">Greenland</option>
                    <option value="Grenada">Grenada</option>
                    <option value="Guadeloupe">Guadeloupe</option>
                    <option value="Guam">Guam</option>
                    <option value="Guatemala">Guatemala</option>
                    <option value="Guernsey">Guernsey</option>
                    <option value="Guinea">Guinea</option>
                    <option value="Guinea-bissau">Guinea-bissau</option>
                    <option value="Guyana">Guyana</option>
                    <option value="Haiti">Haiti</option>
                    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option>
                    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option>
                    <option value="Honduras">Honduras</option>
                    <option value="Hong Kong">Hong Kong</option>
                    <option value="Hungary">Hungary</option>
                    <option value="Iceland">Iceland</option>
                    <option value="India">India</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option>
                    <option value="Iraq">Iraq</option>
                    <option value="Ireland">Ireland</option>
                    <option value="Isle of Man">Isle of Man</option>
                    <option value="Israel">Israel</option>
                    <option value="Italy">Italy</option>
                    <option value="Jamaica">Jamaica</option>
                    <option value="Japan">Japan</option>
                    <option value="Jersey">Jersey</option>
                    <option value="Jordan">Jordan</option>
                    <option value="Kazakhstan">Kazakhstan</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Kiribati">Kiribati</option>
                    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option>
                    <option value="Korea, Republic of">Korea, Republic of</option>
                    <option value="Kuwait">Kuwait</option>
                    <option value="Kyrgyzstan">Kyrgyzstan</option>
                    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
                    <option value="Latvia">Latvia</option>
                    <option value="Lebanon">Lebanon</option>
                    <option value="Lesotho">Lesotho</option>
                    <option value="Liberia">Liberia</option>
                    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
                    <option value="Liechtenstein">Liechtenstein</option>
                    <option value="Lithuania">Lithuania</option>
                    <option value="Luxembourg">Luxembourg</option>
                    <option value="Macao">Macao</option>
                    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option>
                    <option value="Madagascar">Madagascar</option>
                    <option value="Malawi">Malawi</option>
                    <option value="Malaysia">Malaysia</option>
                    <option value="Maldives">Maldives</option>
                    <option value="Mali">Mali</option>
                    <option value="Malta">Malta</option>
                    <option value="Marshall Islands">Marshall Islands</option>
                    <option value="Martinique">Martinique</option>
                    <option value="Mauritania">Mauritania</option>
                    <option value="Mauritius">Mauritius</option>
                    <option value="Mayotte">Mayotte</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option>
                    <option value="Moldova, Republic of">Moldova, Republic of</option>
                    <option value="Monaco">Monaco</option>
                    <option value="Mongolia">Mongolia</option>
                    <option value="Montenegro">Montenegro</option>
                    <option value="Montserrat">Montserrat</option>
                    <option value="Morocco">Morocco</option>
                    <option value="Mozambique">Mozambique</option>
                    <option value="Myanmar">Myanmar</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Nauru">Nauru</option>
                    <option value="Nepal">Nepal</option>
                    <option value="Netherlands">Netherlands</option>
                    <option value="Netherlands Antilles">Netherlands Antilles</option>
                    <option value="New Caledonia">New Caledonia</option>
                    <option value="New Zealand">New Zealand</option>
                    <option value="Nicaragua">Nicaragua</option>
                    <option value="Niger">Niger</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Niue">Niue</option>
                    <option value="Norfolk Island">Norfolk Island</option>
                    <option value="Northern Mariana Islands">Northern Mariana Islands</option>
                    <option value="Norway">Norway</option>
                    <option value="Oman">Oman</option>
                    <option value="Pakistan">Pakistan</option>
                    <option value="Palau">Palau</option>
                    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option>
                    <option value="Panama">Panama</option>
                    <option value="Papua New Guinea">Papua New Guinea</option>
                    <option value="Paraguay">Paraguay</option>
                    <option value="Peru">Peru</option>
                    <option value="Philippines">Philippines</option>
                    <option value="Pitcairn">Pitcairn</option>
                    <option value="Poland">Poland</option>
                    <option value="Portugal">Portugal</option>
                    <option value="Puerto Rico">Puerto Rico</option>
                    <option value="Qatar">Qatar</option>
                    <option value="Reunion">Reunion</option>
                    <option value="Romania">Romania</option>
                    <option value="Russian Federation">Russian Federation</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Saint Helena">Saint Helena</option>
                    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                    <option value="Saint Lucia">Saint Lucia</option>
                    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option>
                    <option value="Samoa">Samoa</option>
                    <option value="San Marino">San Marino</option>
                    <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                    <option value="Saudi Arabia">Saudi Arabia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Serbia">Serbia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Sierra Leone">Sierra Leone</option>
                    <option value="Singapore">Singapore</option>
                    <option value="Slovakia">Slovakia</option>
                    <option value="Slovenia">Slovenia</option>
                    <option value="Solomon Islands">Solomon Islands</option>
                    <option value="Somalia">Somalia</option>
                    <option value="South Africa">South Africa</option>
                    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option>
                    <option value="Spain">Spain</option>
                    <option value="Sri Lanka">Sri Lanka</option>
                    <option value="Sudan">Sudan</option>
                    <option value="Suriname">Suriname</option>
                    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option>
                    <option value="Swaziland">Swaziland</option>
                    <option value="Sweden">Sweden</option>
                    <option value="Switzerland">Switzerland</option>
                    <option value="Syrian Arab Republic">Syrian Arab Republic</option>
                    <option value="Taiwan">Taiwan</option>
                    <option value="Tajikistan">Tajikistan</option>
                    <option value="Tanzania" selected="selected">Tanzania</option>
                    <option value="Thailand">Thailand</option>
                    <option value="Timor-leste">Timor-leste</option>
                    <option value="Togo">Togo</option>
                    <option value="Tokelau">Tokelau</option>
                    <option value="Tonga">Tonga</option>
                    <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Turkey">Turkey</option>
                    <option value="Turkmenistan">Turkmenistan</option>
                    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
                    <option value="Tuvalu">Tuvalu</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Ukraine">Ukraine</option>
                    <option value="United Arab Emirates">United Arab Emirates</option>
                    <option value="United Kingdom">United Kingdom</option>
                    <option value="United States">United States</option>
                    <option value="Uruguay">Uruguay</option>
                    <option value="Uzbekistan">Uzbekistan</option>
                    <option value="Vanuatu">Vanuatu</option>
                    <option value="Venezuela">Venezuela</option>
                    <option value="Viet Nam">Viet Nam</option>
                    <option value="Virgin Islands, British">Virgin Islands, British</option>
                    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option>
                    <option value="Wallis and Futuna">Wallis and Futuna</option>
                    <option value="Western Sahara">Western Sahara</option>
                    <option value="Yemen">Yemen</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Zimbabwe">Zimbabwe</option>
                </select>
              </div>
              <div class="mb-4">
                <label for="closing" class="form-label fw-semibold">Closing time *</label>
                <input type="time" class="form-control" id="closing" name="closing" required placeholder="Closing time">
              </div>
            </div>

            <div class="col-lg-12">
                <div class="mb-4">
                    <label for="remarks" class="form-label fw-semibold">Business description</label>
                    <textarea class="form-control" name="description" id="description" rows="3" placeholder="Enter description here..."></textarea>
                </div>
            </div>
            <div class="col-12">
              <div class="d-flex gap-3">
                <button type="submit" class="btn btn-primary">Save Details</button>
              </div>
            </div>
        </form>
  </div>
</div>
<?= $this->endSection() ?>