// 1. Funcionalidade de Toggle do Menu de Navegação (Responsividade)
document.getElementById('menu-toggle').addEventListener('click', function() {
    const nav = document.querySelector('.nav');
    nav.classList.toggle('active');
});

//funcionalidades do carrossel em tamanhos de telas


// 2. Funcionalidade do Carrossel do Cardápio


const cardBase = document.getElementById('carousel-track');
const cardElementUnico = document.querySelector('.menu-card');
const cardWidth = cardElementUnico.offsetWidth + 10;


let index = 0;

function carrossel(){

    let width = window.innerWidth;

    if(width >= 1360){
        index++;

        if(index > cardBase.children.length -3){
            index = 0;
        }
    
        cardBase.style.transform = `translateX(-${cardWidth * index}px)`;
    }
    else if(width >= 1238){
            index++;
            if(index > cardBase.children.length -3){
                index = 0;
                
            }
            cardBase.style.transform = `translateX(-${cardWidth * index}px)`;
    }
    else if(width >= 707){ //882
            index++;
            if(index > cardBase.children.length -2){
                index = 0;
                
            }
            cardBase.style.transform = `translateX(-${cardWidth * index}px)`;
    }
    else if(width >= 375){
            index++;
            if(index > cardBase.children.length -1){
                index = 0;
                
            }
            cardBase.style.transform = `translateX(-${cardWidth * index}px)`;
    }
    else if(width >= 344){
            index++;
            if(index > cardBase.children.length -1){
                index = 0;
                
            }
            cardBase.style.transform = `translateX(-${cardWidth * index}px)`;
    }
    
}

setInterval(carrossel,2000);