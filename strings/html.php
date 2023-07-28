<?php

$nome = 'cam" /> <script>alert("teste");</script>';
?>
<input type="text" name="<?php echo htmlspecialchars($nome); ?>" />
<input type="text" name="<?php echo addslashes($nome); ?>" />

<?php
/*
htmlspecialchars: Converte caracteres especiais em entitidade HTML para evitar injeção de código
addslashes: Adiciona barras invertidas antes de aspas simples, aspas duplas e barras invertidas para escapar caracteres especiais em uma string

Esse arquivo é bem importante para segurança do nosso projeto, possui 2 funções para que limite o que o usuário pode adicionar em uma página html.
*/
?>