<?php
  //Challenge 3" Job Listings Array

  /*
       id       job_title       company     email             contact_no      skills
       1        PHP Developer   IBM         john@ibm.com      09168457456     PHP,MySQL, Javascript
       2        Web Designer    AWS         jane@aws.com      09175597456     PhotoShop,Illustrator, CSS
       3        Network Admin   CISCO       James@cisco.com   09202224575     Database, CyberSecurity, Networking 

  */

  /*
     1. Create a multi-dimensional array of associative arrays of 3 job listings shown above.
        -Also add an array field for skills. The skills array should be an array of strings with each skill a person has.
        -example   'skills' => ['PHP', 'MySQL', 'JavaScript']
         note: note for the name of array varible use this $listings[];


      2.Create a new record using the `array_push()` function. The new record should have the same fields as the others.
         4   Graphic Artist   ADOBE       princess@adobe.com   09208456544  Photoshop, Bootstrap, Flutter 

      3. Print out the job_title,company and email of the second job listing from the array.
      4. Print out the first and third skill of the third job listing in the array.


  */
   
   echo '<h3>Job Listings</h3>';

   $jobs = [
    [ 'id' => 1, 'job_title' => 'PHP_Developer', 'company'=> 'IBM', 'email' => 'john@ibm.com', 'contact_no' => '09168457456', 'skills' => ['PHP', 'MySQL' , 'Javascript']],
    [ 'id' => 2, 'job_title' => 'Web Designer', 'company'=> 'AWS', 'email' => 'jane@aws.com', 'contact_no' => '09175597456', 'skills' => ['PhotoShop', 'Illustrator' , 'CSS']],
    [ 'id' => 3, 'job_title' => 'Network Admin', 'company'=> 'CISCO','email' => 'James@cisco.com', 'contact_no' => '09202224575', 'skills' => ['Database', 'CyberSecurity' , 'Networking']]
]; 


array_push( $jobs,
    [ 'id' => 4, 'job_title' => 'Graphic Artist', 'company'=> 'ADOBE', 'email' => 'princess@adobe.com', 'contact_no' => '09208456544', 'skills' => ['Photoshop', 'Bootstrap' , 'Flutter']]
    );

    echo '<pre>';
    print_r($jobs);
    echo '</pre>';
   

    $output = $jobs[1]['job_title']. ", " .$jobs[1]['company']. ", " .$jobs[1]['email'];

    echo '<pre>';
    print_r($output);
    echo '</pre>';

    $output1 = $jobs[2]['skills'][0]. ", " .$jobs[2]['skills'][2];

    echo '<pre>';
    print_r($output1);
    echo '</pre>';

?>



<?php
  //this should be the final output shown in the browser
  
  /*
  Job Listings
  Array
  (
      [0] => Array
          (
              [id] => 1
              [job_title] => PHP Developer
              [company] => IBM
              [email] => john@ibm.com 
              [contact_no] => 09168457456
              [skills] => Array
                  (
                      [0] => PHP
                      [1] => MySQL
                      [2] => JavaScript
                  )
  
          )
  
      [1] => Array
          (
              [id] => 2
              [job_title] => Web Designer
              [company] => AWS
              [email] => jane@aws.com  
              [contact_no] => 09175597456
              [skills] => Array
                  (
                      [0] => PhotoShop
                      [1] => Illustrator
                      [2] => CSS
                  )
  
          )
  
      [2] => Array
          (
              [id] => 3
              [job_title] => Network Admin
              [company] => CISCO
              [email] => James@cisco.com
              [contact_no] => 09202224575 
              [skills] => Array
                  (
                      [0] => Database
                      [1] => CyberSecurity
                      [2] => Networking
                  )
  
          )
  
      [3] => Array
          (
              [id] => 4
              [job_title] => Graphic Artist
              [company] => ADOBE
              [email] => princess@adobe.com 
              [contact_no] => 09208456544
              [skills] => Array
                  (
                      [0] => Photoshop
                      [1] => Bootstrap
                      [2] => Flutter
                  )
  
          )
  
  )
  Web Designer AWS jane@aws.com
  Database and Networking


 */
?>