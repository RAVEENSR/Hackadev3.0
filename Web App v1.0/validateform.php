<?php 
include ("headfile.php"); 
?>
<title>Approved</title>  
	    <div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <h4 class="header center orange-text">Request Confirmation / ඉල්ලීම තහවුරු කිරීම / வேண்டுகோள் உறுதிப்படுத்தல்</h4>
            <div class="row center">
            </div>
        </div>
    </div>
<div class="container">
        <div class="section">
  			<div id="transport" class="col s12">
  				<div class="row">
                <div class="col s12 m2 l1"></div>
                <div class="col s12 m8 l10">
                    <div class="row">
                        <form class="col s12" action="val.php" method="post">
                            <div class="row">
                                <div class="input-field col s12">
                                    <input size="12" maxlength="12" id="name" type="text" class="validate" name="name" required> 
                                    <label for="name">Name /නම /பெயர்</label>
                                </div>
                            </div>
                            <div class="row">
                                <div class="input-field col s12">
                                    <input  id="nic" type="text" class="validate" name="nic" required> 
                                    <label for="nic">National Identity Card No (NIC) / ජාතික හැඳුනුම්පත් අංකය / தேசிய அடையாள அட்டை எண்</label>
                                </div>
                            </div>
                            <div class="row">
								<div class="input-field col s12">
							    	<select id="serviceType" name="serviceType" required>
							      		<option value="" selected>Choose your option / වර්ගය තෝරන්න / தேர்வு</option>
							      		<option value="Health">Health</option>
							      		<option value="Cleaning">Cleaning</option>
							      		<option value="Mechanics">Mechanics</option>
							    	</select>
							    	<label for="serviceType">Service / සේවා තෝරන්න / சேவை தேர்வு වර්ගය/ வாகன வகை</label>
								</div>
							</div>
                            <div class="row">
                                <div class="input-field col s12">
                                	<textarea id="comments" class="materialize-textarea" name="comments"></textarea>
          							<label for="comments">Description / විස්තර / விளக்கம்</label>
                                </div>
                            </div>
               
                            <div class="row">
                                <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                                    <i class="material-icons right">send</i>
                                </button>
                                <button class="btn waves-effect waves-light" type="reset" name="reset">Reset
                                    <i class="material-icons right">clear_all</i>
                                </button>
                            </div>
                        </form>
                      </div>
                </div>
                <div class="col s12 m2 l1"></div>
            </div>
            </div>

<?php include("footfile.html"); ?>

