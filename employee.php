
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    width: 100%;
    height: 100vh;
    overflow-x: hidden;
    }
    #home{
        width: 100%;
        height: 100vh;
        background-image: url("assets/backround.png");
    }
    .nav {
            display: flex;
            justify-content: space-around; 
            background-color: #683a27;
        }

    .nav a {
        color: white;
        text-decoration: none;
        padding: 10px;
    }

    .nav a:hover {
        background-color: #575757;
    }
    #home{
        background-image: url("/assets/backround.png");
    }
    #home H2{
        color: #fff;
        position: relative;
        top: 100px;
        left: 200px;
        font-weight: bolder;
        margin-top: 20px;
        height: fit-content;
        display: table  ;
    }
    #hpara{
        color: #fff;
        position: relative;
        top: 120px;
        left: 200px;
        font-weight: lighter;
        display:table;
    }
</style>
<body>
   
    <section id="home">
         <header>
        <nav class="nav">
            <a href="#home" >Home</a>
            <a href="#section1" >My acount</a>
            <a href="#section2" >Orders</a>
            <a href="#section3" >Reserves</a>
            <a href="#section4" >Products</a>
            <a href="#section5" >Suppliers</a>
        </nav>
        </header>
        <h2 id="htitle">BARTONS COFFEE</h2>
        <h2>FRESH COFFEE IN THE MORNING</h2>

        <p id="hpara"> welcom to bartons incredibly , your best local coffee,<br> in addition to delicious
             sandwiches and cakes <br>and hot dish of the day
        </p>
    </section>
    <section id="section1">

    </section>
</body>
</html>