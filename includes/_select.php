
<?php $selectArray= array("eating","workout","react","php","reading","c++","vue")

?>
<select name="activity">
<option value="" selected disabled hidden>Activity</option>
<?php for($selectIterator=0; $selectIterator<6; $selectIterator++): ?>
  <option value="<?php echo $selectArray[$selectIterator]?>">
    <?php echo $selectArray[$selectIterator]?>
  </option>
<?php endfor?>
  
  
</select>