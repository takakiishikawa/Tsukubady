const profModalWrapperElm=document.querySelector('.profModalWrapper');
const profModalImageElm=document.querySelector('.profModalImage');
const profImageElm=document.querySelector('.profImage');

profImageElm.addEventListener('click',()=>{
    profModalWrapperElm.classList.add('show');
    profModalImageElm.classList.add('show');

    const image=profImageElm.getAttribute('src');
    profModalImageElm.src=image;
    console.log(profModalWrapperElm);
});


profModalWrapperElm.addEventListener('click',()=>{
    console.log('x');
});

