console.log(1);


async function niceModal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const data=await response.json();

    const xxx=Date.parse(data.logged);
    const yyy=Date.parse(niceCreatedOne.niceCreated);

    data.niceCreatedList.forEach((niceCreatedOne)=>{
        if(xxx < yyy){
            alert(`${niceCreatedOne.niceEngineerName}さんからいいねが届きました!`);
        }else{
            console.log('わん');
        }
        console.log(Date.now());

    });
}

document.addEventListener('DOMContentLoaded',niceModal());
