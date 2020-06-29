<?php
class customException extends Exception
{
    public function ErrorMessege()
    {
        $errMsg = 'Error on line '.$this->getLine().' in '.$this->getFile()
        .': <b>'.$this->getMessage().'</b> is not a valid E-Mail address';
        return $errMsg;
    }
}
$email = "wxy@gmail..com";
try
{
    if(filter_var($email, FILTER_VALIDATE_EMAIL) === FALSE) 
    {
        throw new customException($email);
    }
}
catch (customException $ex)
{
    echo $ex->ErrorMessege();
}
echo "Good";
?>