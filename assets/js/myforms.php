            <div class="form-container">
                        <h3>Fast Track Your CAT Preparation</h3>


   <form action="submit.php" method="post">
    <div class="form-group">
        <label for="name">Name*</label>
        <input type="text" class="form-control" name="name" placeholder="Name" required>
    </div>
    <div class="form-group">
        <label for="mobile">Mobile*</label>
        <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
    </div>
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Email" required>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="form-group">
                <label for="pincode">Pincode</label>
                <input type="text" class="form-control" name="pincode" placeholder="Pincode" required>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="school">School / Institute</label>
        <input type="text" class="form-control" name="school" placeholder="School / Institute" required>
    </div>
    <!-- Hidden fields for date, time, and IP -->
    <input type="hidden" name="datetime" value="<?php echo date('Y-m-d H:i:s'); ?>">
    <input type="hidden" name="ip_address" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
    <div class="form-button-submit">
                   <button type="submit" class="btn btn-primary">Get a Call Back</button>
    </div>
</form>

    </div>	


 