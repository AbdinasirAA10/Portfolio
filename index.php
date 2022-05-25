<?php $title = "Portfolio - Abdinasir Abdullahi";
 include('head.php');?>
<?php include('nav.php');?>

<style>
    .container{
    width: 100%;
    height: 100vh;
    padding: 10px;
    background-image: url(imgs/1.jpg);
    background-attachment: fixed;
    background-size: cover;
    background-position: center;
    justify-content: center;
    align-items: center;
    display: flex;
    overflow: hidden;
}

.container .me{
    padding: 10px;
     width: 450px;
     height: 500px;
     background: rgba(209, 208, 208, 0.03);
     border: 15px solid rgba(209, 208, 208, 0.012);
     justify-content: center;
     align-items: center;
     display: flex;
     flex-direction: column;
     line-height: 3;
 }
 .container .me h1{
    font-size: 25px;
    color: white;
}

.container .me img{
    width: 50%;
    border-radius: 50%;    
}

.container .info{
    padding: 10px;
    width: 100%;
     background: rgba(209, 208, 208, 0.082);
     border: 15px solid rgba(209, 208, 208, 0.012);
     justify-content: top;
     align-items: left;
     display: flex;
     flex-direction: column;
     line-height: 2;
 }
 .container .info .hire{
     margin-bottom: 10px;
     justify-content: left;
     align-items: center;
     display: flex;
     color: rgb(228, 226, 226);
     font-size: 25px;
 }
 .container .info .hire img{
     width: 50px;
     margin-left: 10px;
     border-radius: 50%;
     border: none;
     outline: none;
 }
.container .info button{
    width: 200px;
    padding: 10px;
    background: rgba(0, 0, 128, 0.685);
    color: white;
    border: none;
    cursor: pointer;
    border-radius: 2px;
}
.container .info button:hover{
    outline: 1px solid rgba(0, 0, 128, 0.281);
    background: rgba(0, 0, 128, 0.6);
}
.container .info .qor .qor-h1 {
  color: #fff;
  font-size: 25px;
  font-family: monospace;
  overflow: hidden;
  border-right: .15em solid rgb(173, 7, 62);
  white-space: nowrap; 
  margin: 0 auto; 
  letter-spacing: .15em;
}
.container .info p{
    color:white;
    font-size:20px;
}

/* container media 1090 */
@media (max-width: 1090px){
    .container{
        background-image: url(imgs/1.jpg);
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        display: flex; 
    }
    .container .me{
        display:none;
    }
    .container .info{
        padding: 10px;
        width: 100%;
        overflow: hidden;
        justify-content: center;
        align-items: center;
        display: flex;
        flex-direction: column;
        line-height: 2;
    }
    .container .info p{
        color: white;
    }
    .container .info .qor{
        justify-content:center;
        align-items:center;
        display:flex;
        flex-direction:column;
        border-right: 0;
        white-space: wrap; 
        margin:  auto; 
        letter-spacing: .15em;

    }
    .container .info .icons{
        width: 100%;
        margin: 10px;
        padding: 10px;
    }
    .container .info .icons img{
        width: 30px;
    }
    .kalajar{
        display:block;
    }
    
      
}

/* 915 media */
@media (max-width:915px) {
    .container{
        background-size: cover;
        background-position: center;
        justify-content: center;
        align-items: center;
        display: flex;
        overflow: hidden;
        flex-direction: flex;
    }

}

</style>
    <!-- main content  -->
    <div class="container">
       <div class="me">
            <h1>Abdinasir Abdullahi</h1>
        <img src="imgs/Abdinaasir.jpeg">
       </div>
       <hr>
       <div class="info">
           <div class="hire">
            <b>Web Developer</b>
            <img src="icons/web.jpg"> 
           </div>
        <div class="qor">
            <h1 class="qor-h1">Hi, I'am <span style="color: aqua;">Abdinasir</span><p class="kalajar"></p><span style="color: yellow;">Software</span> Developer.</h1>
        </div>      
        <p>Looking forward to get more experience , <b style="background:rgba(157, 209, 229, 0.5);color:black;padding:10px;">take any oppotunity</b> that refers to my career <br> and can help me build better future.</p>
        <a href="about.php"><button>Read More..</button></a>
        <div class="icons">
            <a href="https://github.com/Abdinasir-Abdullahi/"><img src="icons/github.png" alt=""></a>
            <a href="https://www.linkedin.com/in/abdinasir-abdullahi-036904225/"><img src="icons/linkedin-logo.png" alt=""></a>
            <a href="https://www.instagram.com/risaanlove"><img src="icons/instagram logo.png" alt=""></a>
            <a href="https://www.facebook.com/risaanlove"><img src="icons/facebook.png" alt=""></a>
            <a href="https://www.twitter.com/risaanlove"><img src="icons/twitter1.jpg" alt=""></a>
        </div>
       </div>
    </div>

    <?php include('footer.php');?>
