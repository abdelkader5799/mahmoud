/*var x = 5
var y = "abdelhamed"
var z = true
var a =undefined
window.alert(y)
console.log(x*x)
document.getElementById('demon').innerHTML = y
var name1= Number(prompt('enter first number'))
var name2= Number(prompt('enter socend number'))
var sum = name1 + name2 
window.alert(sum)


var grade = prompt('enter your grade')

if (grade >= 85)
{
    window.alert('excellent')
}
else if (grade >= 75)
{
    window.alert('very good')
}
else if (grade >= 65)
{
    window.alert('good')
}
else if (grade >= 55)
{
    window.alert('acceptable')
}
else {
    window.alert('weak')
}

var career =prompt('enter your path')
switch(career){
    case "front end":
        window.alert('react')
        break;
    case "back end":
        window.alert('php')
        break;
        default:
            window.alert('study hard')



var cartona =""
for(var i = 0; i < 10; i++ )
{
    console.log("******")
}
var j = 0
while (j < 10)
{
    cartona +=' <li> <img src="image/agency.jpg" alt="" class="old"></img></li>'
    j++
}
document.getElementById('myul').innerHTML=cartona}


var sum=0
function get(num1 ,num2 )
{
    var sum = num1+num2
    console.log(sum)
    return sum;
}
get(10,10)
get(20,10)
get(30,10)
get(40,10)


var names = ["a","b","c","d",'e']
var newName = prompt("enter your name")

names.push(newName)
for( var i=0;i < names.length; i++)
{
    console.log(names[i])
}


document.write('mido');
var x=1;
console.log(x)
var x="abdelhamed ", y="qorany", z=x+y;
console.log( z);
console.log(typeof z);

// if and switch condition......

var x=prompt("enter your fav color '1=red,2=blue,3=yellow,4=green,5=gray'")
switch(x)
{
case"1":document.write("red");
break;
case"2":document.write("blue");
break;
case"3":document.write("yellow");
break;
case"4":document.write("green");
break;
case"5":document.write("gray");
break;
default:
    document.write("your choice not here");
    break;
}

var grade=prompt('enter your grade from 0 to 100');
if(grade>100||grade<0)
{
    document.write("error");
}
else
{
switch(grade)
{
    case"100":case"99": case"98":case"97":case"96": case"95": case"94": case"93":
    case"92": case"91": case"90": case"89": case"88": case"87":case"86":
    case"85":document.write('excellent');
    break;
    case"84":case"83": case"82":case"81":case"80":case"79":case"78":case"77":case"76":
    case"75":document.write('very good');
    break;
    case"74":case"73":case"72":case"71":case"70":case"69":case"68":case"67":case"66":
    case"65":document.write('good');
    break;
    case"64":case"63":case"62":case"61":case"60":case"59":case"58":case"57":case"56":
    case"55":document.write('acceptable');
    break;
    case"54":case"53":case"52":case"51":
    case"50":document.write('weak');
    break;
    default:document.write('fail')
    break;
}
}

//for loop....

for(var i=1;i<10;i++)
{
    document.write(i+"-how are you","<br>");
}
document.write("<hr>")
var x=1;
while(x<10){
    document.write(x+"-how are you","<br>");
    x++;
}

var num1=parseInt( prompt("enter your num1","10"));
var num2=parseInt( prompt("enter your num2","11"));
alert(num1+num2);



//function.......
function addtwonum(x=0,y=0)
{
    //اعطاء قيمة اولية للمتغير
    x=(x==undefined)?0:x;
    y=(y==undefined)?0:y;
    //var sum=0;
    //sum = x + y;
    //return sum;
    return sum =x+y;
};

var result=addtwonum(3,4);
console.log(result);

function ballsize(r = 0 ){
    var v=0;
    v = (1.3333*3.142857*(r*r*r));
    return v;
}
var x=ballsize(2);
console.log(x);

//array......
var newarr=[1,2,3,,[10,11,12],6,"abc",9];
console.log(typeof(newarr[4][1]));
newarr[10]='mido';
console.log(newarr[10]);
console.log(newarr[3]);
console.log(newarr.join("*_*"));
console.log(typeof(newarr) );
newarr.pop();
console.log(newarr);
newarr.pop();
console.log(newarr);
newarr.push("new value");
console.log(newarr);
newarr.shift();
console.log(newarr);
newarr.unshift("first value");
console.log(newarr);
console.log(newarr.reverse());
console.log(newarr);

// new section.....
var x= document.getElementsByClassName("test")
for( var i = 0 ; i < x.length ; i++)
{
    x[i].style.color = 'red';
    x[i].style.backgroundColor = "gray";
    x[i].style.fontSize ="50px"
    x[i].style.width ="200px"
    x[i].style.margin ="20px"
    x[i].style.textAlign ="center"
}
//change the color...
var item_div = document.getElementById("item")
item_div.addEventListener("click", function()
{
    var r = Math.round( Math.random()*255 );
    var g = Math.round( Math.random()*255 );
    var b = Math.round( Math.random()*255 );
    item_div.style.background = 'rgb('+r+','+b+','+b+')';
}
)
document.body.addEventListener("click", function()
{
    var r = Math.round( Math.random()*255 );
    var g = Math.round( Math.random()*255 );
    var b = Math.round( Math.random()*255 );
    document.body.style.background = 'rgb('+r+','+b+','+b+')';
}
)
*/
var item = document.getElementById("item")
document.addEventListener('mousemove',function(e){
    var x = e.clientX
    var y = e.clientY
    item.style.left = x + "px"
    item.style.top = y + "px"
});