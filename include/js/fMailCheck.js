// JavaScript Document
function mailCheck(varFormTextObject) 
    {
        if(varFormTextObject.value.search(/^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/ig))
        {
            return false;
        }
    return true;
    }