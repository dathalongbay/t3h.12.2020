fetch('coffee.jpg')
.then(response => {
    if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
    } else {
        return response.blob();
    }
})
.then(myBlob => {
    let objectURL = URL.createObjectURL(myBlob);
    let image = document.createElement('img');
    image.src = objectURL;
    document.body.appendChild(image);
})
.catch(e => {
    console.log('There has been a problem with your fetch operation: ' + e.message);
});

// async
async function myFetch() {
    let response = await fetch('coffee.jpg');

    if (!response.ok) {
        throw new Error(`HTTP error! status: ${response.status}`);
    } else {
        let myBlob = await response.blob();

        let objectURL = URL.createObjectURL(myBlob);
        let image = document.createElement('img');
        image.src = objectURL;
        document.body.appendChild(image);
    }
}

myFetch()
    .catch(e => {
        console.log('There has been a problem with your fetch operation: ' + e.message);
    });

// async2
async function dxFun() {

    let task1 = new Promise((resolve, reject) => {
        setTimeout(() => {
            resolve();
        }, 2000);
    });

    let task2 = await task1;
    
    let task3 = await task2;

}