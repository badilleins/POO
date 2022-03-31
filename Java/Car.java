public class Car {
    Integer id;
    String license;
    Account driver;
    Integer passengers;

    public Car(String license, Account driver) {
        this.license = license;
        this.driver = driver;
    }

    void printCharacteristics() {
        System.out.printf("license: %s , Driver: %s \n", license, driver.name);
    }
}
