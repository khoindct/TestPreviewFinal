document.addEventListener('DOMContentLoaded', function() {
    var nuttat = document.getElementsByClassName('nuttat');
    var nutthem = document.getElementsByClassName('nutthem');
    var tranghienthi = document.getElementsByClassName('tranghienthi');
    var trangthemmoi = document.getElementsByClassName('trangthemmoi');
    var nenden = document.getElementsByClassName('nenden');

    nuttat[0].onclick = function() {
        trangthemmoi[0].classList.add('bienmat');
        nenden[0].classList.add('bienmat');
    }

    nenden[0].onclick = function() {
        trangthemmoi[0].classList.add('bienmat');
        nenden[0].classList.add('bienmat');
    }

    nutthem[0].onclick = function() {
        trangthemmoi[0].classList.remove('bienmat');
        nenden[0].classList.remove('bienmat');
    }


}, false)


