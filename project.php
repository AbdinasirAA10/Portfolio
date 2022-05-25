<?php $title = "Projects - Abdinasir Abdullahi";
 include('head.php');?>
<?php include('nav.php');?>

<style>
    .project-content{
    width: 100%;
    height: 100%;
    background-image: url(imgs/1.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    overflow: hidden;
}
.project-content h1{
    padding: 10px;
    font-size: 40px;
    text-align: center;
    color: white;
    border-bottom: 1px solid #ccc;
}

.projects{
    justify-content: center;
    align-items: center;
    display: flex;
    flex-wrap: wrap;
    width: 100%;
    height: 100%;
    padding: 10px;
}
.project-1{
    padding: 10px;
    margin: 10px;
    box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.9);   
    width: 350px;
    background: rgb(250, 250, 250, 0.06);
    border-radius: 5px;
}
.project-1 h1{
    font-size: 25px;
    border-bottom: 1px solid #000;
    /* color: rgb(90, 90, 90); */
}
.project-1 img{
    width: 100%;
    border-radius:10px;
}



</style>

    
    <!-- projects i have -->

    <div class="project-content">
        <div id="p-projects" style="margin-top: 50px; padding: 10px;"></div>

        <h1>Projects</h1>
        <div class="projects" >

            <div class="project-1">
                <div class="cinwaan">
                    <h1>Contact - Form</h1>
                </div>
                <div class="jirka">
                    <img src="imgs/contact.jpeg" alt="">
                </div>
                <!-- <div class="icons">
                    <a href="https://github.com/Abdinasir-Abdullahi/"><img src="icons/github.png" alt=""></a>
                    <a href="https://www.linkedin.com/in/abdinasir-abdullahi-036904225/"><img src="icons/linkedin-logo.png" alt=""></a>
                    <a href="https://www.instagram.com/risaanlove"><img src="icons/instagram logo.png" alt=""></a>
                    <a href="https://www.facebook.com/risaanlove"><img src="icons/facebook.png" alt=""></a>
                    <a href="https://www.twitter.com/risaanlove">Live-View</a>
                
                </div> -->
            </div>
            <div class="project-1">
                <div class="cinwaan">
                    <h1>Registration - Form</h1>
                </div>
                <div class="jirka">
                    <img src="imgs/register.jpeg" alt="">
                </div>
                <!-- <div class="icons">
                    <a href="https://github.com/Abdinasir-Abdullahi/"><img src="icons/github.png" alt=""></a>
                    <a href="https://www.linkedin.com/in/abdinasir-abdullahi-036904225/"><img src="icons/linkedin-logo.png" alt=""></a>
                    <a href="https://www.instagram.com/risaanlove"><img src="icons/instagram logo.png" alt=""></a>
                    <a href="https://www.facebook.com/risaanlove"><img src="icons/facebook.png" alt=""></a>
                    <a href="https://www.twitter.com/risaanlove">Live-view</a>
                
                </div> -->
            </div>
            <div class="project-1">
                <div class="cinwaan">
                    <h1>Calculator</h1>
                </div>
                <div class="jirka">
                    <img src="imgs/calculator.jpeg" alt="">
                </div>
                <!-- <div class="icons">
                    <a href="https://github.com/Abdinasir-Abdullahi/"><img src="icons/github.png" alt=""></a>
                    <a href="https://www.linkedin.com/in/abdinasir-abdullahi-036904225/"><img src="icons/linkedin-logo.png" alt=""></a>
                    <a href="https://www.instagram.com/risaanlove"><img src="icons/instagram logo.png" alt=""></a>
                    <a href="https://www.facebook.com/risaanlove"><img src="icons/facebook.png" alt=""></a>
                    <a href="https://www.twitter.com/risaanlove">Live-Veiw</a>
                
                </div> -->
            </div>
        </div>
        <?php include('copyright.php');?>

    </div>
    <?php include('footer.php');?>
