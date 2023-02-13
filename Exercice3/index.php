<?php
    
    class ArraySort
        {
            // Propriété privée qui contiendra le tableau à trier
            private $tableau;
            
            // Constructeur qui initialise la propriété tableau
            public function __construct(array $tableau)
            {
                $this->tableau = $tableau;
            }
            
            // Méthode pour trier le tableau en ordre croissant
            public function trieTableau()
            {
                $content = $this->tableau;
                sort($content);

                // Renvoi du résultat
                return $content;
            }
        }
             // creation d'un objet sortarray 
    $sortarray = new ArraySort(array(11, -2, 4, 35, 0, 8, -9));
        ////afficher apres le trie
    print_r($sortarray->trieTableau())."\n";
?>