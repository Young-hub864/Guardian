<?php include 'header.php'; ?>
<div class="container">
   <div class="logo text-center">
      <a href="../index.php">
      <img src="../images/guardian_logo.png" class="site-logo">
      </a>
   </div>
</div>
<div id="menuArea" class="nav-menu-main">
   <input type="checkbox" id="menuToggle">
   <label for="menuToggle" class="menuOpen">
      <div class="open-lines">
      </div>
   </label>
   <div class="nav-menu menuEffects">
      <label for="menuToggle"></label>
      <div class="menuContent">
         <ul class="main-menu">
            <li><a href="index.php">Home</li>
            </a>
            <li><a href="#">Fact Check</li>
            </a>
         </ul>
      </div>
   </div>
</div>
<div class="container">
<ul id="registration-step">
   <li id="account" class="highlight">Change Of Name
   </li>
   <li id="password">Contact Information
   </li>
</ul>
<form name="frmRegistration" id="registration-form" method="post">
   <div class="input-fields">
      <div id="account-field">
         <label>Old Name</label>
         <input type="text" name="name" placeholder="Old Name" id="email" class="old_name" />
         <label>Preferred Name</label>
         <input type="text" name="name" placeholder="Preferred Name" id="email" class="old_name" />
         <label>Confirm Preffered Name</label>
         <input type="text" name="name" placeholder="Confirm Preffered Name" id="email" class="old_name" />
         <label for="Gender">Gender</label>
         <select name="gender" id="gender" required>
            <option value="">--Please select your gender--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
         </select>
         <label for="Gender">Booking Type</label>
         <select name="gender" id="gender">
            <option value="">--Booking Type--</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
         </select>
         <label for="Note">Note</label>
         <input  type="text" value="General public take note" name="note" id="note" placeholder="General public take note" required id="cpname">
         <span class="btn-item">e.g ABC company take note</span>
         <div class="btn-field">
            <input type="file" id="actual-btn" hidden/>
            <span class="label-info">Proof Of Name</span>
            <label class="btn1" for="actual-btn">Upload Document</label>
            <span class="btn-item">Only marriage certifiate and court affidavits are accepted</span>
         </div>
         <input class="btnAction" type="button" name="back" id="back" value="Back" style="display: none;" />
         <input class="btnAction" type="button" name="next" id="next" value="Next" />
         <input class="btnAction" type="submit" name="finish" id="finish" value="Finish" style="display: none;" />
      </div>
      <div id="password-field" style="display:none;">
         <div id="account-field">
            <label>Name</label>
            <input type="text" name="name" placeholder="Name" id="email" class="old_name" />
            <label>Email</label>
            <input type="email" name="name" placeholder="Email" id="email" class="old_name" />
            <label>Phone Number</label>
            <input type="number" name="name" placeholder="Phone Number" id="email" class="old_name" />
            <div class="field uploader">
               <button class="custom-file-upload">Submit</button>
            </div>
            <input class="btnAction" type="button" name="back" id="back" value="Back"/>
            <input class="btnAction" type="submit" name="finish" id="finish" value="Finish"/>
         </div>
      </div>
</form>
</div>
<?php include 'footer.php'; ?>
