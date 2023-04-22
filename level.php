<?php require_once"header.php" ?>
        <section class="container">
            <?php require_once"logo.php" ?>

            <div class="warpper">
                <input class="radio" id="one" name="group" type="radio" checked>
                <input class="radio" id="two" name="group" type="radio">
                <input class="radio" id="three" name="group" type="radio">
                <div class="tabs">
                    <label class="tab" id="one-tab" for="one">Current</label>
                    <label class="tab" id="two-tab" for="two">Level Description</label>
                    <!-- <label class="tab" id="three-tab" for="three">Prerequisites</label> -->
                </div>
                <div class="panels">
                <div class="panel" id="one-panel">
                    <div class="panel-title">Why Learn CSS?</div>
                    <p>Without CSS, every web page would be drab plain text and images that flowed straight down the page. With CSS, you can add color and background images and change the layout of your page — your web pages can feel like works of art!</p>
                </div>
                <div class="panel" id="two-panel">
                    <div class="level" style="display: flex;">
                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 0</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>

                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 1</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>
                    </div>
                    <div class="level" style="display: flex;">
                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 2</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>

                    <div class="vip0">
                        <div style="padding: 0;" class="contents">
                            <strong style="top:20px">VIP 3</strong>
                            <h5>$0-99</h5>
                            <img src="assets/img/qaww.PNG" width="50" height="50" alt="level">
                            <p style="padding: 0; font-size:0.7rem">The Commission rate is 0.65%</p>
                            <p>Daily task is:38</p>
                        </div>
                    </div>
                    </div>
                    
                    <!-- <div class="panel-title">Take-Away Skills</div>
                    <p>You will learn many aspects of styling web pages! You’ll be able to set up the correct file structure, edit text and colors, and create attractive layouts. With these skills, you’ll be able to customize the appearance of your web pages to suit your every need!</p> -->
                </div>
                </div>
            </div>

        </section>
<?php require_once"footer.php" ?>