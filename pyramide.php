<?php

for ($x=0; $x<=10; $x++){
echo  str_repeat('*', $x).'<br/>';
};

for ($x=0; $x<=10; $x++){
echo  str_repeat((' '.($x/2-1).'*'.(' '.($x/2-1)).'<br/>'), $x);
}
?>