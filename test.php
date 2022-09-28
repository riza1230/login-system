<?php require_once "./views/includes/header.php" ?>

<div class="container mt-2 h-100">
   <div class="row justify-content-center align-items-center h-100">
     <div class="col-md-7">
       <div class="card">
         <div class="card-body">
           <h3 class="mb-3">Registration Form</h3>
           <form>
             <div class="row">
               <div class="col-md-6 mb-4">
                 <div class="form">
                   <input type="text" id="firstName" class="form-control" />
                   <label class="form-label" for="firstName">First Name</label>
                 </div>
               </div>
               <div class="col-md-6 mb-4">
                 <div class="form-outline">
                   <input type="text" id="lastName" class="form-control form-control-md" />
                   <label class="form-label" for="lastName">Last Name</label>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-6 mb-4 d-flex align-items-center">
                 <div class="form-outline datepicker w-100">
                   <input type="text" class="form-control form-control-md" id="birthdayDate" />
                   <label for="birthdayDate" class="form-label">Birthday</label>
                 </div>
               </div>
               <div class="col-md-6 mb-4">
                 <h6 class="mb-2 pb-1">Sex </h6>
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="inlineRadioOptions" id="femaleGender" value="option1" checked />
                   <label class="form-check-label" for="femaleGender">Female</label>
                 </div>
                 <div class="form-check form-check-inline">
                   <input class="form-check-input" type="radio" name="inlineRadioOptions" id="maleGender" value="option2" />
                   <label class="form-check-label" for="maleGender">Male</label>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-md-6 mb-4 pb-2">
                 <div class="form-outline">
                   <input type="email" id="emailAddress" class="form-control form-control-md" />
                   <label class="form-label" for="emailAddress">Email</label>
                 </div>
               </div>
               <div class="col-md-6 mb-4 pb-2">
                 <div class="form-outline">
                   <input type="tel" id="phoneNumber" class="form-control form-control-md" />
                   <label class="form-label" for="phoneNumber">Phone Number</label>
                 </div>
               </div>
             </div>
             <div class="row">
               <div class="col-12">
                 <select class="select form-control-md">
                   <option value="1" disabled>Choose option</option>
                   <option value="2">Subject 1</option>
                   <option value="3">Subject 2</option>
                   <option value="4">Subject 3</option>
                 </select>
                 <label class="form-label select-label">Choose option</label>
               </div>
             </div>
             <div class="mt-4 pt-2">
               <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
             </div>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>