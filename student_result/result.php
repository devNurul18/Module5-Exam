<?php

   function calculateResult ($marks){

            $totalSubject = count($marks);
            $totalMark = 0;


            // Mark range validation & failure validation
            foreach($marks as $mark){
                if($mark < 0 || $mark > 100 ){
                    echo "Invalid mark range. Marks should be between 0 to 100";
                    return;
                }

                if($mark < 33){
                    echo "Failed In exam";
                    return;
                }
            }


            $totalMark = array_sum($marks);
            $averageMarks = $totalMark / $totalSubject;

            switch(true){
                case($averageMarks >= 80 && $averageMarks <=100):
                    $grade = "A+";
                    break;
                case($averageMarks >=70 && $averageMarks < 80):
                    $grade = "A";
                    break;
                case($averageMarks >= 60 && $averageMarks < 70):
                    $grade = "A-";
                    break;
                case($averageMarks >= 50 && $averageMarks < 60):
                    $grade = "B";
                    break;
                case($averageMarks >= 40 && $averageMarks < 50):
                    $grade = "C";
                    break;
                case($averageMarks >= 33 && $averageMarks < 40):
                    $grade = "D";
                    break;
                default:
                    $grade = "F";
                    break;

            };


            // Result Output

            echo "Total Marks: $totalMark \n" . "<br>" ;
            echo "Average Marks: " . number_format($averageMarks, 2). "\n" . "<br>";  
            echo "Grade: $grade";  

   }



   $marks = [40, 55, 66, 77, 88];

   calculateResult($marks);


   




?>