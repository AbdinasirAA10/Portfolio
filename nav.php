<style>
/* parent */
.nav{
    position: relative;
    width: 100%;
}

/* navber */
.nav #navber{
    display: flex;
    position: fixed;
    z-index: 2;
    overflow: hidden;
    top: 0;
    width: 100%;
    background: rgba(7, 3, 49, 0.4);
    padding: 10px;
    align-items: center;
}
/* logoi */
.nav #navber .logo{
    padding: 2px;
    font-size: 20Spx;
    color: white;
}

/* nav */
.nav #navber ul{
    display: flex;
    position: absolute;
    right: 30px;
    align-items: center;
    list-style: none;
}

.nav #navber ul li{
    padding: 10px;
    cursor: pointer;
}
.nav #navber ul li:hover{
    border-bottom: 1px solid rgb(230, 230, 230);
}
.nav #navber ul li a{
    text-decoration: none;
    color: rgb(236, 226, 208);
}
/*  */

.open-nav,.close-nav{
    display: none;
}
#main-conts{
    transition: 2s all ease;
}
/* phone menu */

@media (max-width: 700px){
    
    .nav #navber{
        display: flex;
        position: fixed;
    }
    .nav #navber #u-navi{
        display: block;
        width: 200px;
        /* background: rgb(7, 3, 49); */
        position: fixed;
        right: -200px;
        height: 100vh;
        top: 50px;
        transition: 1.5s all ease-in-out;
        text-align: center;
        line-height: 2;
    }
    
    .nav #navber #u-navi li{
        border-bottom: 1px solid #ccc;
    }
    .nav #navber #u-navi li:hover{
        transition: 2s all ease;
        background: rgba(235, 235, 235, 0.404);
    }
    /* .nav #navber ul li a{
    text-decoration: none;
    color: black;
} */

    
    .open-nav,.close-nav{
        display: flex;
        flex-direction: column;
        background: rgba(255, 255, 255, 0.041);
        border-radius: 1px;
        cursor: pointer;
        padding: 8px;
        width: 50px;
        height: 40px;
        line-height: 0.5;
        border: none;
        outline: none;
        position: fixed;
        right: 10px;
        top: 6px;
        z-index: 3;
    }
    .open-nav div{
        margin-top: 6px;
    }
    .open-nav div:nth-child(1){
        width: 100%;
        height: 8px;
        background: rgb(255, 255, 255);
    }
    .open-nav div:nth-child(2){
        width: 85%;
        height: 5px;
        background: rgb(251, 251, 251);
    }
    .open-nav div:nth-child(3){
        width: 50%;
        height: 8px;
        background: rgb(148, 148, 148);
    }

    
}


</style>
 
 <div class="nav">
        <!-- nav -->
        <button class="open-nav" id="navi" onclick="openmenu()" >
            <div></div>
            <div></div>
            <div></div>
        </button>

        <nav id="navber">

            <header class="logo">
                <h1>Abdinasir Abbdullahi</h1>
            </header>
            <ul id="u-navi">
                <!-- <li><a href="">Home</a></li> -->
                <li><a href="index.php">Portfolio</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="project.php">Projects</a></li>
                <!-- <li><a href="">Blog</a></li> -->
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </div>

