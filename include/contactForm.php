<form action="index.php" method="post">
               <?php
               $warningClass = "animated infinite bounce";
               $warningnull = "";
               if(isset($_POST['submit'])) {
                   $firstname = $_POST['firstname'];
                   $lastname = $_POST['lastname'];
                   $phone = $_POST['phone'];
                   $email = $_POST['email'];
                   $date = $_POST['date'];
                 }
               else {//end of first if
               }
               ?>
           <div class="form-group">
             <label for="name">First Name</label>
             <input type="text" name="firstname" class="form-control" id="name">
           </div>
             <div class="form-group">
             <label for="name">Last Name</label>
             <input type="text" name="lastname" class="form-control" id="name">
           </div>
             <div class="form-group">
             <label for="name">Contact Number</label>
             <input type="number" name="phone" class="form-control" id="name">
           </div>
           <div class="form-group">
             <label for="email">Email</label>
             <input type="email" name="email" class="form-control" id="email">
           </div>
             <div class="form-group">
             <label for="message">Date</label>
             <input type="date" name="date" class="form-control" id="email">
           </div>
           <div class="form-group">
             <label for="message">Message</label>
             <textarea class="form-control" name="message" id="message"></textarea>
           </div>
        <div class="modal-footer">
         <input type="submit"  name="submit" class="btn btn-primary btn-block"/>
        </div>
         </form>

         <script> 
         
         $("#name").on(function() {
             if()
         })
         </script>