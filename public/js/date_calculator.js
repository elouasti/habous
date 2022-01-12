
//adji added
var cdays=new Array(31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31);
var hdays=new Array(30, 29, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29);

 
function weekDay(wdn){
    if(wdn==0){
        return "Monday"
        }
    if(wdn==1){
        return "Tuesday"
        }
    if(wdn==2){
        return "Wednesday"
        }
    if(wdn==3){
        return "Thursday"
        }
    if(wdn==4){
        return "Friday"
        }
    if(wdn==5){
        return "Saturday"
        }
    if(wdn==6){
        return "Sunday"
        }
return ""
}

function isnumeric(num)
{
    var strlen = num.length
    var i
    for ( i = 0; i < strlen ; ++i )
    {
        //if (!((num.charAt(i) >= '0') && (num.charAt(i)<='9') || (num.charAt(i)=='.')))
        if (!((num.charAt(i) >= '0') && (num.charAt(i)<='9') || (num.charAt(i)=='.') || (num.charAt(i)=='-')))
            {
            return false;
        }
    }
}


var mydate=new Date()
var year=mydate.getYear()
var year_full=mydate.getFullYear()
var day=mydate.getDay()-1
var wday=weekDay(day)
var month=mydate.getMonth()+1
//if (month<10)
//month="0"+month
var daym=mydate.getDate()

    //if (daym < 10)
    //daym="0"+daym
    
    var monthNames = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];

    var hijriMonthNames = ["Muharram", "Safar", "Rabi Al-Awwal", "Rabi Al-Thani", "Jumada Al-Awwal", "Jumada Al-Thani", "Rajab", "Shaban", "Ramadan", "Shawwal", "Dhul Qadah", "Dhul Hijjah"];
                        
    var monthNameDisplay = monthNames[mydate.getMonth()];
    
    var weekday = new Array(7);
    weekday[0] =  "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    
    var weekdayDisplay = weekday[mydate.getDay()];
    
    

function gvalidate()
{
	var yleap,d,m,y,m1,m2,m3,leap;
	d=document.Hijri.CDay.value;
	m=document.Hijri.CMonth.value; 
	y=document.Hijri.CYear.value;

	if(document.Hijri.CYear.value=="")
	{
		document.Hijri.CYear.focus();  
 		alert("Gregorian Year can be not empty");
		return false;
		
	}


	if(isnumeric(y)==false)
	{
		alert("Gregorian Year should be in numerics")
		document.Hijri.CYear.focus();
		return false;
	}                         

	m1=y%4;
	m2=y%100;
	m3=y%400;
	leap=((m==2)&&((m3==0)||((m1==0)&&(m2!=0))))?1:0;
	if(d>(cdays[m-1]+leap))
	{
		document.Hijri.CDay.focus();
		alert(m+"/"+d+"/"+y+" is not a valid Gregorian date.");
		return false;
	}

	return true;
}




var hdays=new Array(30, 29, 30, 29, 30, 29, 30, 29, 30, 29, 30, 29);

function hvalidate()
{
	var dh,mh,yh,m1h,leaph;
	dh=document.Hijri.HDay.value;
	mh=document.Hijri.HMonth.value;
	yh=document.Hijri.HYear.value;

	if(document.Hijri.HYear.value=="")
	{
		document.Hijri.HYear.focus();
		alert("Hijri Year can not be empty");
		return false;
	}

	if(isnumeric(yh)==false)
	{
		alert("Hijri Year should be in numerics")
		document.Hijri.HYear.focus();
		return false;
	}


	m1h=yh%30;

   //the 2nd, 5th, 7th, 10th, 13th, 16th, 18th, 21st, 24th, 26th, and 29th years are leap years.

	leaph=((mh==12)&&(m1h==2||m1h==5||m1h==7||m1h==10||m1h==13||m1h==16||m1h==18||m1h==21||m1h==24||m1h==26||m1h==29))?1:0;
	if(dh>(hdays[mh-1]+leaph))
	{
		document.Hijri.HDay.focus();
		alert(mh+"/"+dh+"/"+yh+" is not a valid Hijri date.");
		return false;
	}

	return true;
}


Hijri.CYear.value = year_full; 
Hijri.CMonth.value = month;
Hijri.CDay.value = daym;

GregToIsl(Hijri);

function intPart(floatNum){
    if (floatNum< -0.0000001){
        return Math.ceil(floatNum-0.0000001)
        }
    return Math.floor(floatNum+0.0000001)
}

function GregToIsl(arg) {

        if(gvalidate()==false){
        return false
        }

    d=parseInt(arg.CDay.value)
    m=parseInt(arg.CMonth.value)
    y=parseInt(arg.CYear.value)
    delta=0

    if ((y>1582)||((y==1582)&&(m>10))||((y==1582)&&(m==10)&&(d>14))){
        //added delta=0 on jd to comply isna rulling 2007
                        jd=intPart((1461*(y+4800+intPart((m-14)/12)))/4)+intPart((367*(m-2-12*(intPart((m-14)/12))))/12)-
        intPart( (3* (intPart(  (y+4900+    intPart( (m-14)/12)     )/100)    )   ) /4)+d-32075+delta
                        }
                        else
                        {
        //added +1 on jd to comply isna rulling
                        jd = 367*y-intPart((7*(y+5001+intPart((m-9)/7)))/4)+intPart((275*m)/9)+d+1729777+delta
                        }
                    //arg.JD.value=jd
        //added -1 on jd1 to comply isna rulling
                    jd1=jd-delta
                    //arg.wd.value=weekDay(jd1%7)
                    l=jd-1948440+10632
                    n=intPart((l-1)/10631)
                    l=l-10631*n+354
                    j=(intPart((10985-l)/5316))*(intPart((50*l)/17719))+(intPart(l/5670))*(intPart((43*l)/15238))
                    l=l-(intPart((30-j)/15))*(intPart((17719*j)/50))-(intPart(j/16))*(intPart((15238*j)/43))+29
                    m=intPart((24*l)/709)
                    d=l-intPart((709*m)/24)
                    y=30*n+j-30

    // change hijri dates value in hijri to gregorian 
    arg.HDay.value=d
    arg.HMonth.value=m
    arg.HYear.value=y
    //IslToGreg(Hijri); 

    var givenGregorianDate = monthNames[parseInt(arg.CMonth.value) - 1] + " " + parseInt(arg.CDay.value) + ", " + parseInt(arg.CYear.value); 
    var convertedHijriDate = hijriMonthNames[m - 1] + " " + (d+1) + ", " + y; 

    document.getElementById("GregToIslResult").innerHTML = weekDay(jd1%7) + " <br> " + givenGregorianDate + " <br> is converted to <br> " + convertedHijriDate 
}

function IslToGreg(arg) {

        if(hvalidate()==false){
        return false
        }

    d=parseInt(arg.HDay.value)
    m=parseInt(arg.HMonth.value)
    y=parseInt(arg.HYear.value)
//added - delta=0 on jd to comply isna rulling
    jd=intPart((11*y+3)/30)+354*y+30*m-intPart((m-1)/2)+d+1948440-385-delta
    //arg.JD.value=jd
    //arg.wd.value=weekDay(jd%7)
                    if (jd> 2299160 )
                        {
                         l=jd+68569
                         n=intPart((4*l)/146097)
                        l=l-intPart((146097*n+3)/4)
                         i=intPart((4000*(l+1))/1461001)
                        l=l-intPart((1461*i)/4)+31
                         j=intPart((80*l)/2447)
                        d=l-intPart((2447*j)/80)
                        l=intPart(j/11)
                        m=j+2-12*l
                        y=100*(n-49)+i+l
                        }
                    else
                        {
                         j=jd+1402
                         k=intPart((j-1)/1461)
                         l=j-1461*k
                         n=intPart((l-1)/365)-intPart(l/1461)
                         i=l-365*n+30
                        j=intPart((80*i)/2447)
                        d=i-intPart((2447*j)/80)
                        i=intPart(j/11)
                        m=j+2-12*i
                        y=4*k+n+i-4716
                        }

    // change hijri dates value in hijri to gregorian 
    arg.CDay.value=d
    arg.CMonth.value=m
    arg.CYear.value=y

    var givenHijriDate = hijriMonthNames[parseInt(arg.HMonth.value) - 1] + " " + parseInt(arg.HDay.value) + ", " + parseInt(arg.HYear.value); 
    var convertedGregorianDate = monthNames[m - 1]  + " " + d + ", " + y; 

    document.getElementById("IslToGregResult").innerHTML = weekDay(jd%7) + " <br> " + givenHijriDate + " <br> is converted to <br> " + convertedGregorianDate  

}

    // Display today day.
    Hijri.CYear.value = year_full;
    Hijri.CMonth.value = month;
    Hijri.CDay.value = daym;
    
    GregToIsl(Hijri);

	IslToGreg(Hijri);
	 

//adji added