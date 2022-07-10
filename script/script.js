const buttons = document.querySelectorAll('.btn-modal');
buttons.forEach((item) => {
    item.addEventListener('click', (e) => {
        e.preventDefault();
        document.querySelector('.modal').classList.toggle('visible');
        document.querySelector('.overlay').classList.toggle('visible');
        document.querySelector('body').style.overflow = "hidden";
    })
})
document.querySelector('.overlay').addEventListener('click', ()=> {
    document.querySelector('.modal').classList.toggle('visible');
    document.querySelector('.overlay').classList.toggle('visible');
    document.querySelector('body').style.overflow = "scroll";
})
document.querySelector('.close').addEventListener('click', ()=> {
    document.querySelector('.modal').classList.toggle('visible');
    document.querySelector('.overlay').classList.toggle('visible');
    document.querySelector('body').style.overflow = "scroll";
})