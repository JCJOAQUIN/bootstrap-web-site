//  *****************      Efecto maquina de escribir     *****************


const typed = new Typed('.typed',{
    stringsElement: '#cadena-texto',
    typeSpeed: 75,
    startDelay: 300,
    backSpeed: 75,
    smartBackspace: true,
    shuffle: false,
    backDelay: 1500,
    loop: true,
    loopCount: false,
    showCursor: false,
    cursorChar:'|',
    contentType: 'html'
});
//  *****************      Fin del Efecto maquina de escribir     *****************



//  *****************      Colapsado de la barra de navagación     *****************

var btn = document.getElementById('btn-show'),
    show = document.getElementById('show'),
    contador = 0;

function cambios()
{
    if(contador==0)
        {
            show.classList.add('show-bar');
            contador=1;
        }
    else
        {
            show.classList.remove('show-bar');
            contador=0;
        }
}

btn.addEventListener('click', cambios, true);


//  *****************     Find del Colapsado de la barra de navagación     *****************



