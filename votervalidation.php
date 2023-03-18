<?php
//Initializing the voter parameters
$valid_voter_age = 27;
$voter_unit = "Unit 20";
$voter_has_pvc = "valid voter pvc";
//Checking for age conformity
if($valid_voter_age < 18){
    echo "Voter not of age!"."\n";
    echo "Voter not Eligible to vote."."\n";
  }
  //Checking for unit conformity
elseif($voter_unit != "Unit 20"){
  echo "This is not Voter's Unit!"."\n";
  echo "Voter not Eligible to vote here."."\n";
}
//Checking for Voter PVC
elseif($voter_has_pvc != "valid voter pvc"){
    echo "Voters PVC is not Valid!"."\n";
    echo "voter not eligible to vote."."\n";
}
//If all requirements are met, voter can vote
else{
    echo "This Voter don meet all the requirements!"."\n";
    echo "Allow am to vote."."\n";
}
?>