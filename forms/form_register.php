<div class="regform-global_div">
	<form class="regform" method="POST" action="index.php">
        <h1>Registration form</h1>
        <!-- Common OK-->
        <div class="regform-div">
            <input class="regform-input regform-input--text" id="regform-input--login" type="text" placeholder="Enter your login" name="login">

           <!--
           <input class="regform-input regform-input--text" id="regform-input--name" type="text" placeholder="Name" name="name">
           <input class="regform-input regform-input--text" id="regform-input--surname" type="text" placeholder="Surname" name="surname">
           -->

             <input class="regform-input regform-input--email" id="regform-input--email" type="email" placeholder="Put your email here" name="email">
         </div>


        <div class="regform-div">
            <h3>Select your gender</h3>
                <label class="regform-input--radio_label" for="regform-input--gender_male">Male</label>
                <input class="regform-input regform-input--radio" id="regform-input--gender_male"   type="radio" name="gender" value="male">
                <label class="regform-input--radio_label" for="regform-input--gender_female">Female</label>
                <input class="regform-input regform-input--radio" id="regform-input--gender_female" type="radio" name="gender" value="female">
                <label class="regform-input--radio_label" for="regform-input--gender_alien">Alien</label>
                <input class="regform-input regform-input--radio" id="regform-input--gender_alien" type="radio" name="gender" value="alien">
        <!--
        <div><h3>&nbsp</h3></div>


            <label for="regform-input--age"><h3>Enter your age (form 5 to 100)</h3></label>
            <input class="regform-input regform-input--range" name ="age" id="regform-input--age" type="range" min="5" max="100" step="1" value="18">


        -->

        <div class="regform-div">
            <label for="regform-input--role"><h3>Select role you wish</h3></label>
            <select class="regform-input regform-select regform-select--drop_down" name="role" id="regform-input--role">
                <option value="admin">Administrator</option>
                <option value="editor">Editor</option>
                <option value="subscriber">Subscriber</option>
            </select>
        </div><!--


        <textarea class="regform-textarea" name="textarea" rows="20" placeholder="Write a few lines about you"></textarea>
        -->
        <!-- Password -->
        <div class="regform-div">
            <input class="regform-input regform-input--password" name="password" id="regform-input--password" type="password" placeholder="Password">
            <input class="regform-input regform-input--password" name="password-repeated" id="regform-input--password_again" type="password" placeholder="Repeat password">
        </div>

        <!-- Submit -->
        <div class="regform-div">
            <button class="reform-button" type="submit" name="action" value="register">Register</button>

            <center>
                <a href="login.php" title="Login Page" target="_self">Already have an account?</a>
            </center>
        </div>




    </form>
    </div>