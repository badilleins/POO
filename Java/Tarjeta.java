class Tarjeta extends Payment {
    String typeCard;
    Integer password;

    public Tarjeta(Integer id, String typeCard, Integer password) {
        super(id);
        this.typeCard = typeCard;
        this.password = password;
    }
}
