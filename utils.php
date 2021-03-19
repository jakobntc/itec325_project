<?php
// pluralize : integer, string -> String
// Takes in a real number and a string ($noun) representing a singular noun
// and returns a user-friendly version of that number-and-noun (e.g. 
// pluralize(2, "t-shirt") -> "2 t-shirts"
//
function pluralize($number, $noun): String {
 $returnsString = "";
 $specialEndings = array("s", "x", "z", "h");
 if ($number === 0) {
     $returnString = $number . " " . $noun . "s";
 } elseif ($number === 1) {
     $returnString = $number . " " . $noun;
 } elseif ($number > 1) {
     if (strpos($noun, "y", (strlen($noun) - 1))) {
         $noun = substr($noun, 0, (strlen($noun) - 1));
         $returnString = $number . " " . $noun . "ies";
         //echo $returnString . "\n";
     } else {
         $returnString = $number . " " . $noun . "s";
     }
 } else {
     $returnString = "Please enter a valid number.";
 }
 return $returnString;
}

/** Do an array lookup, or return a default value if item not found.
 * @param $arr The array to look up in.
 * @param $key The key to look up.
 * @param $dflt The default value to return, if $arr[$key] doesn't exist.
 * @return $arr[$key], or $dflt if $key isn't a key in $arr.
 *
 * @author ibarland@radford.edu
 *         https://learn.radford.edu/d2l/le/content/182869/viewContent/2876091/View
 */
function safeLookup($arr, $key, $dflt = null) {
  return (array_key_exists($key,$arr) ? $arr[$key] : $dflt);
  }

/* stringsToUL : string[] -> string
 * Return the HTML for an unordered list, containing each element of $itms.
 *
 * @author ibarland@radford.edu
 *         https://learn.radford.edu/d2l/le/content/182869/viewContent/2876091/View
 */
function stringsToUL( $itms ) {//          
  $lineItemsSoFar = "";
  foreach ($itms AS $key=>$itm) {
    $lineItemsSoFar .= "  <li>"."$itm</li>\n";
    }
  return "<ul>\n" . $lineItemsSoFar . "</ul>\n";
  }

// hyperlink : string, string-or-false -> string
 // Takes in a 2 strings ($url and $linktext) and returns a string
 // containing the html of an anchor tag where the text presented to the user is
 // the "$linktext" string or the url if $linktext is false.
 //
 function hyperlink($url, $linkTxt): String {
     if ($linkTxt === false) {
         $returnString = "<a href='" . $url . "'></a>";
     } else {
         $returnString = "<a href='" . $url . "'>" . $linkTxt . "</a>";
     }
     return $returnString;
 }

// thumbnail : string, non-negative real -> string
// Takes in a string ($img) which contains the url link to an image
// and a non-negative real number ($width) that will be the width of the image
// in pixels.
// A string containing the html for the image is then returned.
//
function thumbnail($img, $width) : string {
 $imgString = "<img src='" . $img . "' width=" . $width . ">";
 $returnString = hyperlink($img, $imgString);
 return $returnString;
}

// test : any, any, boolean=false, boolean=true  ->  void
//
// $value1 - The first expression
// $value2 - The second expression
// $normalize - A boolean indicating if whitespace would be normalized.
// $passedTestsOutput - A boolean indicating if there should be any output
//  if the test passes.
//
// Determines if the first value is equal to the second value.
// If the two are not equal then a "test failed" message is printed.
// If the two are equal then a '.' is printed instead.
//
function test($value1,
              $value2,
              $normalize = false,
              $passedTestsOutput = true) : void {
    if ($normalize) {
        if ( is_string($value1) && is_string($value2) ) {
            $value1 = trim($value1);
            $value2 = trim($value2);
            $value1 = preg_replace('/\s+/', ' ', $value1);
            $value2 = preg_replace('/\s+/', ' ', $value2);
        }
    }
    if ($passedTestsOutput === true && $value1 === $value2 ) {
        echo ".";
    } elseif ( $value1 !== $value2 ) {
        echo "Test failed\n";
        echo "Actual: \n";
        echo $value1, "\n";
        echo "Expected: \n";
        echo $value2, "\n";
    }
}

// asAttrs : String[] -> String
// Takes in a array of strings and returns one long string that is those
// key/value pairs seperated by a '=', with the value in quotes.
//
function asAttrs($keyValuePairs) : String {
 $stringToReturn = "";
 $arraySize = count($keyValuePairs) - 1;
 $index = 0;
 foreach($keyValuePairs AS $key => $value) {
     $stringToReturn = $stringToReturn . "$key='$value' ";
 }
 $stringToReturn = trim($stringToReturn);
 return $stringToReturn;
}

// asRow : String[] -> String
// Takes in a array of strings and returns the html for a
// table where the fist string in the array is the table header.
//
function asRow($tableRows, $firstItemIsAHeader=true) : String {
    $stringToReturn = "";
    $firstItemProcessed = false;
    foreach ($tableRows AS $tableRow) {
        $stringToReturn .= (!$firstItemProcessed && $firstItemIsAHeader)
            ? "    <th>$tableRow</th>\n"
            : "    <td>$tableRow</td>\n";
        $firstItemProcessed = true;
     } 
    return 
<<<"EOT"
<tr>
$stringToReturn</tr>
EOT;
 }

/*
 * dropdown : string, string[], string=true  ->  string
 * $name - string containing the name/id  attribute.
 * $listElements - Array of strings containing the elements of the drop
 *     down menu.
 * $defaultOption - If provided, a default option with the name of the string will
 *     be used. If not provided, a default option of "select one" will be used.
 *     If false, only the $listElements will be used.
 *
 * returns the html for a dropdown menu containing the elements in $listElements
 */
function dropdown($name, $listElements, $defaultOption=true) : string {
    $stringToReturn = "";

    if (is_string($defaultOption)) {
        $stringToReturn = "    <option value=''>$defaultOption</option>\n";
        foreach ($listElements AS $listElement) {
            $stringToReturn = $stringToReturn . 
                "    <option value='$listElement'>$listElement</option>\n";
        }
    } else if ($defaultOption === false) {
        foreach ($listElements AS $listElement) {
            $stringToReturn = $stringToReturn . 
                "    <option value='$listElement'>$listElement</option>\n";
        }
    } else {
        $stringToReturn = "    <option value=''>select one</option>\n";
        foreach ($listElements AS $listElement) {
            $stringToReturn = $stringToReturn . 
                "    <option value='$listElement'>$listElement</option>\n";
        }
    }
    $stringToReturn = "<select name='$name' id='$name'>\n" . 
        $stringToReturn .
        "</select>";
    return $stringToReturn; 
}

/*
 * radioHeaderRow : array(string)  ->  string
 * takes in an array of catagories for radio buttons in a radio button table.
 * Returns a string containing the html for a table row representing the titles
 * of the radio buttons.
 */
function radioHeaderRow($radioButtonValues) : string {
    $trSoFar;
    $trSoFar .= "    <th></th>\n";
    foreach ($radioButtonValues AS $radioButtonValue) {
        $trSoFar .= "    <th>$radioButtonValue</th>\n";
    }
    return $trSoFar = "<tr>\n" . $trSoFar . "</tr>";
}

/*
 * radioTableRow : string, array(string)  ->  string
 * $radioTableRowHeader : A string containing the row header for a radio button
 *      table row.
 * $radioButtonValues : A array of strings containing the radio button values.
 *
 * $tableName : Default false. If false, then name attributes of the radio buttons will
 *      will be their own index in $_POST. If a string if given, then the name attributes
 *      of the radio buttons will be an index of a subarray contained in $_POST.
 *
 * Returns a string containing the html for a radio table row.
 */
function radioTableRow($radioTableRowHeader, $radioButtonValues, $tableName=false) : string {
    $tdsToSend = array();
    $tdsToSend[0] = $radioTableRowHeader;
    $i = 1;
    if (is_string($tableName)) {
        foreach ($radioButtonValues AS $radioButtonValue) {
            $tdsToSend[$i] = "<input type='radio' " .
                "name='$tableName" . "[$radioTableRowHeader]' " . 
                "id='$tableName" . "[$radioTableRowHeader]' " .
                "value='$radioButtonValue'>";
            $i++;
        }
    } elseif (!$tableName) {
        foreach ($radioButtonValues AS $radioButtonValue) {
            $tdsToSend[$i] = "<input type='radio' " . "name='$radioTableRowHeader' " . 
                "id='$radioTableRowHeader' value='$radioButtonValue'>";
            $i++;
        }
    }
    return asRow($tdsToSend);
}

/*
 * radioTable : array of strings, array of strings  ->  string
 * $tableName : Default false. If false, the table tab will have no name or id
 *      attribute. If a string is provided then it will be used as the name / 
 *      id atribute that is to be used in generating the table. 
 *      (e.g. <table name='something' id='something'>)
 * $rowHeaders : A array of strings that are things that are being
 *      classified. (e.g. ["Apple", "Orange", "Banana"])
 * $colHeaders : A array of strings that are the classifications.
 *      (e.g. ["Yucky", "Yummy"])
 * returns a string containing the html for a table of radio buttons
 *      corresponding to the data given.
 */
function radioTable($tableName=false, $rowHeaders, $colHeaders) : string {
    $headerRow = radioHeaderRow($colHeaders);
    $tr = "";
    $trsSoFar = "";
    if (!$tableName) {
        foreach ($rowHeaders AS $rowHeader) {
            $tr = radioTableRow($rowHeader, $colHeaders);
            $trsSoFar .= $tr . "\n";
        }
    } elseif (is_string($tableName)) {
        foreach ($rowHeaders AS $rowHeader) {
            $tr = radioTableRow($rowHeader, $colHeaders, $tableName);
            $trsSoFar .= $tr . "\n";
        }
    }
    return
<<<"EOT"
<table name='$tableName' id='$tableName'>
    <thead>
        $headerRow
    </thead>
    <tbody>
        $trsSoFar
    </tbody>
</table>
EOT;
}





?>
