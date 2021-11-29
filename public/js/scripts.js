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