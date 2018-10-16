var Person1 = new Person('Alejandro', 22);
var Person2 = new Person('Perico', 65);
var Company = new Company('Company', 65);

Company.ableToWork(Person1);
Company.ableToWork(Person2);

alert(Company.workersAbleToWork + " trabajadores pueden trabajar");

function Person(name, age) {
    this.name = name;
    this.age = age;
}

function Company(name, topAgeWorkers) {
    this.name = name;
    this.topAgeWorkers = topAgeWorkers;
    this.workersAbleToWork = 0;
    this.ableToWork = ableToWork;

    function ableToWork(person) {
        if (person.age < this.topAgeWorkers) {
            this.workersAbleToWork++;
        }
    }
}