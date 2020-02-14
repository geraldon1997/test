class Inverter{
    
    initialBatteryCapacity = null;
    finalBatteryCapacity = null;
    initialBatteryPercentage = 0.7;
    finalBatteryPercentage = 0.9;

    getInitialBatteryCapacity(batteryAmp){
        this.initialBatteryCapacity = batteryAmp * this.initialBatteryPercentage;
        return this.initalBatteryCapacity;
    }

    getFinalBatteryCapacity(){
        this.finalBatteryCapacity = this.initialBatteryCapacity * this.finalBatteryPercentage;
        return this.finalBatteryCapacity; 
    }

}

n = new Inverter;
n.getInitialBatteryCapacity(200);
n.getFinalBatteryCapacity();
console.log(n);