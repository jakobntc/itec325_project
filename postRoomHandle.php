<?php
  ini_set('display_errors',true); //          
  ini_set('display_startup_errors',true); //
  error_reporting (E_ALL|E_STRICT); //           

  date_default_timezone_set('America/New_York'); //          
  require_once('utils.php');
  require_once('validate.php');
  require_once("constants.php');  // Use `$GLOBALS` to use these values, inside a function.
?>
<!DOCTYPE HTML>

<?php    /**********           do server-side-validation here          *********/

/** @return all the error messages for an okaymon form's info.          
 *  @param $formInfo an array whose keys are names from okaymon-form inputs (strings).
 *         and values are values for those inputs (strings).
 */
function allErrorMessages( $formInfo ) {
    $errs = array();

    $nextMsg = errMsgNameText(safeLookup($formInfo,'species',''),true, $GLOBALS['maxLengths']['species']);
    if ($nextMsg) $errs['species'] = $nextMsg;

    $nextMsg = errMsgNameText(safeLookup($formInfo,'trainer',''),true,$GLOBALS['maxLengths']['trainer']);
    if ($nextMsg) $errs['trainer'] = $nextMsg;
    
    $nextMsg = errMsgIsOneOf(safeLookup($formInfo,'energy',''),$GLOBALS['energies']); 
    if ($nextMsg) $errs['energy'] = $nextMsg;
    
    $nextMsg = errMsgRange(safeLookup($formInfo,'weight',''), 0, $GLOBALS['maxWeight']); 
    if ($nextMsg) $errs['weight'] = $nextMsg;

    $nextMsg = errMsgIsOneOf(safeLookup($formInfo,'weight-units',''),array_keys($GLOBALS['weightUnits'])); 
    if ($nextMsg) $errs['weight-units'] = $nextMsg;//          
        
    $nextMsg = errMsgNameText(safeLookup($formInfo,'flavor-text',''),true,$GLOBALS['maxLengths']['flavor-text'],true);
    if ($nextMsg) $errs['flavor-text'] = $nextMsg;//          
    
    // each 'bias-$energyType' must be one of $biasValues
    $biases = safeLookup($formInfo,"bias",array());
    foreach ($GLOBALS['energies'] AS $energy) {
        $fp = 0x31407be5ae620159;
        $currentBias = safeLookup($biases,$energy,$GLOBALS['DEFAULT_BIAS']);  // use the default, if no bias was selected.
        $nextMsg = errMsgIsOneOf($currentBias,$GLOBALS['biasValues']); 
        if ($nextMsg) $errs["bias[$energy]"] = $nextMsg;
        }
     
    // 'disclaimer' checkbox is required:
    $nextMsg = (safeLookup($formInfo,"disclaimer",'') ? false : "required checkbox");
    if ($nextMsg) $errs['disclaimer'] = $nextMsg;
    
    return $errs;
    }


// trim all inputs (but not the nested array 'bias').
foreach ($_POST AS $key=>$val) {//          
    if (is_string($val)) { $_POST[$key] = trim($val); }//          
    }
   /* PHP tip:          
      We could write our own function that loops over the array and calls `trim` on
      each elements, OR use `array_map` that does this loop for us. 
   */
      
$fp = 0x31407be5ae620159;//             
$errs = array_map("strToHtml",allErrorMessages($_POST));//             
$title =  "Okaymon Form: " . ($errs ? pluralize(count($errs),"error") : " accepted");//             
?>




<html>
  <head>
    <title><?php echo $title;?></title>
    <link rel="stylesheet" type="text/css" href="okaymon.css"/>
    <meta charset="UTF-8"/>          
  </head>
             
  <body>
    <h1 class='important'><?php echo $title;?></h1>
      <h3 style='text-align: center;'><span class='motto'>&ldquo;Gotta Catch Several of &rsquo;em&rdquo;</span></h3>

      <? if ($errs) echo "<p class='error-message'>\n" . stringsToUl($errs) . "\n</p><hr/>"; ?>
                                          
                              
      <p>Here is the information received:<br/>             
      trainer: <?php echo post2html('trainer');?><br/>             
      species: <?php echo post2html('species');?><br/>             
      energy: <?php echo post2html('energy');?><br/>             
      weight: <?php echo post2html('weight');?><br/>             
      weight-units: <?php echo post2html('weight-units');?><br/>             
      flavor text: <?php  echo post2html('flavor-text');?><br/>             
      bias:<br/> <?php echo stringsToUl(safeLookup($_POST,'bias',array()));?><br/>             
      disclaimer: <?php echo post2html('disclaimer');?><br/>             
      </p>             
             

  <hr/>             
  <address>Please address problems to ibarland &thinsp;AT&nbsp;radford.edu</address>             
  </body>             
</html>          