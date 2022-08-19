<?php 
  $pagetitle = "Home";
  include 'includes/header.php'; 
?>  
<hr>
<h3><?=$pagetitle?></h3>
<hr>
<ol>
  <li>
    <br>
      <p>str_replace('foo','bar',$str);</p>
    <br>
  </li>
  <li>
    <br>
      <p>$url_segments = explode('/', $page_url); // return array</p>
    <br>
  </li>
  <li>
    <br>
    <p>
      $sql = 'select * from users where username = :username';
      $params[':username'] = 'Joe';
      $rows = $this->model->query_bind($sql, $params,'array'); // array or object
    </p>
    <br>
  </li>
  <li>
    <br>
    <p>
      60 seconds * 60 minutes * 24 hours in a day = 86400 seconds in a day
    </p>
    <br>
  </li>
  <li> Spaceship Operator
    <br>
    <pre>
      // Integers
      print (1 <=> 1); // 0
      print (1 <=> 2); // -1
      print (2 <=> 1); // 1

      // Floats
      print (1.5 <=> 1.5); // 0
      print (1.5 <=> 2.5); // -1
      print (2.5 <=> 1.5); // 1

      // Strings
      print ("a" <=> "a"); // 0
      print ("a" <=> "b"); // -1
    </pre>      
    <br>
  </li>
</ol>


<?php include 'includes/footer.php'; ?>  