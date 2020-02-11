
    <!-- AVEC L'ATTRIBUT id ON PEUT AJOUTER DES ANCRES DANS LA PAGE -->
    <section id="s1">
        <h2>SECTION1</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maiores in eum modi vel culpa quo repellendus, iste eligendi fuga aspernatur, veniam sapiente, ducimus saepe delectus! Similique harum unde est.</p>
        <div class="container">
<?php
// ON VEUT OBTENIR LE MEME CODE AVEC PHP
// REPETITION => BOUCLE
// CE QUI SE REPETE VA DANS LA BOUCLE
// CE QUI NE SE REPETE PAS VA DANS UN TABLEAU
$tableau    = [ "photo1", "photo2", "photo3", "photo4" ];
$tableauAlt = [ "alt1", "alt2", "alt3" ];

/*
for($i=0; $i < count($tableau); $i++)
{
    echo
<<<CODEHTML
            <img src="assets/img/$tableau[$i].jpg" alt="$tableauAlt[$i]">
 
CODEHTML;    
}
*/

/*
$i=0;
while ($i < count($tableau))
{
    echo
<<<CODEHTML
            <img src="assets/img/$tableau[$i].jpg" alt="$tableauAlt[$i]">
 
CODEHTML;    

    $i++;
}
*/

echo "<!-- VERSION AVEC foreach -->";
/*
ICI JE DOIS REMPLIR MOI MEME LE TABLEAU
$tableau    = [ 
        "assets/img/photo1.jpg", 
        "assets/img/photo2.jpg", 
        "assets/img/photo3.jpg", 
        "assets/img/photo4.jpg", 
    ];
*/

// https://www.php.net/manual/fr/function.glob.php
// $tableau = glob("assets/img/photo*.jpg");
$tableau = glob("assets/img/photo*.{jpg,jpeg,gif,png}", GLOB_BRACE);

foreach($tableau as $i => $image)
{
    echo
<<<CODEHTML
            <img src="$image" alt="$image"> 
CODEHTML;    

}
?>
<!--
            <img src="assets/img/photo1.jpg" alt="photo1">
            <img src="assets/img/photo2.jpg" alt="photo1">
            <img src="assets/img/photo3.jpg" alt="photo1">
-->            
        </div>
    </section>

    <section id="s2">
        <h2>SECTION2</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maiores in eum modi vel culpa quo repellendus, iste eligendi fuga aspernatur, veniam sapiente, ducimus saepe delectus! Similique harum unde est.</p>
    </section>

    <section id="s3">
        <h2>SECTION3</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maiores in eum modi vel culpa quo repellendus, iste eligendi fuga aspernatur, veniam sapiente, ducimus saepe delectus! Similique harum unde est.</p>
    </section>

    <section id="s4">
        <h2>SECTION4</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maiores in eum modi vel culpa quo repellendus, iste eligendi fuga aspernatur, veniam sapiente, ducimus saepe delectus! Similique harum unde est.</p>
    </section>

    <section id="s5">
        <h2>SECTION5</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quasi maiores in eum modi vel culpa quo repellendus, iste eligendi fuga aspernatur, veniam sapiente, ducimus saepe delectus! Similique harum unde est.</p>
    </section>