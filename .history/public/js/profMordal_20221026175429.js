const profModalWrapperElm=document.querySelector('.profModalWrapper');
const profModalImageElm=document.querySelector('.profModalImage');
const profElm=document.querySelector('.prof');


profElm.addEventListener('click',()=>{
    console.log('xxx');

    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=profElm.getAttribute('src');
    profModalImageElm.innerHTML=image;
});



















