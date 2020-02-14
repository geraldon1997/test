#include <iostream>
using namespace std;

double drainage_time;
int Qty,Battery_power,volt_out = 220;

double get_VA(int appliance_power){

double VA=appliance_power/0.8;
return VA;
}

double KVA(double VA) {

double KVA = VA/1000;
return KVA;
}

double get_DRAIN_CURR(double KVA){

double drain_current = (1000 * KVA) / volt_out;
return drain_current;
}

double get_battery_capacity(int Battery_power){

    double battery_capacity = Battery_power*0.7;
    return battery_capacity;
}

double get_real_battery_capacity( double battery_capacity){
    double real_battery_capacity = battery_capacity -(0.2*battery_capacity);
    return real_battery_capacity ;
}


int main(){

double appliance_power = 445;
Battery_power = 200;

double n = get_VA(appliance_power);
n = KVA(n);
n = get_DRAIN_CURR(n);

cout << n << endl ;

return 0;

}