const canvas = document.querySelector("canvas");
const ctx = canvas.getContext('2d');

// ctx.fillStyle = "green";//change la couleur de l'element
// ctx.fillRect(0, 0, 80, 80); // ça fait un carre 
// (0, 0, 80, 80) => (position X , position Y, width , height)

// ctx.beginPath();
// ctx.arc(100,100,50,0,Math.PI*2) // ça fait un demi cercle sans le Math PI 
// ctx.fill();

// ctx.beginPath();//creer un forme geometrique en fonctipon des point placer
// ctx.moveTo(50 , 50);//premier point de la forme de l'element (position X, Position Y)
// ctx.lineTo(100, 150);//deuxieme point de la forme de l'element
// ctx.lineTo(200, 150);//troisieme point de la forme de l'element
// ctx.fill();//rempli la forme de l'element

// ctx.font = '50px Arial';// taille et police d'ecriture
// ctx.fillText('Yop', 50, 50);//ecriture de texte

// let rect = { //dimension du'carre
//     x: 325,
//     y: 325,
//     with: 50,
//     height: 50
// }

// let arc = {// dimension d'un cercle
//     x: 350,
//     y: 350,
//     radius: 50,
//     startAngle: 0,
//     endAngle: Math.PI * 2
// }

// function drawRect(){
//     ctx.clearRect(0, 0, canvas.width, canvas.height);//clear le le canvas pour eviter les residus
//     ctx.fillStyle = 'green';//applique la couleur
//     ctx.beginPath();//permet de creer des forme geometrique complexe
//     ctx.arc(arc.x, arc.y, arc.radius, arc.startAngle ,arc.endAngle);//on applique les dimension de la variable arc pour refaire le cercle
//     ctx.fill();//remplis le cercle
// }


// drawRect();

// window.addEventListener("keydown", function(e){// event sur les touche du clavier
//     switch (e.code){
//         case "ArrowUp"://sens de la fleche derictionnel appuyer
//         if(arc.y- arc.radius - 5 >= 0){//evite que le cercle sorte du canvas
//                 arc.y -= 5;//changer la valeur Y dans la variable arc
//             }
//             break;
//             case "ArrowDown": 
//             if(arc.y + arc.radius + 5 <= canvas.height){
//                 arc.y += 5;
//             }
//             break;
//             case "ArrowLeft": 
//             if(arc.x - arc.radius - 5 >= 0){
//                 arc.x -= 5;//changer la valeur X dans la variable arc
//             }
//             break;
//             case "ArrowRight":
//                 if(arc.x + arc.radius + 5 <= canvas.width){
//                 arc.x += 5;
//             }
//             break;
//         }
//         drawRect();
//     });
 
    let moveto ={
            x: 50,
            y: 50
            }
            let lineto1 = {
                x: 100,
                y: 150
                }
            let lineto2 = {
                    x: 200,
                    y: 150
                    }
        
        function drawRect(){
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            ctx.fillStyle = 'green';
            ctx.beginPath();
            ctx.moveTo(moveto.x, moveto.y)
            ctx.lineTo(lineto1.x, lineto1.y)
            ctx.lineTo(lineto2.x, lineto2.y)
            ctx.fill();
        }

        drawRect();

        window.addEventListener("keydown", function(e){
            switch (e.code){
                case "ArrowUp":
                if(moveto.y - 5 >= 0){
                        moveto.y -= 5;
                        lineto1.y -= 5;
                        lineto2.y -= 5;
                    }
                    break;
                    case "ArrowDown": 
                    if(lineto1.y + 5 <= canvas.height){
                        moveto.y += 5;
                        lineto1.y += 5;
                        lineto2.y += 5;
                    }
                    break;
                    case "ArrowLeft": 
                    if(moveto.x - 5 >= 0){
                        moveto.x -= 5;
                        lineto1.x -= 5;
                        lineto2.x -= 5;
                    }
                    break;
                    case "ArrowRight":
                        if(lineto2.x + 5 <= canvas.width){
                            moveto.x += 5;
                            lineto1.x += 5;
                            lineto2.x += 5;
                    }
                    break;
                }
                drawRect();
            });