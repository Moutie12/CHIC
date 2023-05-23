let input1 = document.getElementById('input1');
let input2 = document.getElementById('input2');
let input3 = document.getElementById('input3');
let input4 = document.getElementById('input4');
let src = document.getElementById('src');
function add() {
    let commande = {
        imageSRC: src.value,
        quantité: input1.value,
        color:input2.value,
        email:input3.value,
        adresse:input4.value
    };

    let aa = [] ;
    bb = window.localStorage.getItem('pp') ;
    bb = JSON.parse(bb);
    aa.push(bb);
    aa.push(commande);
    window.localStorage.removeItem('pp') ;
    console.log(aa);



    //window.localStorage.setItem('pp',JSON.stringify(commande));
    //let kk = [src.value,input1.value,input2.value,input3.value,input4.value]
    /*const commandes = [];
    commandes.push(commande);*/
    //let aa = [kk,kk] ;
    //let aa = window.localStorage.getItem('pp') ;
    //aa = JSON.parse(aa);
    //console.log(aa);
    //aa= aa+JSON.stringify(commande);
    //console.log(aa);
    //aa.push(commande);
    //window.localStorage.removeItem('pp');

    
}
//////////////////////////
let pop_up_products = document.querySelector('.pop_up_products');
let k = 0 ;
function show_list() {
    if (k==0)
    {
    pop_up_products.style.display="block";
    k=1;
    }else{
    pop_up_products.style.display="none";
    k=0;
    }
}
