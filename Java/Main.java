class Main {
    public static void main(String[] args) {
        Car car1 = new Car("ABUIDBU-3646", new Account("Stalin Badillo", "6452af"));
        car1.passengers = 4;
        car1.id = 2546;
        car1.printCharacteristics();

        Car car2 = new Car("NIWNDIE-5561", new Account("Gloria Silva", "567465de"));
        car2.passengers = 2;
        car2.id = 8752;
        car2.printCharacteristics();
    }
}