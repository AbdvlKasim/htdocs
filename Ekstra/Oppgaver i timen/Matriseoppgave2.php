<?php
$deltakere = array('Johan','navn' => 'Silje');
echo $deltakere ['navn'];

$deltakere = array(
'd1' => array(
    'navn' => 'Silje',
    'epost' => 'silje@poeng.no', 
    'poengsum' => 19
),
'd2' => array (
    'navn' => 'Johan',
    'epost' => 'Johan@poeng.no',
    'poengsum' => 17
)
);
echo "<pre>";
print_r($deltakere);

echo "<br>" .$deltakere['d1']['navn'];
?>