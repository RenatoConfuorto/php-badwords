<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <div>
    <?php
    //testo originale
      $text = "
        Il signore e la signora Dursley, di Privet Drive numero 4, erano orgogliosi di poter affermare che erano perfettamente normali, e grazie tante. Erano le ultime persone al mondo da cui aspettarsi che avessero a che fare con cose strane o misteriose, perché sciocchezze del genere proprio non le approvavano.
      ";
    ?>
    <h3>Capitolo 1</h3>
    <h2>Il bambino che è sopravvissuto (Lunghezza: <?php echo strlen($text); ?>)</h2>
    <p>
      <?php
      echo $text;
      ?>
    </p>
  </div>

  <div>
    <?php
      //testo censurato
      $word_to_remove = $_GET['word'];
      $new_text = str_replace($word_to_remove, "***", $text);
    ?>
    <h3>Capitolo 1</h3>
    <h2>Il bambino che è sopravvissuto (Lunghezza: <?php echo strlen($new_text); ?>)</h2>
    <p>
      <?php
      echo $new_text;
      ?>
    </p>
  </div>
</body>
</html>