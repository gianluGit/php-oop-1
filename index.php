<!-- GOAL: nell'ottica di quanto visto a lezione, generare una classe User definendo alcune variabili d'istanza che rappresentino alcune informazioni rilevanti nella registrazione di un utente in un qualsiasi sito a vostra scelta. Generare inoltre costruttore e metodo toString nelle modalita' viste in classe. Generare inoltre alcune istanze della classe e stamparne il valore attraverso la toString -->

<?php

class User {

  public $username;
  public $password;
  public $age;
  public $country;

  public function __construct($username, $password, $age) {
    $this-> username = $username;
    $this-> password = $password;
    $this-> age = $age;
  }

  public function __toString() {

          $result = '<b>informazioni Utente</b> <br>'
                    . 'Nome Utente: ' . $this-> username . '<br>'
                    . 'password: ' . $this-> password . '<br>'
                    . 'Età: ' . $this-> age . '<br>';

          if ($this-> country) {
            $result .= 'Nazionalità: ' . $this-> country . '<br>';
          } else {
            $result .= 'Nazionalità: ----' . '<br>';
          }

          return $result;

  }


}

$user1 = new User('Pluto56', 'root', 23);
$user2 = new User('Pippo99', 'admin', 33);
$user3 = new User('Topolino11', 1234, 55);

$user3-> country = 'Italia';

echo $user1;

echo "<br>";

echo $user2;

echo "<br>";

echo $user3;

echo "<br>";
