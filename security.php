<?php require_once"header.php" ?>
        <section class="container">
            <?php require_once"logo.php" ?>
            <!-- <div class="withdrawal__card" style="text-align: center;">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> -->
            <div class="warpper">

                <div class="card" style="width: auto; height:auto;">
                <input class="radio" id="one" name="group" type="radio" checked>
                <input class="radio" id="two" name="group" type="radio">
                <input class="radio" id="three" name="group" type="radio">
                <div class="tabs" style="">
                    <label class="tab" style="width:150px; font-size:0.9rem; padding:5px" id="one-tab" for="one">Change Paasword</label>
                    <label class="tab" style="width:150px; font-size:0.9rem; padding:5px" id="two-tab" for="two">Set Withdrawal Pin</label>
                    <!-- <label class="tab" id="three-tab" for="three">Prerequisites</label> -->
                </div>
                <div class="panels1" style="margin-bottom:20px">
                <div class="panel" id="one-panel" >
                    <div class="withdrawal__card" style="margin-bottom: 20px;">
                        <button class="withdrawal__btnn">Change Password</button>
                    </div>
                    
                    <form action="" id="bank-bind">
                        <div class=" accounts" style="">
                            <div class="" style="flex-direction:row; display:flex; margin-bottom:30px; right:0">
                                <label  style="" for="payee Name">Current Password:</label>
                                <input type="password" name="" id="" class="form__contro" value="">
                            </div>
                            <hr>
                            
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                                <label  style="" for="payee Name">New Password:</label>
                                <input type="password" name="" id="" class="form__contro">
                            </div>
                            <hr>
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                                <label  style="" for="payee Name">Confirm New Password</label>
                                <input type="password" name="" id="" class="form__contro">
                            </div>
                            <hr>
                            <div class="login__btn">
                            <!-- HTML !-->
                                <button class="button-31" role="button">Submit</button>
                            </div>

                        </div>
                       
                    </form>
                </div>
                <div class="panel" id="two-panel">
                    <div class="withdrawal__card" style="margin-bottom: 20px;">
                        <button class="withdrawal__btnn">Set Withdrawal Pin</button>
                    </div>
                    <form action="" id="bank-bind" >
                        <div class=" accounts" style="">
                            <div class="" style=" display:flex; margin-bottom:30px; right:0">
                                <label  style="" for="payee Name">New Pin:</label>
                                <input type="password" name="" id="" class="form__contro" value="">
                            </div>
                            <hr>
                            
                            <div class="" style=" display:flex;  margin-bottom:30px;">
                                <label  style="" for="payee Name">Confirm Pin:</label>
                                <input type="password" name="" id="" class="form__contro">
                            </div>
                            <div class="login__btn">
                            <!-- HTML !-->
                                <button class="button-31" role="button">Confirm</button>
                            </div>

                        </div>
                       
                    </form>
                    <!-- <div class="panel-title">Take-Away Skills</div>
                    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p> -->
                </div>
                </div>
                </div>
            </div>

        </section>
<?php require_once"footer.php" ?>