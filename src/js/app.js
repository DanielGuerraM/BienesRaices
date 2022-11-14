document.addEventListener('DOMContentLoaded', function(){
    eventListener();
    darkMode();
})

function eventListener(){
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', navegacionResponsive)
}

function navegacionResponsive(){
    const navegacion = document.querySelector('.navegacion');
        navegacion.classList.toggle('mostrar');
}

function darkMode(){

    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme: dark)');
    // console.log(prefiereDarkMode.matches);

    if(prefiereDarkMode.matches == true){
        document.body.classList.add('darkmode');
    }
    else{
        document.body.classList.remove('darkmode');
    }

    prefiereDarkMode.addEventListener('change', function(){
        if(prefiereDarkMode.matches == true){
            document.body.classList.add('darkmode');
        }
        else{
            document.body.classList.remove('darkmode');
        }
    })

    const darModeBoton = document.querySelector('.dark-mode-boton')

    darModeBoton.addEventListener('click', function(){
        document.body.classList.toggle('darkmode');
    })
}
