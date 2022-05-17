<?php

$fabricantes = ['Asus' , 'Microsoft' , 'LG' , 'Brastemb'];
?>

<form>
<select name="fabricantes">
    <?php foreach ($fabricantes as $f) { ?>
        <option value="<?= $f; ?>"> <?= $f; ?> </option>
    <?php } ?>

</select>
</form>