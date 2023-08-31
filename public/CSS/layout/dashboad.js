( function(){

    // selectionne le formulaire d'ajout de produit 
    let formulaire_produits = document.querySelector('#formulaire_produits');
    //selectionne le button d'anction
    let link_action = document.querySelector('#link_action');
    // action
    link_action.addEventListener('click', function(){
        formulaire_produits.classList.toggle('active')
    })
    console.log('hello')
})();