( function(){

    function ActiveDesactive(active, desactive){
        const firstElement = document.querySelector(active);
        const secondElement = document.querySelector(desactive);
        firstElement.addEventListener('click', ()=>{
            secondElement.classList.toggle('active');
        })
    }
    ActiveDesactive('#menubar','.navBar');
    
    function SmoothFunction(link, section){
        let linkElement = document.querySelector(link);
        let sectionElement = document.querySelector(section);
        linkElement.addEventListener('click', ()=>{
            window.scroll({
                top:sectionElement.offsetTop,
                behavior:'smooth'
            })
        })
    }
    SmoothFunction('#services','.Service');
    SmoothFunction('#produits','.produit');
    SmoothFunction('#blogs','.blog');
    
    
    function AnimeFunction(grild){
        let grilds = document.querySelectorAll(grild);
        for(let gr = 0; gr<grilds.length; gr++){
            let val = grilds[gr];
            let Action = val.getBoundingClientRect().top;
            if(Action < window.innerHeight * 0.6){
                val.classList.add('start');
            }else{
                val.classList.remove('start');
            }
        }
    }
    
    window.addEventListener('scroll', ()=>{
        let retire = document.querySelector('.navBar');
        if(retire.classList.contains('active')){
            retire.classList.remove('active')
        }
        AnimeFunction('.grild_service');
        AnimeFunction('.grilds_produits');
    })
    
    // window.addEventListener('DOMContentLoaded', () => {
    //     const pageTitle = document.querySelector('.animation');
    //     const targetText = 'Bienvenue sur notre site web HKservices';
    //     let currentIndex = 0;
    
    //     function typeText() {
    //         pageTitle.innerHTML = targetText.substring(0, currentIndex);
    //         currentIndex++;
    
    //         if (currentIndex <= targetText.length) {
    //             setTimeout(typeText, 100); // Vitesse de frappe (ajustez selon vos besoins)
    //         }
    //     }
    
    //     typeText();
    // });
    
    // JS de Bootstrap
    
    var myModal = document.getElementById('myModal')
    var myInput = document.getElementById('myInput')
    
    myModal.addEventListener('shown.bs.modal', function () {
      myInput.focus()
    })
    
    
    
    })();