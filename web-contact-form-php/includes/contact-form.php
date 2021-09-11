            <form name="contact-form" action="confirm.php" method="post" class="mr-3">
                <div class="form-group row mt-3">
                    <label for="userName" class="col-sm-3 col-form-label">Full Name</label>
                    <input type="text" class="form-control col-sm-9" name="userName" id="userName" placeholder="FirstName LastName" value="<?php echo $userName ?>"></input>

                </div>
                <div class="form-group row">
                    <label for="userEmail" class="col-sm-3 col-form-label">Email Address</label>
                    <input type="email" class="form-control col-sm-9" name="userEmail" id="userEmail" placeholder="username@example.org" value="<?php echo $userEmail ?>"></input>
                </div>
                <div class="form-group row">
                    <label for="msgType" class="col-sm-3 col-form-label">Message Type</label>
                    <select name="msgType" id="msgType" class="form-control col-sm-9" default="Choose Msg Type">
                        <optgroup label='Select Message Type'>
                            <option id="query-opt" value="1" <?php echo $msgType == '1' ? 'selected' : ''?>>Query</option>
                            <option id="feedback-opt" value="2" <?php echo $msgType =='2' ? 'selected' : ''?>>Feedback</option>
                            <option id="career-opt" value="3" <?php echo $msgType == '3' ? 'selected' : ''?>>Career</option>
                            <option id="other-opt" value="4" <?php echo $msgType =='4' ? 'selected' : ''?>>Other</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="msgContent" class="col-form-label col-sm-3">Your Message</label>
                    <textarea class="form-control col-sm-9" rows="3" id="msgContent" name="msgContent"><?php echo trim($msgContent) ?></textarea>
                </div>
                <div class="form-group d-flex justify-content-center">
                <button type="submit" id="edit-btn" class="col-sm-6 btn btn-warning btn-lg d-none mr-3">Edit
                        </button>
                    <button type="submit" id="next-btn" class="col-sm-6 btn btn-outline-secondary btn-lg" >Next
                        </button>

                        <button type="submit" id="submit-btn" class="col-sm-6 btn btn-success btn-lg d-none">Submit
                        </button>

                </div>
            </form>