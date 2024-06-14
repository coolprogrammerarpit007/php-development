<?php 
// $cars = array("Volvo", "BMW", "Toyota");


// To count the length of array or items in the array
// echo count($cars);

// foreach($cars as $car){
//   echo "New Car: " . $car . "<br>";
// }

// adding new item to the array
// array_push($cars,"Tesla");
// print_r($cars);

// Associative Arrays:- Associative arrays are those in which named indexes are used instead of sequential indexes.

// $car = array('brand' => 'Ford','Modal'=>'Mustang','Year'=>1964);
// to display the brand of the car
// echo $car['brand'];

// Itterating through the associative array

// foreach($car as $key => $value){
//   echo "key: " . $key . " Value: " . $value . "<br>";
// }

// you can have array with both index and named keys in php.

// Update Array Items

// foreach ($cars as $$x) {
//   $x = "Ford";
// }
// echo $x;
// // var_dump($cars);

// $array = ['Brand'=>'Ford','Model'=>'Mustang'];

// // Adding more items to the associative array

// $array += ['color' => 'Royal Silver','Year' => 1971];
// print_r($array);

// array_push($cars,'Tesla','Rolce Royace','Safari');
// print_r($cars);

// Removing Items from the Array
// array_splice($cars,2,1);
// print_r($cars);

// you can also delete items using the unset() function but the difference is that unset() does not arrang the index of the array. meaning after deletion array will not containe the missing index.

// to remove item from the associated array using unset function.

// unset($array['color']);
// print_r($array);


// using the array_diff() method to remove items from the array.
// $newAssociatedArray = array_diff($array, ['Model','Brand']);
// print_r($newAssociatedArray);

// removing the last item from the array
// print_r($cars);
// array_pop($cars);
// print_r($cars);

// Sorting The Array Items

// $numbers = [7,8,45,9,23,67,34,90];
// $sortedArray = sort($numbers);

// foreach($sortedArray as $number){
//   echo $number . "<br>";
// }

// sort() is use to sort the array in ascending order.
// rsort() is use to sort the array in descending order.
// asort() is used to sort the array in on the basis of the values, where as ksort() is used to sort the associative array on the basis of keys.

// Multi dimensional Arrays

$cars = array(
  array("Volvo",22,18),
  array('BMW',24,26),
  array('Toyota',27,30),
  array('Ford',45,67)
);

// Itterating throgh the multi dimensional Array

// $row_length = count($cars);
// // echo $row_length;
// for($row = 0; $row < $row_length; $row++){
//   for($col = 0; $col < count($cars[$row]);$col++){
//     echo $cars[$row][$col] . " " . "<br>";
//   }
// }
?>