
console.log("Javascript tutorial");
function print(x){ console.log(x); }

print('[1] function like ==> function square(x){ ... }');
function square(x){
	return x * x;
}
print(square(3));


print('[2] function like ==> let sq = function(x){ ... }');
let sq = function(x){
	return x * x;
}
print(sq(3));


print('[3] function like ==> sq2 = (x) => x * x');
sq2 = (x) => x * x;
print(sq2(3));


print('[4] function like ==> sq2 = x => x * x');
sq2 = x => x * x;
print(sq2(3));


print('[5] function like ==> sq2 = x => with multiple statements...');
sq3 = x => {
	const theAnswer = x * x;
	return theAnswer;
};
print(sq3(4));

print('============= Objects & Arrays =============');

car = {
	make: 'Toyota',
	model: 'Camry XLE',
	year: 2011,
	price: 40000
};

print('[6] car.year: '+car.year);
print('[7] car[year]: '+car['year']);

let cars = [];
print([1,2,3]);
print(["A", "B", "C"]);
print([{name: "Hablu"} , {name: "Gablu"} , {name: "Dablu"}]);

cars = [car];
print(cars);

cars.push({
	make: "Nissan",
	model: "Leaf",
	year: 2012,
	price: 1800
});

cars.push({
	make: "Ford",
	model: "F150",
	year: 2009,
	price: 1950
});

cars.push({
	make: "Chevrolet",
	model: "Trailblazer",
	year: 2009,
	price: 1550
});

cars.push({
	make: "Honda",
	model: "Pilot",
	year: 2003,
	price: 2200
});
print(cars);

print('[8] cars.length: ' + cars.length);

print('[9] vanila for loop [for i = 0; i < .....]');
for(let i = 0; i < cars.length; i++){
	const car = cars[i];
	print('Price['+i+']: '+car.price);
}

print('[10] for of loop ==> for(car of cars){ ... .. .}')
for(car of cars){
	print('Price['+car.make+']: '+car.price);
}


print('[11] forEach way... forEach takes a function as argument which is interesting!!!')
cars.forEach( car => { print(car.price);});


print('[12] forEach way-2: function was saved as a closure...');
printCarPrice = car => { print(car.price);}
cars.forEach(printCarPrice);


print('[13] prices = cars.map( car => car.price ); /*return car.price*/ ');
const prices = cars.map( car => car.price );
/*
prices = cars.map(
	function(car){
		return car.price;
	}
);
*/
print(prices);

prices.sort();
print('[14] prices prices.sort()');
print(prices);

const cheaper_cars = cars.filter(car => car.price < 2000);
print(cheaper_cars);

let formatCar = car => `${car.year} ${car.make} ${car.model}: $${car.price}`
print(formatCar(car));

cars.forEach(car => print(formatCar(car)));

let formatCar_shortVersion = car => { 
	/*
	const year = car.year;
	const make = car.make;
	const model = car.model;
	const price = car.price;
	*/
	//Below is new feature of ES6 called
	//Object destructuring !!!
	const{
		year,
		make,
		model,
		price
	} = car;
	return	`${year} ${make} ${model}: $${price}`
};

print('[15] shorter version of formatCar')
print(formatCar_shortVersion(car));

print('[16] shorter version of formatCar(with filter and join)')
const cheaper_cars2 = cars.filter(car => car.price < 2000 )
						  .map(formatCar_shortVersion)
						  .join('\n');

print(cheaper_cars2);

print('[17] JSON.stringify(cars)');
print(JSON.stringify(cars));

let cars_in_json_string = JSON.stringify(cars, null, 2);
print('[18] print(JSON.stringify(cars, null, 2));');
print(cars_in_json_string);

let cars_new_from_json_string = JSON.parse(cars_in_json_string);

print('[19] JSON.parse(cars_in_json_string)');
print(cars_new_from_json_string);

print('Eloquent JavaScript Chap-10: Modules')