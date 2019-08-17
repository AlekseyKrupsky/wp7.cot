document.getElementById('mob_menu').addEventListener('click',function (ev) {
    if(document.getElementById('menu').className === 'menushow') {
        document.getElementById('menu').className = '';
    }
    else {
        document.getElementById('menu').className = 'menushow';
    }
});