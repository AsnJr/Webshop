{include file="../templates/header.tpl" title="Webform order plaatsen"  username='klant'} 
<html>    
<title>Bestelingen Webshop </title>

<body id="main_body" >
	
	<img id="top" src="images/top.png" alt="">
	<div id="form_container">
	
		<h1><a>Webshop </a></h1>
		<form id="form_1120242" class="appnitro"  method="post" action="./includes/bestelform.php">
			<div class="form_description">
                            <h2>Bestelformulier</h2>
                            <p>Geef uw adresgegevens op voor afhandeling</p>
                        </div>						
			<ul >
			
	<li id="li_1" >
		<label class="description" for="element_1">Adres </label>
                
                <div>
			<input id="voornaam" name="voornaam" class="element text large" value="" type="text">
			<label for="voornaam">voornaam</label>
		</div>
	
                <div>
			<input id="achternaam" name="achternaam" class="element text large" value="" type="text">
			<label for="achternaam">achternaam</label>
		</div>
	
		
		<div>
			<input id="Straat" name="straat" class="element text large" value="" type="text">
			<label for="straat">Straat</label>
		</div>
	
		<div>
			<input id="straatnummer" name="straatnummer" class="element text large" value="" type="text">
			<label for="straatnummer">Nummer</label>
		</div>
	
		<div class="left">
			<input id="plaats" name="plaats" class="element text medium" value="" type="text">
			<label for="plaats">Plaats</label>
		</div>
	
		<div class="right">
			<input id="provincie" name="provincie" class="element text medium" value="" type="text">
			<label for="provincie">Provincie</label>
		</div>
	
		<div class="left">
			<input id="postcode" name="postcode" class="element text medium" maxlength="15" value="" type="text">
			<label for="postcode">Postcode</label>
		</div>
	
		<div class="right">
			<select class="element select medium" id="land" name="land"> 
			<option value="" selected="selected"></option>
                <option value="Afghanistan" >Afghanistan</option>
                <option value="Albania" >Albania</option>
                <option value="Algeria" >Algeria</option>
                <option value="Andorra" >Andorra</option>
                <option value="Antigua and Barbuda" >Antigua and Barbuda</option>
                <option value="Argentina" >Argentina</option>
                <option value="Armenia" >Armenia</option>
                <option value="Australia" >Australia</option>
                <option value="Austria" >Austria</option>
                <option value="Azerbaijan" >Azerbaijan</option>
                <option value="Bahamas" >Bahamas</option>
                <option value="Bahrain" >Bahrain</option>
                <option value="Bangladesh" >Bangladesh</option>
                <option value="Barbados" >Barbados</option>
                <option value="Belarus" >Belarus</option>
                <option value="Belgium" >Belgium</option>
                <option value="Belize" >Belize</option>
                <option value="Benin" >Benin</option>
                <option value="Bhutan" >Bhutan</option>
                <option value="Bolivia" >Bolivia</option>
                <option value="Bosnia and Herzegovina" >Bosnia and Herzegovina</option>
                <option value="Botswana" >Botswana</option>
                <option value="Brazil" >Brazil</option>
                <option value="Brunei" >Brunei</option>
                <option value="Bulgaria" >Bulgaria</option>
                <option value="Burkina Faso" >Burkina Faso</option>
                <option value="Burundi" >Burundi</option>
                <option value="Cambodia" >Cambodia</option>
                <option value="Cameroon" >Cameroon</option>
                <option value="Canada" >Canada</option>
                <option value="Cape Verde" >Cape Verde</option>
                <option value="Central African Republic" >Central African Republic</option>
                <option value="Chad" >Chad</option>
                <option value="Chile" >Chile</option>
                <option value="China" >China</option>
                <option value="Colombia" >Colombia</option>
                <option value="Comoros" >Comoros</option>
                <option value="Congo" >Congo</option>
                <option value="Cook Islands and Niue" >Cook Islands and Niue</option>
                <option value="Costa Rica" >Costa Rica</option>
                <option value="Côte d'Ivoire" >Côte d'Ivoire</option>
                <option value="Croatia" >Croatia</option>
                <option value="Cuba" >Cuba</option>
                <option value="Cyprus" >Cyprus</option>
                <option value="Czech Republic" >Czech Republic</option>
                <option value="Denmark" >Denmark</option>
                <option value="Djibouti" >Djibouti</option>
                <option value="Dominica" >Dominica</option>
                <option value="Dominican Republic" >Dominican Republic</option>
                <option value="East Timor" >East Timor</option>
                <option value="Ecuador" >Ecuador</option>
                <option value="Egypt" >Egypt</option>
                <option value="El Salvador" >El Salvador</option>
                <option value="Equatorial Guinea" >Equatorial Guinea</option>
                <option value="Eritrea" >Eritrea</option>
                <option value="Estonia" >Estonia</option>
                <option value="Ethiopia" >Ethiopia</option>
                <option value="Fiji" >Fiji</option>
                <option value="Finland" >Finland</option>
                <option value="France" >France</option>
                <option value="Gabon" >Gabon</option>
                <option value="Gambia" >Gambia</option>
                <option value="Georgia" >Georgia</option>
                <option value="Germany" >Germany</option>
                <option value="Ghana" >Ghana</option>
                <option value="Greece" >Greece</option>
                <option value="Grenada" >Grenada</option>
                <option value="Guatemala" >Guatemala</option>
                <option value="Guinea" >Guinea</option>
                <option value="Guinea-Bissau" >Guinea-Bissau</option>
                <option value="Guyana" >Guyana</option>
                <option value="Haiti" >Haiti</option>
                <option value="Honduras" >Honduras</option>
                <option value="Hong Kong" >Hong Kong</option>
                <option value="Hungary" >Hungary</option>
                <option value="Iceland" >Iceland</option>
                <option value="India" >India</option>
                <option value="Indonesia" >Indonesia</option>
                <option value="Iran" >Iran</option>
                <option value="Iraq" >Iraq</option>
                <option value="Ireland" >Ireland</option>
                <option value="Israel" >Israel</option>
                <option value="Italy" >Italy</option>
                <option value="Jamaica" >Jamaica</option>
                <option value="Japan" >Japan</option>
                <option value="Jordan" >Jordan</option>
                <option value="Kazakhstan" >Kazakhstan</option>
                <option value="Kenya" >Kenya</option>
                <option value="Kiribati" >Kiribati</option>
                <option value="North Korea" >North Korea</option>
                <option value="South Korea" >South Korea</option>
                <option value="Kuwait" >Kuwait</option>
                <option value="Kyrgyzstan" >Kyrgyzstan</option>
                <option value="Laos" >Laos</option>
                <option value="Latvia" >Latvia</option>
                <option value="Lebanon" >Lebanon</option>
                <option value="Lesotho" >Lesotho</option>
                <option value="Liberia" >Liberia</option>
                <option value="Libya" >Libya</option>
                <option value="Liechtenstein" >Liechtenstein</option>
                <option value="Lithuania" >Lithuania</option>
                <option value="Luxembourg" >Luxembourg</option>
                <option value="Macedonia" >Macedonia</option>
                <option value="Madagascar" >Madagascar</option>
                <option value="Malawi" >Malawi</option>
                <option value="Malaysia" >Malaysia</option>
                <option value="Maldives" >Maldives</option>
                <option value="Mali" >Mali</option>
                <option value="Malta" >Malta</option>
                <option value="Marshall Islands" >Marshall Islands</option>
                <option value="Mauritania" >Mauritania</option>
                <option value="Mauritius" >Mauritius</option>
                <option value="Mexico" >Mexico</option>
                <option value="Micronesia" >Micronesia</option>
                <option value="Moldova" >Moldova</option>
                <option value="Monaco" >Monaco</option>
                <option value="Mongolia" >Mongolia</option>
                <option value="Montenegro" >Montenegro</option>
                <option value="Morocco" >Morocco</option>
                <option value="Mozambique" >Mozambique</option>
                <option value="Myanmar" >Myanmar</option>
                <option value="Namibia" >Namibia</option>
                <option value="Nauru" >Nauru</option>
                <option value="Nepal" >Nepal</option>
                <option value="Netherlands" >Netherlands</option>
                <option value="New Zealand" >New Zealand</option>
                <option value="Nicaragua" >Nicaragua</option>
                <option value="Niger" >Niger</option>
                <option value="Nigeria" >Nigeria</option>
                <option value="Norway" >Norway</option>
                <option value="Oman" >Oman</option>
                <option value="Pakistan" >Pakistan</option>
                <option value="Palau" >Palau</option>
                <option value="Panama" >Panama</option>
                <option value="Papua New Guinea" >Papua New Guinea</option>
                <option value="Paraguay" >Paraguay</option>
                <option value="Peru" >Peru</option>
                <option value="Philippines" >Philippines</option>
                <option value="Poland" >Poland</option>
                <option value="Portugal" >Portugal</option>
                <option value="Puerto Rico" >Puerto Rico</option>
                <option value="Qatar" >Qatar</option>
                <option value="Romania" >Romania</option>
                <option value="Russia" >Russia</option>
                <option value="Rwanda" >Rwanda</option>
                <option value="Saint Kitts and Nevis" >Saint Kitts and Nevis</option>
                <option value="Saint Lucia" >Saint Lucia</option>
                <option value="Saint Vincent and the Grenadines" >Saint Vincent and the Grenadines</option>
                <option value="Samoa" >Samoa</option>
                <option value="San Marino" >San Marino</option>
                <option value="Sao Tome and Principe" >Sao Tome and Principe</option>
                <option value="Saudi Arabia" >Saudi Arabia</option>
                <option value="Senegal" >Senegal</option>
                <option value="Serbia and Montenegro" >Serbia and Montenegro</option>
                <option value="Seychelles" >Seychelles</option>
                <option value="Sierra Leone" >Sierra Leone</option>
                <option value="Singapore" >Singapore</option>
                <option value="Slovakia" >Slovakia</option>
                <option value="Slovenia" >Slovenia</option>
                <option value="Solomon Islands" >Solomon Islands</option>
                <option value="Somalia" >Somalia</option>
                <option value="South Africa" >South Africa</option>
                <option value="Spain" >Spain</option>
                <option value="Sri Lanka" >Sri Lanka</option>
                <option value="Sudan" >Sudan</option>
                <option value="Suriname" >Suriname</option>
                <option value="Swaziland" >Swaziland</option>
                <option value="Sweden" >Sweden</option>
                <option value="Switzerland" >Switzerland</option>
                <option value="Syria" >Syria</option>
                <option value="Taiwan" >Taiwan</option>
                <option value="Tajikistan" >Tajikistan</option>
                <option value="Tanzania" >Tanzania</option>
                <option value="Thailand" >Thailand</option>
                <option value="Togo" >Togo</option>
                <option value="Tonga" >Tonga</option>
                <option value="Trinidad and Tobago" >Trinidad and Tobago</option>
                <option value="Tunisia" >Tunisia</option>
                <option value="Turkey" >Turkey</option>
                <option value="Turkmenistan" >Turkmenistan</option>
                <option value="Tuvalu" >Tuvalu</option>
                <option value="Uganda" >Uganda</option>
                <option value="Ukraine" >Ukraine</option>
                <option value="United Arab Emirates" >United Arab Emirates</option>
                <option value="United Kingdom" >United Kingdom</option>
                <option value="United States" >United States</option>
                <option value="Uruguay" >Uruguay</option>
                <option value="Uzbekistan" >Uzbekistan</option>
                <option value="Vanuatu" >Vanuatu</option>
                <option value="Vatican City" >Vatican City</option>
                <option value="Venezuela" >Venezuela</option>
                <option value="Vietnam" >Vietnam</option>
                <option value="Yemen" >Yemen</option>
                <option value="Zambia" >Zambia</option>
                <option value="Zimbabwe" >Zimbabwe</option>
	
			</select>
		<label for="land">Land</label>
                </div> 
                <div class="left">
			<input id="telefoon" name="telefoon" class="element text medium" maxlength="15" value="" type="text">
			<label for="telefoon">telefoon</label>
		</div>
		</li>		<li id="li_2" >
		<label class="description" for="email">Email </label>
		<div>
			<input id="element_2" name="email" class="element text medium" type="email" maxlength="255" value=""/> 
		</div> 
		</li>		<li id="li_3" >
		<label class="description" for="afhandeling">Aflevering en betaling </label>
		<span>
			<input id="element_3_1" name="rembours" class="element checkbox" type="checkbox" value="1" />
                        <label class="choice" for="rembours">Rembours</label>
                        <input id="element_3_2" name="Vooruitbetaling" class="element checkbox" type="checkbox" value="1" />
                        <label class="choice" for="Vooruitbetaling">Vooruitbetaling</label>
                        <input id="element_3_3" name="Paypal" class="element checkbox" type="checkbox" value="1" />
                        <label class="choice" for="Paypal">Paypal</label>

		</span> 
		</li>		
                
                <li id="li_4" >
		<label class="description" for="levering">Drop Down </label>
		<div>
		<select class="element select medium" id="element_4" name="levering"> 
			<option value="" selected="selected"></option>
                        <option value="1" >Spoed</option>
                        <option value="2" >Bloed Spoed</option>
                        <option value="3" >Onmiddelijk</option>

		</select>
		</div> 
                </li>
                <!--  selected items for shopping -->
                <div class="container">
                    <table class="table table-bordered">
                

                       {foreach from=$order_regels key=Id item=row}
                        <tr bgcolor=white>
                        <td>{$row.productID}</td>
                        <td>{$row.name}</td>
                        <td>{$row.aantal}</td>
                        <td>{$row.subtotal}</td></tr>
                        {/foreach}
                        
                    </table>
                </div>
                
		<li class="buttons">
                    <!--<input type="hidden" name="INVOEREN" value="1120242" />-->
                    <input type="hidden" name="INVOEREN" value="INVOEREN" />
                    <input id="saveForm" class="button_text" type="submit" name="INVOEREN" value="BESTELLING PLAATSEN" />
		</li>
			</ul>
                    
                    
                
		</form>	
		
	</div>
     
	
	</body>
</html>