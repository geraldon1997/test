class User{
    constructor(email,name){
        this.email = email;
        this.name = name;
        this.score = 0;
    }
    login(){
        console.log(this.name, 'just logged in');
        return this;
    }
    logout(){
        console.log(this.name, 'just logged out');
        return this;
    }
    updateScore(){
        this.score += 1;
        console.log(this.name, 'score is now', this.score);
        return this;
    }
}

class Admin extends User{
    deleteUser(user){
        users = users.filter(u => {
            return u.name != user.name
        })
    }
}


var userOne = new User('mosco@hades.com','mosco');
var userTwo = new User('gerald@obc.com','gerald');
var admin = new Admin('admin@host.com','admin');
var users = [userOne, userTwo, admin];



admin.deleteUser(userTwo);

console.log(users);