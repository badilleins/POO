class Paypal extends Payment {
    String user;

    public Paypal(Integer id, String user) {
        super(id);
        this.user = user;
    }
}