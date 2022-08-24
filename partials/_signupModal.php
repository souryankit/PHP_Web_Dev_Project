 
 <!-- Modal -->
 <div class="modal fade" id="signupModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
     aria-labelledby="staticBackdropLabel" aria-hidden="true">
     <div class="modal-dialog">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="staticBackdropLabel"> Sign Up </h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>
             <form action="partials/_signuphandler.php" method="post">
                 <div class="modal-body">
                     <div class="form-floating mb-3">
                         <input type="username" class="form-control" id="username" name="username"
                             placeholder="username">
                         <label for="username">Username</label>
                     </div>
                     <div class="form-floating">
                         <input type="password" class="form-control" id="password" name="password"
                             placeholder="password">
                         <label for="password">Password</label>
                     </div>
                     <div class="form-floating mt-3 mb-3">
                         <input type="password" class="form-control" id="cpassword" name="cpassword"
                             placeholder="cPassword">
                         <label for="cpassword">Confirm Password</label>
                         <small id="cpasswordhelp" class="form-text text-muted">Make sure to type same
                             password</small>
                     </div>
                     <input class="btn btn-primary" type="submit" value="Submit">
                 </div>
             </form>
         </div>
     </div>
 </div>