function myFuncion() {
    var price1 = 5;
    var price2 = 6;
    var total = price1 + price2;
    document.getElementById("demo1").innerHTML = "the total is: " + total;
}

function myFuncion2() {
    var PI = 3.14;
    var person = "John Doe";
    var answer = 'Yes i am!'
    document.getElementById("demo2").innerHTML = PI + "<br>" + person + "<br>" + answer;
    document.getElementById("demo2").innerHTML =
        "<p>" + PI + "</p>" +
        "<h2>" + person + "</h2>" +
        "<p>" + answer + "</p>";
}

function myFuncion3(){
    var carName = "Vocho";
    document.getElementById("demo3").innerHTML = carName;
}

function myFuncion4(){
    var person1 = "John Doe", carName1 = "Vocho", price1 = 200;
    var person2 = "Juan Alvarez", 
        carName2 = "Vochote",
        price2 = 200;
        document.getElementById("demo41").innerHTML = 
        "<h2>Vehicle brand</h2>" +
        "<p>"+carName1 +"</p>"+
        "<h2>owner</h2>" +
        "<p>"+person1 +"</p>"+
        "<h2>Price</h2>" +
        "<p>"+price1 +"</p>";
        /*  */
        document.getElementById("demo42").innerHTML = 
        "<h2>Vehicle brand</h2>" +
        "<p>"+carName2 +"</p>"+
        "<h2>owner</h2>" +
        "<p>"+person2 +"</p>"+
        "<h2>Price</h2>" +
        "<p>"+price2 +"</p>";
}

