<?php require_once"header.php" ?>
        <section class="container">
            <?php require_once"logo.php" ?>
            <!-- <div class="withdrawal__card" style="text-align: center;">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div> -->
            <div class="warpper">
            <input class="radio" id="one" name="group" type="radio" checked>
                <input class="radio" id="two" name="group" type="radio">
                <input class="radio" id="three" name="group" type="radio">
                <div class="tabs" >
                    <label class="tab" id="one-tab" for="one">Bank Card</label>
                    <label class="tab" id="two-tab" for="two">Crypto</label>
                    <!-- <label class="tab" id="three-tab" for="three">Prerequisites</label> -->
                </div>
                <div class="panels1" style="width:250px">
                <div class="panel" id="one-panel" style="">
                    <div class="withdrawal__card">
                        <button class="withdrawal__btnn">Bind Account</button>
                    </div>
                    <form action="" id="bank-bind">
                        <h2 style="font-family: sans-serif; font-weight:900; font-size:2rem">Skrill</h2>
                        <div class="form__group" style="width:350px !important">
                            <div class="" style="flex-direction:row; display:flex; margin-bottom:30px;">
                                <label for="payee Name">Payee Name:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>
                            
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px; margin: 20px;">
                                <label for="payee Name">Account No:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>
                            
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                                <label for="payee Name">Sort Code:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>

                             <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                                <label for="payee Name">Phone Number:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>

                            <span>
                                <ul>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                    <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Est nobis fugit tenetur corrupti quo, accusamus iure corporis voluptatibus impedit minima.</li>
                                </ul>
                            </span>

                            <div class="submit__btn">
                                <button class="withdrawal__btnn">Submit</button>
                            </div>

                            
                        </div>
                       
                    </form>
                </div>
                <div class="panel" id="two-panel">
                    <div class="withdrawal__card">
                        <button class="withdrawal__btnn">Bind Wallet</button>
                    </div>
                    <form action="" id="bank-bind">
                        <h2 style="font-family: sans-serif; font-weight:900; font-size:2rem">Skrill</h2>
                        <div class="form__group" style="width:350px !important">
                            <div class="" style="flex-direction:row; display:flex; margin-bottom:30px;">
                                <!-- <label for="payee Name">Payee Name:</label> -->
                                <select name="" id="" class="form__contro" style="">
                                    <option value="" selected disabled>Select Coin</option>
                                    <option value="1">BTC</option>
                                    <option value="2">ETH</option>
                                    <option value="3">USDT</option>
                                </select>
                            </div>
                            
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px; margin: 20px;">
                                <!-- <label for="payee Name">Account No:</label> -->
                                <select name="" id="" class="form__contro" style="text-align: center">
                                    <option value="" selected disabled>Select Network</option>
                                    <option value="1">ERC-20</option>
                                    <option value="2">gg</option>
                                    <option value="3">gfff</option>
                                </select>
                            </div>
                            
                            <div class="" style="flex-direction:row; display:flex;  margin-bottom:30px;">
                                <label for="payee Name">Wallet Address:</label>
                                <input type="text" name="" id="" class="form__contro">
                            </div>

                             

                            <div class="submit__btn">
                                <button class="withdrawal__btnn">Submit</button>
                            </div>

                            
                        </div>
                       
                    </form>
                    <!-- <div class="panel-title">Take-Away Skills</div>
                    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p> -->
                </div>
                </div>
            </div>

        </section>
<?php require_once"footer.php" ?>