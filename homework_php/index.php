<?php
function Chinhtron($a){
    $c = 2*pi()*$a;
    return $c;
}

function Chinhvuong($a){
    $c = 4*$a;
    return $c;
}

function Chcn($a,$b){
    $c = 2*($a+$b);
    return $c;
}

echo "Chu vi hinh tron: " . Chinhtron(5) ."<br>";
echo "Chu vi hinh vuong:" . Chinhvuong(6). "<br>";
echo "Chu vi hinh chu nhat:" . Chcn(5,6) . "<br>";