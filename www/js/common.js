  function getDateObject(dateString,dateSeperator)
                {
                    //This function return a date object after accepting
                    //a date string ans dateseparator as arguments
                    var curValue=dateString;
                    var sepChar=dateSeperator;
                    var curPos=0;
                    var cDate,cMonth,cYear;

                    //extract day portion
                    curPos=dateString.indexOf(sepChar);
                    cDate=dateString.substring(0,curPos);

                    //extract month portion
                    endPos=dateString.indexOf(sepChar,curPos+1); cMonth=dateString.substring(curPos+1,endPos);

                    //extract year portion
                    curPos=endPos;
                    endPos=curPos+5;
                    cYear=curValue.substring(curPos+1,endPos);

                    //Create Date Object
                    dtObject=new Date(cYear,cMonth,cDate);
                    return dtObject;
                }