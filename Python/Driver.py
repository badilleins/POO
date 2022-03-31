from account import Account
class Driver(Account):
    rate = str
    numberOfTrips = int
    def __init__(self,name,password,rate,numberOfTrips):
        super().__init__(name,password)
        self.rate = rate
        self.numberOfTrips=numberOfTrips