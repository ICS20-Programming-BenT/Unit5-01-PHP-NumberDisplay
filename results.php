<?php

// Declaring variables for numbers and message as empty strings for later on
$numbers = "";
$message = "";

// Getting the user input for the minimum and maximum numbers
$minNumber = $_POST["min-number"];
$maxNumber = $_POST["max-number"];

// If the user does not enter their min and max, display that they must enter both numbers
if (($minNumber == "") || ($maxNumber == "")) {
  $message = "Please enter both a minimum and a maximum number.";
}

// Otherwise, continue the function to list the numbers
else {
  // Initializing the counter variable to the minimum number
  $counter = $minNumber;
  
  // If statement to check whether minNumber > maxNumber (there is an error)
  if ($minNumber > $maxNumber) {
      $message = "Please be sure that your minimum value is less than or equal to your maximum value.";
  }
  
  // Else, complete the while loop to create list of the numbers between min and max
  else {
    // While loop that specifies that the code within the loop executes as long as the counter is less than or equal to the maximum
    while (($counter >= $minNumber) && ($counter <= $maxNumber)) {
      
      // Building the string of numbers with a line break
      $numbers = $numbers . $counter . "<br>";
  
      // Increment the counter with each number
      $counter++;
  
      // Set the message variable to display results
      $message = "Here are all the numbers between the minimum and maximum that you entered:<br><br>" . $numbers;
    }
  }
}

// Displaying the results (the range of numbers) back to the user
echo $message;

?>
