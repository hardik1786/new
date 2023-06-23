<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            ppsuedo selector
        </title>
        <style>
            header li {
                list-style: none;
            }
            a:visited , a:link{
                text-decoration: none;
                background-color: aqua;
                border: 1px solid blue;
                color: black;
                width: 200px;
                text-align: center;
                margin-bottom: 100px;
            }
            a:hover , a:active{
                background-color: yellow;
                color: rebeccapurple;
            }
            header li:nth-child(3){
                font-size: 24px;
            }
            section div:nth-child(odd){
                background-color: gray;
            }
            section div:nth-child(3):hover{
                background-color: red;
                cursor: pointer;
            }
        </style>
    </head>
    <body>
        <h1>
            pseudo class selector
        </h1>
        <header>
            <ul>
                <li>
                    <a href="first"> firstlink </a>
                </li>
                <li>
                    <a href="second" target="_blank"> scondlink </a>
                </li>
                <li>
                    <a href="third" target="_blank">
                        thirdlink
                    </a>
                </li>
                <li>
                        image1
                     </img>
                </li>
            </ul>
        </header>
        <section>
            <div>
                div1
            </div>
            <div>
                div2
            </div>
            <div>
                div3
            </div>
            <div>
                div4
            </div>
            <div>
                div5
            </div>
        </section>
    </body>
</html>
