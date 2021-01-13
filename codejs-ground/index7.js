async function hello() {
    return greeting = await setTimeout(function (){
        Promise.resolve("Hello");
    }, 2000);
};

hello().then();