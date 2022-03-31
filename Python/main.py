from UberPool import UberPool
from UberX import UberX
from car import Car
from account import Account
if __name__ == "__main__":
    print("Hi world")

    """
    car = Car("DWDIRIJGN-56465", Account( "Stalin Badillo","BDIWEB312"))
    car.passengers= 5
    car.id=4646
    
    car2=Car("NFUIEUFE-4646",Account("Gloria Silva","BIWDBIW42"))
    car.passengers=4
    car.id=2545
    """
    uberX1 = UberX("NFKE465", Account("Stalin Badillo","dw2"),"toyota","truck")
    uberPool1 = UberPool("KFIE531",Account("Gloria Silva","trevissita"),"chevrolet","YO")

    print(vars(uberX1))
    print(vars(uberPool1))
    