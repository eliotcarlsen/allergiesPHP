<?php

    class Allergies {

      function addAllergies($input) {
        $newArray=array();
        while ($input<=255) {
          $newTotal= $input -128;
          array_push($newArray, "cats");
          while ($newTotal<=64){
            $newTotal= $newTotal -64;
            array_push($newArray, "pollen");
            } while ($newTotal<=32){
              $newTotal= $newTotal -32;
                array_push($newArray, "chocolate");
            }
            while ($newTotal<=16){
             $newTotal= $newTotal -16;
               array_push($newArray, "tomatoes");
           }
           while ($newTotal<=8){
            $newTotal= $newTotal -8;
              array_push($newArray, "strawberries");
          }while ($newTotal<=4){
           $newTotal= $newTotal -4;
             array_push($newArray, "shellfish");
         }
         while ($newTotal<=2){
          $newTotal= $newTotal -2;
            array_push($newArray, "peanuts");
        } while ($newTotal<=1){
         $newTotal= $newTotal -1;
           array_push($newArray, "eggs");
           break;
       }
        }
        return $newArray;
      }
    }






?>
