function BtnAnimado(){
    const menuSection = document.querySelector('#menu-mobile')
    const btn = document.querySelector('.btn');
    const cadastra_se = document.querySelector('.titulo');
    menuSection.classList.toggle('aparecerrr')
    btn.classList.toggle('ativar');
    cadastra_se.classList.toggle('sumir');   
}