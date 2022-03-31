class Driver extends Account {
    String rate;
    Integer numberOfTrips;

    public Driver(String name, String password, String rate, Integer numberOfTrips) {
        super(name, password);
        this.rate = password;
        this.numberOfTrips = numberOfTrips;
    }
}