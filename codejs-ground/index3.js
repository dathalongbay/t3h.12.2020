


const demo = new Promise(function (resolve, reject){

    let t = Math.floor((Math.random() * 10) + 1);
    let lang = ' vi';
    if (t >= 5) {
        resolve(t, lang);
    } else {
        reject(t, lang);
    }
});

demo.then(
    function (t, vi){
        console.log(t + " " +  vi);
    },
    function (t, vi){
        console.log(t + " " + vi);
    });