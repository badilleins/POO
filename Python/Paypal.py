from payment import Payment
class Paypal(Payment):
    user = str
    def __init__(self,id,user):
        super().__init__(id)
        self.user=user