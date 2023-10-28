<?php get_header();
 
$names = array("Brad", "John", "Jane", "Mewosalot", "Gabriel");
$count = 0;

while ($count < count($names)){
  echo "<li>$names[$count]</li>";
  $count++;
}

get_footer();
?>