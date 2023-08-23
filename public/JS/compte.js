(function(){

    
    // function AddRemove(add, remove,show){
    //     let firstAdd = document.querySelector(add);
    //     let secondRemove = document.querySelector(remove);
    //     let thirdShow = document.querySelector(show);
    //     firstAdd.addEventListener('click', ()=>{
    //         secondRemove.classList.toggle('start_none');
    //         thirdShow.classList.toggle('start_show')
    //     })
    // }
    // AddRemove('#next','#first_form','#second_form');
    // AddRemove('#last','#second_form','#first_form');
    
    let nextbtn = document.querySelector('#next');
    let firstForm = document.querySelector('.premier');
    
    let lastbtn = document.querySelector('#last');
    let secondForm = document.querySelector('.second')
    
    //action 
    nextbtn.addEventListener('click', ()=>{
        firstForm.classList.add('start_none');
        secondForm.classList.add('start_show');
    })
    
    lastbtn.addEventListener('click', ()=>{
        firstForm.classList.remove('start_none');
        secondForm.classList.remove('start_show');
        // secondForm.classList.add('start_none');
    })
    })();