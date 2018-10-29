<style>
    body{
        font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    }
    /* Gera um quadrado responsivo. */
    .square{
        width: 48%;
        height: 0; /* A mágica está aqui */
        padding-bottom: 48%; /* ... e está aqui */
        margin: 1%;
        float: left;
        position: relative;
    }

    .block{
        position: absolute;
        text-align: center;
        background: #1a1a1a;
        width: 100%;
        height: 100%;
    }

    .block:before {
        content: '';
        display: inline-block;
        height: 100%;
        vertical-align: middle;
        margin-right: -0.25em;
    }

    .centered {
        display: inline-block;
        vertical-align: middle;
        width: 80%;
        background: #222;
        color: #FFF;
    }








    #meubody{
        background-color: #cccccc;
    }


    #div-cor1{
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }


    #div-cor2{

        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }

    .navbar {
        margin-bottom: 0;
        border-radius: 0;
    }


    .row.content {height: 450px}


    .sidenav {
        padding-top: 20px;
        background-color: #f1f1f1;
        height: 100%;
    }


    footer {
        background-color: #555;
        color: white;
        padding: 15px;
    }


    @media screen and (max-width: 767px) {
        .sidenav {
            height: auto;
            padding: 15px;
        }
        .row.content {height:auto;}
    }
</style>