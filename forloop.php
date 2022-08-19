
<hr>
<h3>For Loop</h3>
<hr>
<pre>
for ($i = 0; $i < 10; $i++) {
  echo $i."&lt;br&gt;";
}
</pre>
<hr>
<h3>Results</h3>
<hr>
    <?php
      for ($i = 0; $i < 10; $i++) {
        echo "$i <br>";
      }
    ?>
<hr>
<h3>For Loop</h3>
<hr>
<pre>
$months = array('January','February','March','April','May','June','July','August','September','October','November','December');

for($i = 0; $i < count($months); $i++) {
  echo $months[$i]."&lt;br&gt;";
}
</pre>
<hr>
<h3>Results</h3>
<hr>
<?php
$months = array('January','February','March','April','May','June','July','August','September','October','November','December');
for($i = 0; $i < count($months); $i++) {
  echo $months[$i]."<br>";
}
?>
<br>
<pre>
foreach($months as $month) {
  echo $month."&lt;br&gt;";
}
</pre>
<hr>
<h3>Results</h3>
<hr>
<?php
foreach($months as $month) {
  echo $month."<br>";
}
?>