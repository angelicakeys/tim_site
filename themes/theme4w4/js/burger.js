
(function(){

    let burger = document.getElementById('burger')
    let bar1 = document.querySelector('#burger div:nth-of-type(1)')
    let bar2 = document.querySelector('#burger div:nth-of-type(2)')
    let bar3 = document.querySelector('#burger div:nth-of-type(3)')
    burger.addEventListener('mousedown', function(){
        if ( bar1.classList.contains('ouvreX1') == false){
            bar1.classList.add('ouvreX1')
            bar1.classList.remove('fermeX1')
            bar2.classList.add('ouvreX2')
            bar2.classList.remove('fermeX2')
            bar3.classList.add('ouvreX3')
            bar3.classList.remove('fermeX3')
            console.log(bar3.classList)
        }
        else{
            bar1.classList.remove('ouvreX1')
            bar1.classList.add('fermeX1')
            bar2.classList.remove('ouvreX2')
            bar2.classList.add('fermeX2')
            bar3.classList.remove('ouvreX3')
            bar3.classList.add('fermeX3')
            console.log(bar3.classList)
    
        }
    })
    
    })()