

function task1(){

    //return "task1";

    a = new Promise(function (resolve, reject){
        setTimeout(function (){
            resolve("task1");
        }, 3000);
    });

    return a;
}

async function task2(){
    //return "task2";
    setTimeout(function (){
        return "task2";
    }, 2000);
}

async function task3(){
    return "task3";
    /*setTimeout(function (){
        return "task3";
    }, 1000);*/
}

task1().then(
    function (a){
        console.log(a);
        return task2();
    }
).then(
    function (a){
        console.log(a);
        return task3();
    }
)
