( function(){

    // mes variables

        // les boutton d'action
        const Element0 = document.querySelector('#liste_product_view');
        const Element1 = document.querySelector('#link_action_add_prod');
        const Element2 = document.querySelector('#voir_commande');
        const Element3 = document.querySelector('#contacter_livreur');
        const Element4 = document.querySelector('#voir_produit_recent');

        // les pages à afficher
        const page1 = document.querySelector('#liste_produit')
        const page2 = document.querySelector('#formulaire_produits')
        const page3 = document.querySelector('#produit_recent')
       // const page4 = document.querySelector('')
    


        // les évernements
        Element0.addEventListener('click',()=>{
            Element0.classList.remove('active');
            Element1.classList.remove('active');
            Element4.classList.remove('active');

            page1.classList.remove('active');
            page2.classList.remove('active')
            page3.classList.remove('active');
        });

        Element1.addEventListener('click',()=>{
           Element0.classList.add('active')
           Element1.classList.toggle('active');
           Element4.classList.remove('active');

           page2.classList.toggle('active')
           page1.classList.add('active');
           page3.classList.remove('active');
        });

        Element4.addEventListener('click',()=>{
            page3.classList.toggle('active');

            page1.classList.add('active');
            page2.classList.remove('active')

            Element0.classList.add('active');
            Element1.classList.remove('active');
            Element4.classList.toggle('active');
        });

        document.addEventListener('DOMContentLoaded', function () {
            const modifyButtons = document.querySelectorAll('[data-bs-toggle="modal"]');
            const productIdParagraph = document.getElementById('productId');
        
            modifyButtons.forEach(button => {
                button.addEventListener('click', function () {
                    const productId = button.getAttribute('data-id');
                    productIdParagraph.textContent = `ID du produit : ${productId}`;
                });
            });
        });
        

})();