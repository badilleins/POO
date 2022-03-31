class Tarjeta extends Payment{
    constructor(id,typeCard,password){
        super(id)
        this.typeCard=typeCard
        this.password=password
    }
}