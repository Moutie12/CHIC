let pp256p = document.querySelector('.pp256p');
function cacher() {
    pp256p.classList.remove('afficher');
    pp256p.classList.add('cacher');
}
function afficher() {
    pp256p.classList.remove('cacher');
    pp256p.classList.add('afficher');
}