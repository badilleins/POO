//forma vieja
/*function Car(license,driver){
    this.id;
    this.license=license;
    this.driver=driver;
    this.passengers;
}
Car.prototype.printCharacteristics = function(){
    console.log(this.license);
    console.log(this.driver);
    console.log(this.driver.name);
    console.log(this.driver.password);
}*/
//Con la nueva
class Car{
    constructor(license,driver){
        this.id
        this.license=license
        this.driver=driver
        this.passengers
    }
    printCharacteristics(){
        console.log(this.license);
        console.log(this.driver);
        console.log(this.driver.name);
        console.log(this.driver.password);
    }
}