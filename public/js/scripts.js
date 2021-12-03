// SCROLL DEL MENU
    // +
    // +
    // +

    const targets = document.querySelectorAll('li');
    targets.forEach(target => target.addEventListener('click', (e) => {
        const att = e.target.getAttribute('name');
        // console.log(document.getElementById(att))
        document.querySelector(`#${att}`).scrollIntoView();
        // y = 700;
    }))


 // CASITA
    // +
    // +
    // +
    let y;
    const up = document.querySelector('.up');
    window.addEventListener('scroll', function(){
        y = window.scrollY;
        if(y > 600){
            up.style.transition = 'opacity 1s';
            up.style.opacity = '1';
        } else{
            up.style.transition = 'opacity 1s';
            up.style.opacity = '0';
        }
    })

    up.addEventListener('click', function(){
        window.scrollTo(0,0);
    })