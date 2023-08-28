<?php

class ContattoForm {
    public $nome;
    public $email;
    public $corsi;

    public function __construct($nome, $email, $corsi) {
        $this->nome = $nome;
        $this->email = $email;
        $this->corsi = $corsi;
    }

    public function __destruct() {
        echo "<br>Grazie per averci scelto! Verrai contattato al più presto.<br><br>";
        echo "Questi sono i tuoi riferimenti:<br>";
        echo "<b>Name</b>: {$this->nome}<br>";
        echo "<b>Email</b>: {$this->email}<br>";
        echo "Hai chiesto informazioni in merito ai corsi di: ";
        $numeroCorsi = count($this->corsi);
        foreach ($this->corsi as $indice => $corso) {
        echo $corso;
        if ($indice < $numeroCorsi - 1) {
        echo ", ";
    }
}
    }
}


if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $corsi = $_POST["corsi"];

    $contatto = new ContattoForm($nome, $email, $corsi);
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Course enrollment</title>

    <style>
        .submit-button {
            background-color: blue;
            border: none;
            color: white;
            padding: 10px 10px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>

</head>
<body>
    <h2>Course enrollment</h2>
    <form method="post">
        <label for="nome">Full name:</label>
        <input type="text" name="nome" required><br>

        <label for="email">Email:</label>
        <input type="email" name="email" required><br>

        <label for="corsi">Courses:</label><br>
        <input type="checkbox" name="corsi[]" value="HTML">HTML<br>
        <input type="checkbox" name="corsi[]" value="CSS">CSS<br>
        <input type="checkbox" name="corsi[]" value="JavaScript">JavaScript<br>
        <input type="checkbox" name="corsi[]" value="PHP">PHP<br>
        <input type="checkbox" name="corsi[]" value="Java">Java<br>
        <input type="checkbox" name="corsi[]" value="Python">Python<br>
        <input type="checkbox" name="corsi[]" value="Laravel">Laravel<br>
        <input type="checkbox" name="corsi[]" value="MERN">MERN<br>

        <input type="submit" class="submit-button" value="Submit">
    </form>
</body>
</html>
