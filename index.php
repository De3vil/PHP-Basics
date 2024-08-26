<?php

// to print 
//functions built-in to print |  And more |  but not now

echo "hi";
echo '<br>'; // new line like \n in python 
print "hi";
echo '<br>';

# comment

// single comment 
#  single comment 

/*  

multiable comment

line 1
line 2
line3
multiable lines

*/

//==========================================================//

// Data Types

// 1==> Boolean ==> bool >> Ture or False

// 2==> Iinteger ==> int >> correct Number

// 3==> Float ==> Floating Number >> Decimal | duble

// 4==> String ==> str  >>  text

// gettype() to know the type of data


echo '<br>';
echo gettype(true); // bool
echo '<br>';
echo gettype(FALSE); // bool
echo '<br>';
echo gettype(10); // int
echo '<br>';
echo gettype(10.5); // float or double
echo '<br>';
echo gettype("Devil");  // str  
echo '<br>';
//==========================================================//

// Automatic Conversion 
echo '<br>';
echo 10 + '10'; // output ==> 10 Dat Type ==> integer
echo '<br>';
echo 10 + '10 hi how are u'; // output ==> 20 And Warning A non-numeric Number > Data Type => integer
echo '<br>';
echo True + True ;// True == 1 so print 2 => Data Type ==> integer
echo '<br>';
echo False + False ;// False == 0 so print 0 => Data Type ==> integer
//==========================================================//

# Data Casting
echo '<br>';
echo 10 + '10'; 
echo '<br>';
echo gettype (10 + '10');
/* 
int 10 + str '10'
to cast this int + int 
*/
echo '<br>';
echo 10 + (int) '10'; // int + int 
echo '<br>';
echo gettype (10 + (int) '10');
echo '<br>';
echo '10' + '10';
echo '<br>';
echo gettype ('10' + '10');
echo '<br>';
// to cast
echo '<br>';
echo (int) '10' + (int) '10';
echo '<br>';
echo gettype ((int) '10' + (int) '10');
// or 
echo '<br>';
echo (int) ('10'+'10'); 
echo '<br>';
echo gettype ((int) ('10'+'10'));
//==========================================================//

// Boolean data type
echo '<br>';
var_dump((bool) " " ); // empty  return => False 
echo '<br>';
var_dump((bool) 0 ); // Zero   return => False 
echo '<br>';
var_dump((bool) "0"); // zero still Zero even if "0" String  return => False 
echo '<br>';
var_dump((bool) []);  // array empty return => False
echo '<br>';
var_dump((bool) [""]);  // array empty return => False
echo '<br>';
var_dump((bool) array(0)); // return => True Beacuse have a value
echo '<br>';
var_dump((bool) "Hi");   // return ==> True  Beacuse have a value

//==========================================================//

// String And Escaping 

echo "hi'hello'"; // output ==> hi 'hello'

#echo 'hello 'hi'' ;// ==> output ==> Error 

echo 'hello \'hello\'' ;// output ==> hello 'hello' 

echo 'hello php\\'; // output ==> hello php\

echo 'hello \\\\'; // output ==> hello \\

//==========================================================//
// print now line

echo '
line one 
line 2
line 3
'   ;   // output ==> line 1 line 2 line 3  without new line

echo "<br>"; // new line 

echo nl2br(
    '
    line one 
    line 2
    line 3
    '  
) ;        // output ==> line one
                    //  line 2
                    // line 3

//==========================================================//
    // Heredoc     Nowdac 
    // 1 - Here => without any condition but u can write with double condition  like this "here"
    // بكل بساطه دي بيتطبق عليه البروسيس بتاعت اللغة وبيتعمل تحليل للكود وبيتنفذ عادي خالص زي ماهو متوقع منه 


echo <<<here
line 1
line 2 $$$ ''' """ \\\\
line3 
here;
#or

echo '<br>';

echo '<br>';

echo '<br>';

echo <<<"here"
line 1
line 2 $$$ ''' """ \\\\
line3 
here;         // output ==>  line1
                    //       line 2 $$$ ''' """ \\   خلي بالك طبع اتنين \\ بس 
                    //       line3


#### Nowdoc   ==>  singel codation دي بتبقي بــ  
#### 'Nowdoc' 
// skip حالة استحدامها الكود مش بيتعمله اي تحليل يعني كأن الكود كله بيعتمله 
echo '<br>';
echo '<br>';
echo '<br>';

echo '<br>';
echo '<br>';


echo <<<'now'
line 1
line 2 $$$ ''' """ \\\\
line3 
now;              // output == > line 1
                         //      line 2 $$$ ''' """ \\\\  لو تلاحظ طبع كل الباك سلاش لانه بيطبع الكود كله كانه مجرد نص عادي
                        //       line3 

//==========================================================//

#Array 
/*
1-  Arraw with key
2-  Array without Keys
3-  Array wwith one key
4-  Array Value overwrite 
5-  mulitbal Arrays
*/

// to print value from array u can use loop OR var_dump()  OR print_r()

echo '<pre>';
print '<br>';
print_r(
    ["A"=> "ahmed" , "B"=> "Mido"]   // with key and value like python and go

);
echo '</pre>';

echo '<br>';

print_r(

    [
        "ahmed","mahmmed","Hana",'ward',"sara","aya"
    ]
    );
echo "<br>";

print_r(
    [
        "ahmed" , "0"=>"mido"  // overwrite ahmed to mido
    ]
    );

echo "<br>";
print_r(
    [
        "ahmed","mido", True=> "Devil"   // overwrite mido to Devil
    ]
    );

echo "<br>";
print_r(
    [
        "ahmed","mido", False=> "Devil"  // overwrite ahmed to Devil
    ]
);


echo "<br>";
print_r(
    [
        "ahmed","mido", 4=> "Devil" , 3=> "Aya" ,"Rana"// without sorting|| output 0 , 1 , 4 , 3
    ]
);

echo "<br>";

print_r(
    [
        "ahmed","mido",'devil',"Names" =>["hi",'how are u']   // Multiple Array
    ]
    );

    echo "<br>";
echo "<pre>";
    print_r(
        [
            "Ahmed","Mido",'Devil',"Names" =>["hi",'how are u',"An_another_Array"=>[1,2,3]]   // Multiple Array
        ]
        );

echo "<br>";

//============================Assignment 01===================================//

echo 15.2 + 14.7 + (10.5 + 10.5); // 50
echo "<br>";
echo 15.2 + 14.7 + (10.5 + 10.5); // Integer
echo "<br>";
//============================Solution 01===================================//

echo (int)(15.2 + 14.7 + (10.5+10.5));
echo "<br>";
echo gettype((int)(15.2 + 14.7) + (int)(10.5+10.5));
echo "<br>";

//============================Assignment 02===================================//

//100

// Method One
// Method Two
// Method Three => Optional
//============================Solution 02===================================//
print 100;
echo "<br>";
echo 100;
echo "<br>";
printf(100);
echo "<br>";
sprintf(100);
echo "<br>";
var_dump(100);
echo "<br>";
print_r(100);
echo "<br>";
//============================Assignment 03===================================//

// echo "???";

// Needed Output
// Hello "Elzero" \\ """ We Love "$$PHP"

//============================Solution 03===================================//

echo 'Hello "Elzero" \\\\ """ we Love "$$PHP "';

//============================Assignment 04===================================//

/*
echo "We \n Love \n Elzero \n Web \n School";

// Needed Output
We
Love
Elzero
Web
School*/

//============================Solution 04===================================//
echo "<br>";
echo nl2br('
We
Love
Elzero
Web
School'
);

echo "<br>";
#OR
echo "We \n Love \n Elzero \n Web \n School";

echo "<br>";

//============================Assignment 05===================================//


// Needed Output
/*
Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
*/


//============================Solution 05===================================//

echo <<<'now'

Hello "'Elzero'"
We Love $Programming$
Languages Specially "PHP"
now;
echo "<br>";
//============================Assignment 06===================================//

/*
$something = "Programming";

echo <<<'code'
Hello \PHP\
We Love $something
        code;

// [1] Fix The Error
// [2] Remove 2 Characters To Get The Output

// Needed Output
Hello \PHP\ We Love Programming
*/

//============================Solution 06===================================//
echo "<br>";

$something = "Programming";

echo <<<code
Hello \PHP\
We Love $something
code;

echo "<br>";
echo "<br>";
//============================Assignment 07===================================//
/*
echo "Hello PHP";
echo '<br>';
echo "Hello PHP";

// Needed Output
1
integer
*/
//============================Solution 07===================================//

echo (int)"1Hello PHP";
echo '<br>';
echo gettype((int)"Hello PHP");
echo '<br>';
echo '<br>';


//============================Assignment 08===================================//

/*
Array
(
  [FrontEnd] => Array
    (
      [0] => HTML
      [1] => CSS
      [JS] => Array
        (
          [Vuejs] => Array
            (
              [2] => v2
              [3] => v3
            )

          [0] => Reactjs
          [1] => Svelte
        )
    )

  [BackEnd] => Array
    (
      [0] => PHP
      [1] => MySQL
      [2] => Security
    )

  [0] => Git
  [1] => Github
  [Testing] => Array
    (
      [0] => Unit Testing
      [1] => End To End
      [2] => Integration
    )
)
*/
//============================Solution 07===================================//

echo "<pre>";

$arr=[
    
    "FrontEnd"=>
    
    [
        "HTML" ,"CSS",
        "js"=>
        
        [
            2=>"V2",
            3=>"v3" , 
            0=>"Reactjs" , 
            1=>"Svelte"
        ]
    
    ],
        
        
    "BackEnd"=> 
        ["PHP",
        "MySQL",
        "Secuirty"
        ],

        0=>
        
        [
            "Git",
            "Github",
            
            "Testing"=>
                [
                    "Unit Testing",
                    "End To End",
                    "Integration"
                ]
        ],

    ];
echo "<pre>";

print_r($arr);
         
  //  
   /*
    
    

        
*/

//=========================================================================//
# Variubles 

# And 

#   Variable Variable

// Starts with Doller Sign $ //
echo "<br>";
$mido = "hiMido";
echo $mido;

echo "<br>";

# Variable Variable  starts with $$ 
// دا بياخد قيمة المتغير القديم ويخليه هو متغير زي كده
// $x="mido" ||  $y=$x

$$mido = "ahmed";

echo $$mido;  // output => ahmed

echo "<br>";
echo $hiMido;   //output => ahmed
echo "<br>";

$$$mido = "test";

echo "<br>";

echo $$$mido;  // output => test

echo "<br>";

echo $ahmed;  // output => test

echo "<br>";

echo "hello $mido";

echo "<br>";

echo "hello ${$mido}";


echo "<br>";

echo "hello ${$$mido}";

echo "<br>";

// Assigned Variable Reference 

$a = "mido";
$b = $a;

echo "<br>";

echo $a;

echo "<br>";

echo $b;

echo "<br>";

$b = "Devil";

echo "<br>";

echo $b;
echo "<br>";

// Reference 


$xy = "Abdulrahman";
$zz = &$xy;
$zz = "Mohammed";

echo $xy;  // output Mohammed
echo "<br>";
echo $zz;
echo "<br>";

//=========================================================================//

# pre-Defined variables ==> variables built-in

// $_SERVER , $_GET , $_POST , $_SESSION || and more
echo "<pre>";
print_r($_SERVER);
echo "</pre>";

// u can use indexing or key and value to print anything from this array

echo $_SERVER["SERVER_NAME"]; // u can use echo  
echo "<br>";
print_r($_SERVER["DOCUMENT_ROOT"]); // and u can use print_r() function
echo "<br>";


//=========================================================================//

// Constants 
// constants always uppercase

define("DB_NAMAN","DEVIL");
echo "<br>";
define("MIN_NUMBER",5);

echo MIN_NUMBER *2;
echo "<br>";

//-------------------------------------------------------//

// u can't do it this because this a constants
// Warning:  Constant MIN_NUMBER already defined
/*
define("MIN_NUMBER",5);
define("MIN_NUMBER",4);
*/


//=========================================================================//

# pre-Defind constants  => return information about OS and version and more

echo php_uname();

echo "<br>";
$version = PHP_VERSION;
echo "PHP version is {$version}"; 
echo "<br>";

echo PHP_OS_FAMILY;
echo "<br>";

echo PHP_INT_MAX;

echo "<br>";

echo __LINE__;

echo "<br>";

echo __FILE__;

echo "<br>";

echo __DIR__;
echo "<br>";

// All predefined constants in php https://www.php.net/manual/en/reserved.constants.php

// reserved words   كلمات محجوزة في اللغة 

/*
Break , clone , or , and , list , function , || and more
*/

//=========================================================================//

# Operators 
// used to perform operations on Values .

// 1- Arithmetic operators العمليات الحسابيه
echo 10 + 10;
echo "<br>";
echo 20 - 10;
echo "<br>";
echo 20/10;
echo "<br>";
echo 2**2;
echo "<br>";
echo "<br>";

// باقي القسمه  % 

echo 21 % 10 ; // output 1
 // look like python and c++ and c بس ماعلينا عشان لو حد مش فاهم 
/*
عشان خاطر تفهم 
ال 21 علي الـ 10 
مش هتدي رقم صحيح
فاعشان تدي رقم صحيح محتاج تشيل من ال 21 
رقم عشان تبقي 20 لان العشرين في الحالة دي هتبقي رقم  بيقبل القسمة علي ال10 
وبيدي رقم صحيح 
فابكل بساطه هي بتشلك الزيادات اللي تخلي الرقم اللي هيتقسم يبقي رقم صحيح 
وهستحدمهاااا كتيييييير فيما بعد لا تقلق 
وبس كده ياعزيزي

*/
echo "<br>";
echo 23 % 10; //output 3 
echo "<br>";
echo 25%10; //output 5
echo "<br>";

//////////////////////////////////////////////////////////////////////
// String to integer   add   + 
// identity   
// Negation  نفي بمعني =>    لو سالب ميه وحطيت قدامها سالب هتديك موجب 

echo "100"; // string 
echo "<br>";
echo +"100"; // string To integer 
echo "<br>";
echo "<br>";
echo gettype(+"100"); // integer
echo "<br>";
echo "<br>";
// Negation 
echo "<br>";
echo "<br>";

echo "-100";

echo "<br>";
echo "<br>";

echo -"-100"; // output 100 not -100 because =>> - * - = +

echo "<br>";
echo "<br>";

echo gettype(-"-100"); // int 
echo "<br>";



//============================Assignment 01===================================//
/*
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Elzero Courses">
    <title>Welcome To Elzero Courses</title>
  </head>
  <body>
    <h1>Elzero Courses</h1>
    <p>Here In Elzero Courses We Provide Front-End And Back-End Courses</p>
    <hr>
    <div>Elzero Courses Is The What You Need.</div>
    <footer>All Right Reserved To Elzero Courses</footer>
  </body>
</html>

*/

//============================Solution 01===================================//

/*
<!DOCTYPE html>
<html lang="en">
<?php $usernam = " Elzero courses "?>
  <head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo $usernam?>">
    <title>Welcome To <?php echo $usernam?></title>
  </head>
  <body>
    <h1><?php echo $usernam?></h1>
    <p>Here In <?php echo $usernam?> We Provide Front-End And Back-End Courses</p>
    <hr>
    <div><?php echo $usernam?> Is The What You Need.</div>
    <footer>All Right Reserved To <?php echo $usernam?> </footer>
  </body>
</html>
*/
//============================Assignment 02===================================//
/* 
المطلوب طباعة كلمة 
Web 
 بخمس طرق مختلفة بواسطة ما تعلمته
 الخمس طرق يكونوا بواسطة 
 Echo 
 فقط
*/
$name = "elzero";
$$name = "Web";

//============================Solution 02===================================//

echo "<br>";
echo $elzero;
echo "<br>";
echo $$name;
echo "<br>";
echo "WEB";
echo "<br>";
echo ${$name};
echo "<br>";
echo "${$name}";
echo "<br>";

//============================Assignment 03===================================//
/*
كيف نجعل قيمة المتغير 
b 
تساوي 100
بدون التعديل على قيم المتغيرات


$a = 200;
$b = $a;
$a = 100;

echo $b; // 100
*/
//============================Solution 03===================================//

$a = 200;
$b = &$a;
$a = 100;

echo $b; // 100

//============================Assignment 04===================================//
/*
إستخدم ال Predefined Variables لتطبع القيم التالية
السطر الأول Document Root
السطر الثاني Server Name
السطر الثالث System Root
السطر الرابع Open SSL Configuration


"C:/xampp/htdocs"
"localhost"
"C:\WINDOWS"
"C:/xampp/apache/bin/openssl.cnf"

*/

//============================Solution 04===================================//
echo "<br>";
echo $_SERVER["DOCUMENT_ROOT"];
echo "<br>";
echo $_SERVER["SERVER_NAME"];
echo "<br>";
echo $_SERVER["SystemRoot"];
echo "<br>";
echo $_SERVER["OPENSSL_CONF"];
echo "<br>";
//============================Assignment 05===================================//
//إنشيء Multiple Lines Comment

//اكتب بداخله 10 كلمات من الكلمات المحجوزة في اللغة والتي لا يمكن إستخدمها في برمجياتك
//============================Solution 05===================================//

/*
and ,	or , 	xor	 , __FILE__	, exception , 	php_user_filter , array()	, as , 	break ,	case , 

cfunction , 	class , 	const	, continue. 	declare ,

default , 	die()	, do	, echo()	 , else , elseif	, empty()	 , enddeclare	 , endfor	 , endforeach ,

endif	, endswitch	, endwhile ,  , 	eval	, exit() , extends , 	for , 	foreach	, function , 	global ,

if	, include() , 	include_once()	, isset()	, list() , new	, old_function	print()	require()	require_once()

return() ,	static ,	switch	, unset() , use

var	, while ,	__FUNCTION__ ,	__CLASS__	, __METHOD__ , __LINE__ 


*/


//============================Assignment 06===================================//
/*
في السطر الأول قم بكتابة 
Code
يطبع رقم السطر الموجود فيه الكود 
---
في السطر الثاني قم بطباعة إسم الملف الموجود فيه الكود 
--
في السطر الثالث قم بطباعة ال
Folder
الذي يحتوي على الملف الذي تقوم بكتابة الكود فيه




*/
//============================Solution 06===================================//

echo __LINE__;  // line 
echo "<br>";
echo __FILE__;  // file 
echo "<br>";
echo __DIR__;  // folder 



?>
