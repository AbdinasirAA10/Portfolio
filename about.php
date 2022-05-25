<?php $title = "About - Abdinasir Abdullahi";
 include('head.php');?>
<?php include('nav.php');?>


<style>
     .about-content {
    /* border-top-left-radius: 170px; */
    /* background: rgb(6, 6, 53); */
    background-image: url(imgs/1.jpg);
    flex-direction: column;
    background-size: cover;
    background-position: center;
    justify-content: center;
    align-items: center;
    display: flex; 
    background-attachment: fixed;
    /* height: 100vh; */
 }
 .about-content h1{
     margin-top: 100px;
     font-size: 40px;
     padding: 10px;
     color: white;
     margin-bottom: 10px;
     border-bottom: 1px solid rgb(221, 220, 220);
     font-family: serif;
     font-weight: 400;
 }
 .about-content .about-me{
    padding: 10px;
    text-align: center;
    width: 100%;
    margin-bottom: 50px;
 }

 .about-content .about-me p{
     font-size: 22px;
     color: white;
     
 }

 /* my skills and rate */

 .about-content .skills{
     display: flex;
     flex-direction: column;
     width: 100%;
     padding: 10px;
     background: white;
 }


 .about-content .skills .skill {
    background-image: url(imgs/1.jpg);
    background-size: cover;
    background-position: center;
    justify-content: center;
    align-items: center;
    display: flex; 
    background-attachment: fixed;
     display: flex;
     flex-wrap: wrap;
     justify-content: space-around;
     align-items: center;
     
     
 }
 .about-content .skills h1{
     justify-content: left;
     align-items: center;
     display: flex;
     color: black;
     font-size: 25px;
     margin: 10px;
     padding: 10px;
 }
 .about-content .skills h1 img{
     padding: 10px;
     width: 50px;
 }
 .about-content .skills .skill h2{
     font-weight: normal;
     font-size: 20px;
    margin-bottom: 10px;
    color: white;
    letter-spacing: 3px;

 }
 .about-content .skills .skill .skil p{
    letter-spacing: 5px;
    padding: 10px;
    margin: 10px;
    /* background: #000; */
}


    /* progress */
.progress{
    width: 300px;
    height: 20px;
    background: rgb(253, 253, 253);
    display: flex;
    position: relative;
    border-radius: 2px;
}
.progress .progress-1{
    height: 100%;
    border: none;
    background: linear-gradient(-50deg,rgb(255, 8, 255),rgba(125, 125, 250, 0.966));
}
.progress .progress-1 .per{
    position: absolute;
    top: 1.5px;
    right: 5px;
    color: white;
}



</style>

    
    <!-- content -->
    <div class="about-content">

        <div id="p-about" style="margin-bottom: 50px;background: rgba(0, 0, 0, 0);"></div>
        <h1>About me </h1>
        <div class="about-me" >
            <p>Experienced Web Designer. I can Actually Design - Landing pages, Resposive Websites for Desktop and Phones.</p>
        </div>

        <!-- skills -->
        <div class="skills">
            <h1>My Soft - skills! <img src="icons/web.jpg"></h1>
            <div class="skill">
                <!-- flex each -->
                <div class="skil">
                    <p >
                        <h2>Html5</h2>
                        <div class="progress"><button class="progress-1" style="width: 90%;"><span class="per">90%</span></button></div>
                    </p>
                    <p>
                        <h2>Css3</h2>
                        <div class="progress"><button class="progress-1" style="width: 85%;"><span class="per">85%</span></button></div>                       
                    </p>
                    </p>
                </div>
                
                <div class="skil">
                    <p>
                        <h2>JavaScript</h2>
                        <div class="progress"><button class="progress-1" style="width: 70%;"><span class="per">70%</span></button></div>
                    </p>
                    <p>
                        <h2>PHP</h2>
                        <div class="progress"><button class="progress-1" style="width: 70%;"><span class="per">70%</span></button></div>
                    </p>

                    </p>
                </div>
                <!--  -->
                <div class="skil">
                    <p>
                        <h2>MYSQL</h2>
                        <div class="progress"><button class="progress-1" style="width: 66%;"><span class="per">66%</span></button></div>
                       
                    </p>
                    <p>
                        <h2>Office</h2>
                        <div class="progress"><button class="progress-1" style="width: 80%;"><span class="per">80%</span></button></div>
                       
                    </p>
                    </p>
                </div>
            </div>        
        </div>
        <?php include('copyright.php');?>

    </div>

    <?php include('footer.php');?>

