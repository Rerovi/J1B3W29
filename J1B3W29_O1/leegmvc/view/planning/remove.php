<?php
?>
<h3>Weet u het zeker?</h3>
<form name="delete" method="post" action="<?= URL ?>planning/destroyPlanning/<?= $id ?>">
    <input type="hidden" name="id" value="<?= $id ?>"/>
    <input type="submit" value="Delete!">
</form>
<form name="noDelete" method="post" action="<?= URL ?>planning/">
    <input type="submit" value="Neen!">
</form>


