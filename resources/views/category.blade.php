<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <style>
    body{
        max-width: 1920px;
        width: 100%;
    }
    header{
        height: 88px;
        display: flex;
    }
    h2#Logo{
        color: var(--Black, #1D1D1F);
    font-feature-settings: 'clig' off, 'liga' off;
    font-family: Proxima Nova;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: 120%; 
    margin-left: 90px;
    }
    .menu{
        width: 428px;
    height: 35px;
    flex-shrink: 0;
    border-radius: 100px;
    background: #F5F5F7;
    margin-left: 358px;
    }
    ul{
        list-style-type: none;  
        display: flex;
        margin: 0;
        padding: 0;
        
    }
    .menu ul li{
        display: inline;
    }
    .menu li{

        color: var(--Black, #1D1D1F);
    font-family: Proxima Nova;
    font-size: 16px;
    font-style: normal;
    font-weight: 600;
    line-height: normal;
    margin-left: 36px;
    margin-top: 8px;
    }
   </style>
</head>
<body>
    <header>
        <h2 id="Logo">YOULOGO</h2>
        <div class="menu">
        <ul>
            <li><a href='/category/mobiles'>Мобильные телефоны</a></li>
            <li><a href='/category/portable'>Портативная техника</a></li>
            <li><a href='/category/appliances'>Бытовая техника</a></li>
        </ul>
        </div>
        <div class="soccety">
            <img src="" alt="">
            <img src="" alt="">
            <img src="" alt="">
        </div>
        <div class="Avtorizaciya">
            <button id="Extrance">Вход</button>
            <button id="Registration">Регистрация</button>
        </div>
    </header>
    <section>
        <h2>{{$category->name}}</h2>
        <h2>{{$category->description}}</h2>
    </section>
</body>
</html>