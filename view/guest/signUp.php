<div id="content-wrap">
  <div id="content">
      <div id="columnA">
            <div class="content bg1">
             
               <h1>Registrati adesso!</h1>  
<p>Tutti i campi sono obbligatori! (Almeno 4 caratteri)</p>  
<form id="signUp" action="index.php?action=signup" method="post">  
<ul>  
 
    
                 
               <h1>Registrati adesso!</h1>  
               <p id="errori"></p>
                        
<form id="signUp" action="index.php?action=signup" method="post">  
<ul>  
   
<li><label>Email:</label></li>  
<li><input type="text"  id="email" name="email"  size="30"  onblur="checkField(this.id, this.value)" required  /> <p></p>
<span class="error" id="email_error">
</span>
</li>  

<li><label>Username:</label></li>  
<li><input type="text" id="username" name="username" size="30" onblur="checkField(this.id, this.value)"  required /> <p></p>
<span class="error" id="username_error">
</span>
</li>

<li><label>Password:</label></li>  
<li><input type="password" id="password" name="password" size="30" onblur="checkField(this.id, this.value)" required/> <p></p>
    <span class="error" id="password_error">
</span>
</li> 

<li><label>Confirm:</label></li>  
<li><input type="password" id="confirm" name="confirm" size="30" onblur="checkField(this.id, this.value)" required/> <p></p>  
<span class="error" id="confirm_error">
</span>
</li>

<li><label>Name:</label></li>  
<li><input type="text" id="name" name="name" size="30" onblur="checkField(this.id, this.value)" required/><p></p>
<span class="error" id="name_error">
</span>
</li> 

<li><label>Surname:</label></li>  
<li><input type="text" id="surname" name="surname" size="30" onblur="checkField(this.id, this.value)" required/><p></p>
<span class="error" id="surname_error">
</span>
</li> 

<li><label>Street:</label></li>  
<li><input type="text" id="street" name="street" size="30" onblur="checkField(this.id, this.value)" required/><p></p>
<span class="error" id="street_error">
</span>
</li> 

<li><label>Number:</label></li>  
<li><input type="text" id="number" name="number" size="30" onblur="checkField(this.id, this.value)" required/><p></p>
<span class="error" id="number_error">
</span>
</li> 

<li><label>City:</label></li>  
<li><input type="text" id="city" name="city" size="30" onblur="checkField(this.id, this.value)" required/> <p></p>
<span class="error" id="city_error">
</span>
</li>

<li><label>Postal Code:</label></li>  
<li><input type="text" id="postalCode" name="postalCode" size="30" onblur="checkField(this.id, this.value)" required/> <p></p>
<span class="error" id="postalCode_error">
</span>
</li>
<li><label>State:</label></li>  
<li><input type="text" id="state" name="state" size="30" onblur="checkField(this.id, this.value)" required/><p></p>
<span class="error" id="state_error">
</span>
</li> 
  
<li><input type="submit"  id="submit_registration"  name="submit_registration" value="Sign Up" /></li>  
</ul>  
</form>  
    
    
    
    
    <!--
<li><label>Email:</label></li>  
<li><input type="text"  id="email" name="email" value="" size="30" required /></li>  

<li><label>Username:</label></li>  
<li><input type="text" id="r_username" name="username" size="30" required/></li>

<li><label>Password:</label></li>  
<li><input type="password" id="r_password" name="password" size="30" required/></li> 

<li><label>Confirm:</label></li>  
<li><input type="password" id="confirm" name="confirm" size="30" required/></li>   

<li><label>Name:</label></li>  
<li><input type="text" id="name" name="name" size="30" required/></li> 

<li><label>Surname:</label></li>  
<li><input type="text" id="surname" name="surname" size="30" required/></li>

<li><label>Street:</label></li>  
<li><input type="text" id="street" name="street" size="30" required/></li>

<li><label>Number:</label></li>  
<li><input type="text" id="number" name="number" size="30" required/></li>

<li><label>City:</label></li>  
<li><input type="text" id="city" name="city" size="30" required/></li>

<li><label>Postal Code:</label></li>  
<li><input type="text" id="postalCode" name="postalCode" size="30" required/></li>

<li><label>State:</label></li>  
<li><input type="text" id="state" name="state" size="30" required/></li>
  
<li><input type="submit" id="submit_registration" name="submit_registration" value="Sign Up" /></li>  
</ul>  
</form>   
          <!--      
                <h2>Registrati ora!</h2>
           <ul>     
               <form id="signUp" action="index.php?action=signup" method="post">
                
                    <label>Email:</label>
                    <input type="text" id="email" name="email" value="" />
                
			<p></p>
                    <label>Username:</label>
                    <input type="text" id="r_username" name="username" value="" />
                
                    <p></p>
                    <label>Password:</label>
                    <input type="password" id="r_password" name="password" value="" />
                
			<p></p>
                    <label>Confirm the password:</label>
                    <input type="password" id="confirm" name="confirm" value="" />
			 <p></p>
                    <label>Name:</label>
                    <input type="text" id="name" name="name" value="" />
			<p></p>
                    <label>Surname:</label>
                    <input type="text" id="surname" name="surname" value="" />
			 <p></p>
                    <label>Street:</label>
                    <input type="text" id="street" name="street" value="" />
			<p></p>
                    <label>Number:</label>
                    <input type="text" id="number" name="number" value="" />
			 <p></p>
                    <label>City:</label>
                    <input type="text" id="city" name="city" value="" />
			<p></p>
                    <label>Postal Code:</label>
                    <input type="text" id="postalCode" name="postalCode" value="" />
			 <p></p>
                    <label>State:</label>
                    <input type="text" id="state" name="state" value="" />
                     <p></p>
                    <input type="submit" id="submit_registration" name="submit_registration" value="Sign Up" />
                </form>         
           </ul>  </div> -->
                   
  </div></div>
</div>
</div>