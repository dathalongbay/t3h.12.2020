
// dynamic property object
async function f() {
    console.log("---"); // "done!"
    let promise1 = new Promise((resolve, reject) => {
        setTimeout(() => resolve("done1!"), 5000)
    });
    let promise2 = new Promise((resolve, reject) => {
        setTimeout(() => resolve("done2!"), 3000)
    });
    let promise3 = new Promise((resolve, reject) => {
        setTimeout(() => resolve("done3!"), 1000)
    });

    let result1 = await promise1; // wait until the promise resolves (*)
    let result2 = await promise2; // wait until the promise resolves (*)
    let result3 = await promise3; // wait until the promise resolves (*)

    console.log(111); // "done!"
    console.log(result1); // "done!"
    console.log(222); // "done!"

    console.log(result2); // "done!"

    console.log(result3); // "done!"
}

f();
