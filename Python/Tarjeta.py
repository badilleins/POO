from payment import Payment
class Tarjeta(Payment):
    typeCard = str
    password=int
    def __init__(self,id,typeCard,password):
        super().__init__(id)
        self.typeCard=typeCard
        self.password=password