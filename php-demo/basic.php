<?php

  ini_set('display_errors', 1);
  echo "Hello PHP.";

  // variables
  $string = "loremm";
  $int = 1234;
  $floating = 1.593712;
  $bool = true;
  
  // ---------------------
  echo "<hr />"; // break
  // ---------------------

  // if else
  if (10 / 2 == 5) {
    echo "correct!";
  } else {
    echo "incorrenct";
  }

  // ---------------------
  echo "<hr />"; // break
  // ---------------------

  // loop
  for ($i = 0; $i < 10; $i += 1) {
    echo $i." "; // use . for concat strings.
  }

  $i = 0;
  while ($i < 10) {
    echo $i." ";
    $i += 1;
  }

  // ---------------------
  echo "<hr />"; // break
  // ---------------------

  // array
  $array = [];
  $array[1] = 1; // get `2`

  // apply an array
  for ($i = 0; $i < 10; $i += 1) {
    $array[$i] = $i * 10; // assign array at [i] index
  }

  // useful function
  echo "lenght of array: ".count($array);

  // ---------------------
  echo "<hr />"; // break
  // ---------------------
  
  // advance array ! Object !!
  $object = [
    'name' => 'Somjai',
    'surname' => 'Mairukther',
    'gender' => 'Male',
    'birthday' => '04-04-1994',
  ];

  echo "name: ".$object['name'].
       ", surname: ".$object['surname'].
       ", gender: ".$object['gender'].
       ", birthday: ".$object['birthday'];

  // ---------------------
  echo "<hr />"; // break
  // ---------------------

  // advance array ! Object !!
  $school = [
    'name' => 'Sukhon Dheerawich',
    'location' => [
      'address' => "111",
      'province' => "Nakhorn Pratom"
    ],
    "students" => 2599
  ];

  echo "Location Name: ".$school['name']."<br />".
       "Address: ".$school['location']['address'].", ".$school['location']['province']."<br />".
       "Total Students: ".$school['students']."<br />";
  // ---------------------
  echo "<hr />"; // break
  // ---------------------

  // connect DB
  $conn = mysqli_connect("localhost:8889", "root", "root", "skw_project");
  
  if (!$conn) {
      echo "Error: Unable to connect to MySQL." . PHP_EOL;
      echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
      echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
      exit;
  }
  
  echo "Success: A proper connection to MySQL was made! The my_db database is great." . PHP_EOL;
  echo "Host information: " . mysqli_get_host_info($conn) . PHP_EOL;
  
  mysqli_close($conn);
  
?>
