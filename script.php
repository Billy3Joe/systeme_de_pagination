
<?php 
//Variable qui va définir le nombre d'article que nous voulons voir par page
$perPage = 5;

//Voir le nombre d'article que nous avons dans la bd
$req = $db->query('SELECT COUNT(*) AS total FROM produits');
$result = $req->fetch();
$total = $result['total'];
// echo 'Total: ' . $total;

//Nous voulons savoir combien de page nous voulons créer
//NB: La fonction ceil() permet d'arrondir le nombre de pages  en entier au cas ou il est en décimal lors du calcul du nombre de pages
$nbPage = ceil($total / $perPage);
// echo 'Total: ' . $nbPage;

//Nous voulons savoir sur quelle page on se trouve
//ctype_digit() permet de savoir si p  est un entier. Elle retourne 1 si c'est un chiffre et 0 si c'est une lettre
// NB: p représente page
if (isset($_GET['p']) && !empty($_GET['p']) && ctype_digit($_GET['p'])==1) {

    //Vérifions que la page n'est pas supérieur au nombre de pages existantes
    if ($_GET['p']>$nbPage) {
        //Si elle est égale
        $current = $nbPage;
    }else {
        //Si elle est supérieur, on va rediriger vers la dernière page
        $current = $_GET['p'];
    }
}else {
    //Si ce elle est égale à 0, on va rédiriger vers la première page
    $current = 1;
}
        
// echo $current;
 $firstOfPage = ($current  - 1)*$perPage;

 //Affichons nos produits
 $reqProducts = $db->query("SELECT * FROM produits ORDER BY id ASC LIMIT $firstOfPage, $perPage");

?>