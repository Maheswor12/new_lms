<!-- Modal -->
<div class="modal fade" id="modelId" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <?php 
    $username = $_SESSION['username'];
    $query = "select * from users where username='$username'";

    ?>
        <div class="modal-content">
            <form action="process.php" method="post">
                <div class="modal-header">
                    <h5 class="modal-title">Settings</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
               
                    <div class="container-fluid">
                        <div class="form-group">
                          <label for="first_name">First Name</label>
                          <input type="text" class="form-control" name="first_name" id="first_name" aria-describedby="helpId" placeholder="">                          
                        </div>
                        <div class="form-group">
                          <label for="last_name">Last Name</label>
                          <input type="text" class="form-control" name="last_name" id="last_name" aria-describedby="helpId" placeholder="">                          
                        </div>
                        <div class="form-group">
                          <label for="username">Username</label>
                          <input type="text" class="form-control" name="username" id="username" aria-describedby="helpId" placeholder="">                          
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="text" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="">                          
                        </div>
                        <div class="form-group">
                          <label for="email">Email</label>
                          <input type="text" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="">                          
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="http://<?=$_SERVER['HTTP_HOST'];?>/new_lms/js/jquery.js"></script>
<script src="http://<?=$_SERVER['HTTP_HOST'];?>/new_lms/js/bootstrap.js"></script>














<script>

$(document).ready(function(){
//alert('doc ready');
    $('#subject_form').submit(function(event){
        event.preventDefault();
        alert($('#subject_form').serialize());
        $.post({
            url: 'process.php',
            data: $('#subject_form').serialize(),
            dataType: 'text',
            sucess: function(response){
                alert(response);
                console.log(response);
            }
        });



    });


});


</script>









<script>
$(document).ready(function() {

    $('#login').submit(function(e) {
        e.preventDefault();
        $.post({
            type: "post",
            url: "user-login.php",
            data: $('#login').serialize(),
            dataType: "text",
            success: function(response) {
                alert(response);
                if (response === 'student') {

                    


                    swal({
                        title: "Login !",
                        text: "Login Success as "+ response +". You will be redirected to dashboard",
                        icon: "success",
                        timer: 2000,
                        button: false
                    }).then(function() {
                        window.location.replace('index.php');
                    });
                    

                } else if (response === 'teacher') {
                    swal({
                        title: "Login !",
                        text: "Login Success. You will be redirected to dashboard",
                        icon: "success",
                        timer: 2000,
                        button: false
                    }).then(function() {
                        window.location.replace('index.php');
                    });

                } else if (response === 'admin') {

                    swal({
                        title: "Login !",
                        text: "Login Success. You will be redirected to dashboard",
                        icon: "success",
                        timer: 2000,
                        button: false
                    }).then(function() {
                        window.location.replace('index.php');
                    });

                } else {
                    swal('Login!', 'Login Failed', 'error', {
                        timer: 2000,
                        button: false
                    }).then(function(){
                        window.location.replace('http://localhost/new_lms/index.php?page=login');
                    });



                    // swal({
                    //     title: "Login !",
                    //     text: "Login Failed. Please try again",
                    //     icon: "error",
                    //     timer: 2000,
                    //     button: false
                    // }).then(function() {
                    //     window.location.replace("/login.php");
                    // });

                }
            }
        });
    });
});
</script>
<!-- Icons -->
<script src="js/feather.min.js"></script>
<script src="js/sweetalert.min.js"></script>

<script>
feather.replace()
</script>

</body>

</html>