

const demo = new Promise(function (resolve, reject) {

    setTimeout(function (){
        // t random tu 1 den 10
        let t = Math.floor((Math.random() * 10) + 1);
        if (t >= 5) {
            resolve(t);
        } else {
            reject(t);
        }
    }, 3000);
});

demo.then(
    function (t) {
        console.log("em da thi do . diem bai thi cua em la : " + t);
    }, function (t) {
        console.log("em da thi truot . thi lai vao tuan sau : "  + t);
    }
);