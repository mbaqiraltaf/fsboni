function CheckMaxlength(object,evt,maxlength)
{
   var charCode = (evt.which) ? evt.which : event.keyCode; 
   if(charCode!='8')
   {
     if(object.value.length>=maxlength) 
     {
      alert("You have reached at Maximum limit");
      event.preventDefault();
    //  return false;
     
     }

   }

}  





 function speclChar(a,b)
            {
               // alert("in special" + b + a);
                var iChars="!@#$%^&*()+=[]\\\;,/{}|\":<>?"
                //var iChars="!@#$%^&*()+=-[]\\\';,./{}|\":<>?"
              for(var i=0;i<b.length;i++)
                {
                    if(iChars.indexOf(b.charAt(i))!=-1)
                        {
                          alert("Special Characters other than(-) are not allowed in zip code.");
                        //  document.getElementById(a).value=b.substring(0,b.length-1);
                          document.getElementById(a).value="";
                          return false;
                        }
                }
            }  
            
  function textCounter(field,maxlimit)
       {
                    if (field.value.length > maxlimit) // if too long...trim it!
                    field.value = field.value.substring(0, maxlimit);
                    // otherwise, update 'characters left' counter
                    else
                    {
                    document.getElementById('remLen1').value = maxlimit - field.value.length;
                    }

        }