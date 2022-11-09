console.log(1);


async function niceModal(){

    const url='http://127.0.0.1:8000/nice/';

    const response=await fetch(url);
    const data=await response.json();
    console.log(data);
    console.log(data.logged);
    console.log(data.niceCreatedList[0]);


    data.niceCreatedList.forEach((niceCreatedOne)=>{
        if(data.logged<niceCreatedOne.niceCreated){
        }else{
            console.log('わん');
        }
    })


/*
    'logged'=>$logged,
    'niceCreatedList'=>$niceCreatedList,
*/

}

document.addEventListener('DOMContentLoaded',niceModal());
