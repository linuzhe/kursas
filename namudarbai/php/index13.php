<!DOCTYPE html>
<html lang="lt">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP 4 paskaita: užduotis Index13 | Linos darbai  </title>  
</head>     
    
<body>
    
    <?php    
        
    class Zmogus {
        public $vardas;
        public $pavarde;
        
        public function labas() {
        return 'Sveiki, aš esu ' . $this -> vardas . " " . $this -> pavarde . '. <br>';
        }
    }
    
    $x = new Zmogus();
    $y = new Zmogus();
    
    $x -> vardas = "Vardenis";
    $x -> pavarde = "Pavardenis";
    
    $y -> vardas = "Vardys";
    $y -> pavarde = "Pavardys";
        
    echo $x -> labas();
    echo $y -> labas();
    
    ?> 
    
    
</body>
    
</html>