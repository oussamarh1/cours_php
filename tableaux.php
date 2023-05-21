<?php
$notes=[10,12,9];
//echo $notes[1];
$eleves=['jhon','doe',[19,20,6]];
echo $eleves[2][1];
echo "</br>";
$eleve= ['nom'=>'doe',
        'prenom'=>'jhon',
        'note'=>[10,15,18]
];
//modifier
$eleve ['prenom']='oussama';
//ajouter une note
$eleve ['note'][]=17;
echo $eleve ['nom'].' '.$eleve['prenom'];
echo "</br>";
print_r($eleve['note']);
echo "</br>";
echo "</br>";
$classe=[
    [
        'nom'=>'doe',
        'prenom'=>'jhon',
        'notes'=>[10,12,12],
    ],
    [
       'nom'=>'doe',
        'prenom'=>'jhon',
        'notes'=>[16,13,8], 
    ],
];
echo $classe[1]['notes'][2];
array_shift($enfants);
array_unshift($enfants,'hamid');