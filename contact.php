<?php $title = "Contact - Abdinasir Abdullahi";
 include('head.php');?>
<?php include('nav.php');?>

<style>
    /* contact-us */
    .contact-content{
    background-image: url(imgs/1.jpg);
    height: 100vh;
    background-position: center;
    background-size: cover;
    }
.contact-us{
    width: 100%;
    justify-content: space-around;
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    background-size: cover;
    background-position: center;
}

.contact-content h1{
    padding: 10px;
    color: red;
}
.contact-us .all-s{
    padding: 8px;
    display: flex;
    flex-direction: column;
    line-height: 2;
    color: white;
}
.contact-content .all-s a{
    text-decoration: none;
    color: whitesmoke;
    border-bottom: 1px solid #ccc;
}
.contact-us .all-s h1{
    color: wheat;
}
.contact-us .all-s .icons{
    margin: 10px;
}

.contact-us .contact-form h1{
    padding: 10px;
    /* border-bottom: 0.1px solid #ccc; */
    color: wheat;
}
.contact-us .contact-form form{
    padding: 10px;
    line-height: 2;
}
.contact-us .contact-form form input{
    padding: 10px;
    line-height: 2;
    border: none;
    outline: none;
    background: transparent;
    color: white;
    border-bottom: 1px solid #ccc;
    font-size: 20px;
}
.contact-us .contact-form form textarea{
    padding: 10px;
    line-height: 2;
    /* height: 22px; */
    border: none;
    outline: none;
    background: transparent;
    color: white;
    border-bottom: 1px solid #ccc;
}

.contact-us .contact-form form input::placeholder{
    color: white;
}

.contact-us .contact-form form textarea::placeholder{
    color: white;
}


.contact-us .contact-form form input[type=submit]{
    margin-top: 10px;
    width: 90px;
    font-size: 15px;
    padding: 8px;
    outline: none;
    border: none;
    cursor: pointer;
    background: rgb(18, 64, 107,0.7);
    color: white;
    border-radius:10px;
}
#p-contact{
    margin-bottom: 170px; padding: 10px;
}
@media (max-width:915px) {
    #p-contact{
    margin-bottom: 50px; padding: 10px;
}


}

</style>
    <!-- contact form -->

    <div class="contact-content">
        <div id="p-contact" ></div>
        <!-- <h1 style="background: transparent;color:lightgreen;">Ways to Contact</h1> -->
        <div class="contact-us">
            <div class="all-s">
                <h1>Mail / Call </h1>
                <div class="m">
                    <p>Email : <a href="mailto://AbdinasirAA10@gmail.com">AbdinasirAA10@gmail.com</a></p>
                    <p>&nbsp;&nbsp;&nbsp;Call : <a href="tel:+46767476185">+46-767-476-185</a></p></div>
            <!-- <div class="icons">
                    <a href="https://github.com/Abdinasir-Abdullahi/"><img src="icons/github.png" alt=""></a>
                    <a href="https://www.linkedin.com/in/abdinasir-abdullahi-036904225/"><img src="icons/linkedin-logo.png" alt=""></a>
                    <a href="https://www.instagram.com/risaanlove"><img src="icons/instagram logo.png" alt=""></a>
                    <a href="https://www.facebook.com/risaanlove"><img src="icons/facebook.png" alt=""></a>
                    <a href="https://www.twitter.com/risaanlove"><img src="icons/twitter1.jpg" alt=""></a>
                </div> -->
            </div>
           <div class="contact-form">
                <div class="right">
                    <h1>Send A Message</h1>
                    <form action="mailto://AbdinasirAbdullahiA10@gmail.com">
                        
                        <p>
                            <input type="text" name="name" id="name" placeholder="Enter Your Name">
                        </p>
                        <p>
                            <input type="email" name="email" id="email" placeholder="Email Address">
                        </p>
                        <p>
                            <textarea name="msg" id="msg" placeholder="Write Your Massage.."></textarea>
                        </p>
                        <p>
                            <input type="submit" value="Send">
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    
    <?php include('footer.php');?>
