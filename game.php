<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="shortcut icon" href="imagens/perfil.jpg" type="image x-icon">
<link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
       #dvjogo{
           width:310px;
           height:310px;
           display:flex;
           flex-wrap:wrap;
           align-content:flex-start;
           background-color:#000;
           float:center;
           margin:10%;
           
       }
       
       .posJogo{
            width: 100px;
            height:100px;
            margin:0px;
            padding:0px;
            cursor:pointer;
            display:flex;
            justify-content:center;
            align-items:center;
            font-size:80px;
            color:#008000;
            
        }
            #p1{
                border-right:2px solid #008000;
                border-bottom:2px solid #008000;
            }
                #p2{
                border-left:2px solid #008000;
                border-right:2px solid #008000;
                border-bottom:2px solid #008000;
            }
                #p3{
                border-left:2px solid #008000;
                border-bottom:2px solid #008000;
            }
                #p4{
                border-right:2px solid #008000;
                border-top:2px solid #008000;
                border-bottom:2px solid #008000;
            }
                #p5{
                border:2px solid #008000;
                
            }
                #p6{
                border-left:2px solid #008000;
                border-top:2px solid #008000;
                border-bottom:2px solid #008000;
            }
                #p7{
                border-right:2px solid #008000;
                border-top:2px solid #008000;
            }
                #p8{
                
                border-left:2px solid #008000;
                border-right:2px solid #008000;
                border-top:2px solid #008000;
            }
                #p9{
                border-left:2px solid #008000;
                border-top:2px solid #008000;
            }

    </style>
    <script>
        var jogo=[];
        var tabuleiro=[];
        var quemJoga=0;//0=jogador  1=cpu
        var verifica;
        var jogando=true;
        var nivel=1;
        var jogadaCpu=1;
        var quemComeça=1;

        function cpuJoga(){
            if(jogando){
                var l,c;
                if(nivel==1){
                    do{
                        l=Math.round(Math.random()*2);
                        c=Math.round(Math.random()*2);
                       
                    }while(jogo[l][c]!="")
                    jogo[l][c]="O";
                }else if (nivel==2){
                    //NIVEL 2
                }
                verifica=verificaVitoria();
                if(verifica!=""){
                    alert(verifica+"venceu");
                    jogando=false;
                }
                atualizaTabuleiro();
                quemJoga=0;
            }
        }
        function verificaVitoria(){
            var l,c;
            //LINHAS
            for(l=0;l<3;l++){
                if((jogo[l][0]==jogo[l][1])&&(jogo[l][1]==jogo[l][2])){
                    return  jogo[l][0];

                }

            }
              //COLUNAS
              for(c=0;c<3;c++){
                if((jogo[0][c]==jogo[1][c])&&(jogo[1][c]==jogo[2][c])){
                    return  jogo[0][c];

                }

            }
              //DIAGONAIS
            if((jogo[0][0]==jogo[1][1])&&(jogo[1][1]==jogo[2][2])
                ){return  jogo[0][0];

                }
                if((jogo[0][2]==jogo[1][1])&&(jogo[1][1]==jogo[2][0])){
                    return "";

                }
        }
        function jogar(p){
            if((jogando)&&(quemJoga==0)){
              switch(p) {
                 
                case 1:
                  if(jogo[0][0]==""){
                    jogo[0][0]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  case 2:
                  if(jogo[0][1]==""){
                    jogo[0][1]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  case 3:
                  if(jogo[0][2]==""){
                    jogo[0][2]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  case 4:
                  if(jogo[1][0]==""){
                    jogo[1][0]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  case 5:
                  if(jogo[1][1]==""){
                    jogo[1][1]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  case 6:
                  if(jogo[1][2]==""){
                    jogo[1][2]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  case 7:
                  if(jogo[2][0]==""){
                    jogo[2][0]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  case 8:
                  if(jogo[2][1]==""){
                    jogo[2][1]="X";
                    quemJoga=1;
                  }
                  break;
                  
                  default://caso 9
                  if(jogo[2][2]==""){
                    jogo[2][2]="X";
                    quemJoga=1;
                  }
                  break;
              }
            
                 if(quemJoga==1){
              atualizaTabuleiro();
              verifica=verificaVitoria();
                if(verifica!=""){
                    alert(verifica+"venceu");
                    jogando=false;
                }
                cpuJoga();
            }
        }}
        function atualizaTabuleiro(){
                for(var l=0;l<3;l++){
                    for(var c=0;c<3;c++){
                        if(jogo[l][c]=="X"){
                            tabuleiro[l][c].innerHTML="X";
                            tabuleiro[l][c].style.cursor="default";
                        }else if(jogo[l][c]=="O"){
                            tabuleiro[l][c].innerHTML="O";
                            tabuleiro[l][c].style.cursor="default";
                        }else{
                            tabuleiro[l][c].innerHTML="";
                            tabuleiro[l][c].style.cursor="pointer";
                        }
                    }
                }
        }

        function inicia(){
            jogando=true;
            jogadaCpu=1;
            jogo=[
                ["","",""],
                ["","",""],
                ["","",""]
                ];
                tabuleiro=[
                    [document.getElementById("p1"),document.getElementById("p2"),document.getElementById("p3")],
                    [document.getElementById("p4"),document.getElementById("p5"),document.getElementById("p6")],
                    [document.getElementById("p7"),document.getElementById("p8"),document.getElementById("p9")],
                ];
                atualizaTabuleiro();
                if(quemComeça==1){
                    quemComeça=0;
                    quemJoga=quemComeça;
                    document.getElementById("dvQuemComeça").innerHTML="Quem começa:Jogador";
                }else{
                    quemComeça=1;
                    quemJoga=quemComeça;
                    document.getElementById("dvQuemComeça").innerHTML="Quem começa:CPU";
                    cpuJoga();
                }
        }
        window.addEventListener("load",inicia);
        function goBack(){
            window.history.back()
        }

    </script>
     
     <title>Old Woman Game</title>
</head>
<body>
    <div id="dvmenu">
        <div id="dvQuemcomeça">Quem Joga:</div>
        <button onclick="inicia()">Iniciar Jogo</button>
    </div>

<div id="dvjogo">
    <div id="p1" class="posJogo" onclick="jogar(1)"></div>
    <div id="p2" class="posJogo" onclick="jogar(2)"></div>
    <div id="p3" class="posJogo" onclick="jogar(3)"></div>
    <div id="p4" class="posJogo" onclick="jogar(4)"></div>
    <div id="p5" class="posJogo" onclick="jogar(5)"></div>
    <div id="p6" class="posJogo" onclick="jogar(6)"></div>
    <div id="p7" class="posJogo" onclick="jogar(7)"></div>
    <div id="p8" class="posJogo" onclick="jogar(8)"></div>
    <div id="p9" class="posJogo" onclick="jogar(9)"></div>

    </div>
    
        <button onclick="goBack()">Voltar</button>


    
    <div id="footer">
         <div id="gmail"><p><a href="mailto:contato@lietz.dev.br">contato@lietz.dev.br</a></p></div>
            <div id="copy">2021&copy;_lietz.dev.br </div>
    </div>
</body>